<?php

declare(strict_types=1);

return [

    'menu' => 'Products',
    'single' => 'product',
    'title' => 'Manage Catalog',
    'content' => 'Get closer to your first sale by adding and manage products.',
    'about_pricing' => 'About pricing display',
    'about_pricing_content' => 'All prices are in cents by default. To save 10€ (or 10$) you must enter 1000 cents for the currency formatting to be correct.',

    'cost_per_items_help_text' => 'Customers won’t see this.',
    'safety_security_help_text' => 'The safety stock is the limit stock for your products which alerts you if the product stock will soon be out of stock.',
    'quantity_inventory' => 'Quantity Inventory',
    'manage_inventories' => 'Manage Inventories',
    'inventory_name' => 'Inventory name',
    'product_can_returned' => 'This product can be returned',
    'product_can_returned_help_text' => 'Users have the option of returning this product if there is a problem or dissatisfaction.',
    'product_shipped' => 'This product will be shipped',
    'product_shipped_help_text' => 'Reassure to fill in the information concerning the shipment of the product.',
    'status' => 'Product status',
    'visible_help_text' => 'This product will be hidden from all sales channels.',
    'availability_description' => 'Specify a publication date so that your product are scheduled on your store.',
    'product_associations' => 'Associations',
    'related_products' => 'Related Products',
    'quantity_available' => 'Quantity Available',
    'current_qty_inventory' => 'Current quantity on this inventory',
    'stock_inventory_heading' => 'Stock & Inventory',
    'stock_inventory_description' => 'Configure the inventory and stock for this :item',
    'images_helpText' => 'Add images to your product.',
    'variant_images_helpText' => 'Add images to your variant.',
    'thumbnail_helpText' => 'Used to represent your product during checkout, social sharing and more.',
    'weight_dimension' => 'Weight and Dimension',
    'weight_dimension_help_text' => 'Used to calculate shipping charges during checkout and to label prices during order processing.',

    'modals' => [
        'title' => 'Delete this :item',
        'message' => 'Are you sure you want to delete this product? All information associated with this product will be deleted.',

        'variants' => [
            'title' => 'Stock management for this variant',
            'select' => 'Select inventory',
        ],
    ],

    'variants' => [
        'menu' => 'Variants',
        'single' => 'variant',
        'title' => 'Products variations',
        'description' => 'All variations of your product. The variations can each have their stock and price.',
        'add' => 'Add variant',
        'variant_title' => 'Variants ~ :name',
        'empty' => 'No variant found',
        'search_label' => 'Search variant',
        'search_placeholder' => 'Search product variant',
        'variant_information' => 'Variant information',

        'modal' => [
            'title' => 'About the variation',
            'description' => 'Variant name and price. If the price is empty, the price of the product will be applied.',
        ],
    ],

    'reviews' => [
        'title' => 'Customers reviews',
        'description' => 'This is where you will see the reviews of your customers and the ratings given to your products.',
        'view' => 'Reviews for :product',
        'published' => 'Published',
        'pending' => 'Pending',
        'approved' => 'Approved Review',
        'is_recommended' => 'Recommended Review',
        'approved_status' => 'Approved status',
        'approved_message' => 'Review approved status updated!',

        'subtitle' => 'Review for this product.',
        'reviewer' => 'Reviewer',
        'review' => 'Review',
        'review_content' => 'Content',
        'status' => 'Status',
        'rating' => 'Rating',

        'modal' => [
            'title' => 'Delete Review',
            'description' => 'Are you sure you want to delete this review? This review will can\'t be recover no more.',
            'success_message' => 'Review removed successfully!',
        ],
    ],

    'attributes' => [
        'title' => 'Product Attributes',
        'description' => 'All the attributes associated with this product.',
        'add' => 'Add attribute',
        'empty_title' => 'No enabled Attributes',
        'empty_values' => 'The attributes associated with this product are listed here.',

        'session' => [
            'delete' => 'Attribute removed',
            'delete_message' => 'You have successfully removed this attribute to product!',
            'delete_value' => 'Attribute value removed',
            'delete_value_message' => 'You have successfully removed the value of this attribute!',
            'added' => 'Attribute Added',
            'added_message' => 'You have successfully added an attribute to this product!',
        ],
    ],

    'inventory' => [
        'title' => 'Inventory attributes',
        'description' => 'Fields related to stock management in your store.',
        'stock_title' => 'Stock management',
        'stock_description' => 'Stock management in your different inventories.',
        'empty' => 'No adjustments made to inventory.',
        'movement' => 'Quantity Movement',
        'initial' => 'Initial inventory',
        'add' => 'Manually added',
        'remove' => 'Manually removed',
    ],

    'shipping' => [
        'description' => 'Product information about return product or define if product can be shipping to the customer.',
        'package_dimension' => 'Package dimension',
        'package_dimension_description' => 'Charge additional shipping costs based on packet dimensions covered here.',
    ],

    'related' => [
        'title' => 'Similar Products',
        'description' => 'All products that can be identified as similar or complementary to your product.',
        'empty' => 'No similar products found',
        'add_content' => 'Start by adding a related product to your product.',

        'modal' => [
            'title' => 'Add Similar Products',
            'search' => 'Search product',
            'search_placeholder' => 'Search product by name',
            'action' => 'Add Selected Products',
            'success_message' => 'Selected product(s) added',
            'no_results' => 'No products found',
        ],
    ],

    'notifications' => [
        'media_update' => 'Product media updated!',
        'replicated' => 'Product replicated!',
        'stock_update' => 'Product Stock successfully updated!',
        'seo_update' => 'Product SEO successfully updated!',
        'shipping_update' => 'Product shipping successfully updated!',
        'variation_create' => 'Product variation successfully added!',
        'variation_delete' => 'The variation has successfully removed!',
        'variation_update' => 'Variant successfully updated!',
        'related_added' => 'The product has successfully added to the related products!',
        'remove_related' => 'The product has successfully removed from the related products!',
    ],

];
