<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $restaurant = [
        'name' => 'Home Flavor Restaurant',
        'tagline' => 'Fresh meals prepared daily using high-quality ingredients',
        'phone' => '0599000000',
        'address' => 'Nablus, Palestine',
        'opening_hours' => 'Open daily from 10:00 AM to 11:00 PM',
    ];

    $categories = [
        [
            'name' => 'Main Meals',
            'description' => 'Filling meals served with sides and salads',
            'meals' => [
                [
                    'name' => 'Beef Burger',
                    'description' => 'Grilled beef patty with cheese, lettuce, tomato, and special sauce.',
                    'price' => 28,
                    'icon' => '🍔',
                    'tags' => ['Most Popular', 'Filling Meal'],
                    'available' => true,
                ],
                [
                    'name' => 'Spicy Chicken Burger',
                    'description' => 'Crispy chicken breast with spicy sauce, lettuce, and pickles.',
                    'price' => 25,
                    'icon' => '🍗',
                    'tags' => ['Spicy', 'New'],
                    'available' => true,
                ],
                [
                    'name' => 'Grilled Chicken Steak',
                    'description' => 'Grilled chicken breast served with rice and vegetables.',
                    'price' => 35,
                    'icon' => '🥩',
                    'tags' => ['High Protein'],
                    'available' => true,
                ],
                [
                    'name' => 'Fish Meal',
                    'description' => 'Fried fish served with French fries and salad.',
                    'price' => 40,
                    'icon' => '🐟',
                    'tags' => ['Seafood'],
                    'available' => false,
                ],
            ],
        ],
        [
            'name' => 'Pizza',
            'description' => 'Fresh pizza made with dough prepared inside the restaurant',
            'meals' => [
                [
                    'name' => 'Margherita Pizza',
                    'description' => 'Tomato sauce, mozzarella cheese, and Italian herbs.',
                    'price' => 30,
                    'icon' => '🍕',
                    'tags' => ['Vegetarian'],
                    'available' => true,
                ],
                [
                    'name' => 'Chicken Pizza',
                    'description' => 'Grilled chicken, peppers, corn, and mozzarella cheese.',
                    'price' => 38,
                    'icon' => '🍕',
                    'tags' => ['Most Popular'],
                    'available' => true,
                ],
                [
                    'name' => 'Vegetable Pizza',
                    'description' => 'Mushrooms, olives, peppers, onions, corn, and mozzarella cheese.',
                    'price' => 34,
                    'icon' => '🍕',
                    'tags' => ['Vegetarian', 'Light'],
                    'available' => true,
                ],
            ],
        ],
        [
            'name' => 'Appetizers',
            'description' => 'Sides and appetizers suitable for sharing',
            'meals' => [
                [
                    'name' => 'French Fries',
                    'description' => 'Golden crispy French fries served with ketchup.',
                    'price' => 10,
                    'icon' => '🍟',
                    'tags' => [],
                    'available' => true,
                ],
                [
                    'name' => 'Spicy Chicken Wings',
                    'description' => 'Six chicken wings served with spicy sauce.',
                    'price' => 20,
                    'icon' => '🍗',
                    'tags' => ['Spicy'],
                    'available' => true,
                ],
                [
                    'name' => 'Green Salad',
                    'description' => 'Lettuce, cucumber, tomato, corn, and lemon dressing.',
                    'price' => 15,
                    'icon' => '🥗',
                    'tags' => ['Vegetarian', 'Healthy'],
                    'available' => true,
                ],
            ],
        ],
        [
            'name' => 'Drinks',
            'description' => 'Cold and refreshing drinks',
            'meals' => [
                [
                    'name' => 'Lemon and Mint',
                    'description' => 'Fresh lemon blended with mint and ice.',
                    'price' => 12,
                    'icon' => '🍋',
                    'tags' => ['Fresh'],
                    'available' => true,
                ],
                [
                    'name' => 'Orange Juice',
                    'description' => 'Natural orange juice without preservatives.',
                    'price' => 10,
                    'icon' => '🍊',
                    'tags' => ['Natural'],
                    'available' => true,
                ],
                [
                    'name' => 'Soft Drink',
                    'description' => 'A selection of cold soft drinks.',
                    'price' => 5,
                    'icon' => '🥤',
                    'tags' => [],
                    'available' => true,
                ],
            ],
        ],
    ];

    return view('menu.index', compact('restaurant', 'categories'));
})->name('menu');