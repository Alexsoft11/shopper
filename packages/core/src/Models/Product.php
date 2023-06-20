<?php

declare(strict_types=1);

namespace Shopper\Core\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Shopper\Core\Contracts\ReviewRateable;
use Shopper\Core\Helpers\Price;
use Shopper\Core\Traits\CanHaveDiscount;
use Shopper\Core\Traits\HasMedia;
use Shopper\Core\Traits\HasPrice;
use Shopper\Core\Traits\HasSlug;
use Shopper\Core\Traits\HasStock;
use Shopper\Core\Traits\ReviewRateable as ReviewRateableTrait;
use Spatie\MediaLibrary\HasMedia as SpatieHasMedia;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Product extends Model implements SpatieHasMedia, ReviewRateable
{
    use CanHaveDiscount;
    use HasFactory;
    use HasPrice;
    use HasRecursiveRelationships;
    use HasStock;
    use HasSlug;
    use HasMedia;
    use ReviewRateableTrait;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array<string>|bool
     */
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'featured' => 'boolean',
        'is_visible' => 'boolean',
        'requires_shipping' => 'boolean',
        'backorder' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function getTable(): string
    {
        return shopper_table('products');
    }

    public function getFormattedPriceAttribute(): ?string
    {
        if ($this->parent_id) {
            return $this->price_amount
                ? $this->formattedPrice($this->price_amount)
                : ($this->parent->price_amount ? $this->formattedPrice($this->parent->price_amount) : null);
        }

        return $this->price_amount
                ? $this->formattedPrice($this->price_amount)
                : null;
    }

    public function getPriceAttribute(): ?Price
    {
        if (! $this->price_amount) {
            return null;
        }

        return Price::from($this->price_amount);
    }

    public function getVariationsStockAttribute(): int
    {
        $stock = 0;

        if ($this->variations->isNotEmpty()) {
            foreach ($this->variations as $variation) {
                $stock += $variation->stock;
            }
        }

        return $stock;
    }

    public function scopePublish(Builder $query): Builder
    {
        return $query->whereDate('published_at', '<=', now())
            ->where('is_visible', true);
    }

    public function variations(): HasMany
    {
        return $this->hasMany(config('shopper.models.product'), 'parent_id');
    }

    public function channels(): MorphToMany
    {
        return $this->morphedByMany(Channel::class, 'productable', 'product_has_relations');
    }

    public function relatedProducts(): MorphToMany
    {
        return $this->morphedByMany(config('shopper.models.product'), 'productable', 'product_has_relations');
    }

    public function categories(): MorphToMany
    {
        return $this->morphedByMany(config('shopper.models.category'), 'productable', 'product_has_relations');
    }

    public function collections(): MorphToMany
    {
        return $this->morphedByMany(config('shopper.models.collection'), 'productable', 'product_has_relations');
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(config('shopper.models.brand'), 'brand_id');
    }

    public function attributes(): HasMany
    {
        return $this->hasMany(ProductAttribute::class);
    }
}