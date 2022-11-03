<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [

            //banners
            [
                'name' => 'View Banner',
                'guard_name' => 'web',
                'parent' => 'Banner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Banner',
                'guard_name' => 'web',
                'parent' => 'Banner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Banner',
                'guard_name' => 'web',
                'parent' => 'Banner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Banner',
                'guard_name' => 'web',
                'parent' => 'Banner',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'View Reports',
                'guard_name' => 'web',
                'parent' => 'Report',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //banners
            [
                'name' => 'View Deal Of The Week',
                'guard_name' => 'web',
                'parent' => 'Deal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Deal Of The Week',
                'guard_name' => 'web',
                'parent' => 'Deal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Deal Of The Week',
                'guard_name' => 'web',
                'parent' => 'Deal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Deal Of The Week',
                'guard_name' => 'web',
                'parent' => 'Deal',
                'created_at' => now(),
                'updated_at' => now(),
            ],

              //company details
              [
                'name' => 'View Company Details',
                'guard_name' => 'web',
                'parent' => 'Company',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Company Details',
                'guard_name' => 'web',
                'parent' => 'Company',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //pages
            [
                'name' => 'View Page',
                'guard_name' => 'web',
                'parent' => 'Page',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Page',
                'guard_name' => 'web',
                'parent' => 'Page',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Page',
                'guard_name' => 'web',
                'parent' => 'Page',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Page',
                'guard_name' => 'web',
                'parent' => 'Page',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //faq
            [
                'name' => 'View Faq',
                'guard_name' => 'web',
                'parent' => 'Faq',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Faq',
                'guard_name' => 'web',
                'parent' => 'Faq',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Faq',
                'guard_name' => 'web',
                'parent' => 'Faq',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Faq',
                'guard_name' => 'web',
                'parent' => 'Faq',
                'created_at' => now(),
                'updated_at' => now(),
            ],

             //currencies
             [
                'name' => 'View Currency',
                'guard_name' => 'web',
                'parent' => 'Currency',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Currency',
                'guard_name' => 'web',
                'parent' => 'Currency',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Currency',
                'guard_name' => 'web',
                'parent' => 'Currency',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Currency',
                'guard_name' => 'web',
                'parent' => 'Currency',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //category
            [
                'name' => 'View Category',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Category',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Category',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Category',
                'guard_name' => 'web',
                'parent' => 'Category',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //product
            [
                'name' => 'View Product',
                'guard_name' => 'web',
                'parent' => 'Product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Product',
                'guard_name' => 'web',
                'parent' => 'Product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Product',
                'guard_name' => 'web',
                'parent' => 'Product',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Product',
                'guard_name' => 'web',
                'parent' => 'Product',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //attributes
            [
                'name' => 'View Attribute',
                'guard_name' => 'web',
                'parent' => 'Attribute',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Attribute',
                'guard_name' => 'web',
                'parent' => 'Attribute',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Attribute',
                'guard_name' => 'web',
                'parent' => 'Attribute',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Attribute',
                'guard_name' => 'web',
                'parent' => 'Attribute',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //collections
            [
                'name' => 'View Collection',
                'guard_name' => 'web',
                'parent' => 'Collection',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Collection',
                'guard_name' => 'web',
                'parent' => 'Collection',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Collection',
                'guard_name' => 'web',
                'parent' => 'Collection',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Collection',
                'guard_name' => 'web',
                'parent' => 'Collection',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            //orders
            [
                'name' => 'View Order',
                'guard_name' => 'web',
                'parent' => 'Order',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'View Order Details',
                'guard_name' => 'web',
                'parent' => 'Order',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Order Status',
                'guard_name' => 'web',
                'parent' => 'Order',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Order',
                'guard_name' => 'web',
                'parent' => 'Order',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // customers
            [
                'name' => 'View Customers',
                'guard_name' => 'web',
                'parent' => 'Customer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'View Business Customers',
                'guard_name' => 'web',
                'parent' => 'Customer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Business Customers Status',
                'guard_name' => 'web',
                'parent' => 'Customer',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // logs
            [
                'name' => 'View Activity Log',
                'guard_name' => 'web',
                'parent' => 'Log',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // newsletters
            [
                'name' => 'View Newsletter',
                'guard_name' => 'web',
                'parent' => 'Newsletter',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // blogs
            [
                'name' => 'View Blog',
                'guard_name' => 'web',
                'parent' => 'Blog',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Blog',
                'guard_name' => 'web',
                'parent' => 'Blog',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Blog',
                'guard_name' => 'web',
                'parent' => 'Blog',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Blog',
                'guard_name' => 'web',
                'parent' => 'Blog',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // tickets
            [
                'name' => 'View Ticket',
                'guard_name' => 'web',
                'parent' => 'Ticket',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Change Ticket Status',
                'guard_name' => 'web',
                'parent' => 'Ticket',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // coupon
            [
                'name' => 'View Coupon',
                'guard_name' => 'web',
                'parent' => 'Coupon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Create Coupon',
                'guard_name' => 'web',
                'parent' => 'Coupon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Edit Coupon',
                'guard_name' => 'web',
                'parent' => 'Coupon',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delete Coupon',
                'guard_name' => 'web',
                'parent' => 'Coupon',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        Permission::insert($permissions);
    }
}
