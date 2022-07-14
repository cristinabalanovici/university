<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
            'name' => 'Portable Table with Collapsible Legs',
            'slug' => 'portable-table',
            'description' => 'TableINC',
            'image' => 'https://m.media-amazon.com/images/I/91dXsw-3P-S._AC_SL1500_.jpg',
            'fulldescription' => 'These high-quality tables cater to any occasion. Dress them up for the holidays or take them outside for a barbecue. The Centerfold Blow Molded Table features a waterproof top that resist spills and weather. This versatile piece saves space and time with table legs that fold in and a center folding feature that makes transport and storage virtually effortless! Its rectangular length provides additional seating at both ends of table! Table has a heavy duty strong steel frame, steel legs, and a low maintenance, sturdy easy to clean top.',
            'price' => 48.75
            ],
            [
            'name' => 'Big Joe Classic Beanbag Smartmax',
            'slug'=>'big-joe-beanbag',
            'description' => 'Big Joe',
            'fulldescription' => 'Give playtime an upgrade with these sweet little Dot Bean Bag chairs. Perfectly sized for kiddos, they are covered in durable gabardine fabric and arrive perfectly filled with soft and fluffy beans for a super comfy spot to play, relax and more!',
            'image' => 'https://m.media-amazon.com/images/I/71+WFY9wrOL._AC_SL1500_.jpg',
            'price' => 33.33
            ],
            [
            'name' => 'HOMHUM Adjustable Standing Desk',
            'slug' => 'adjustable-desk',
            'description' => 'HOMHUM',
            'fulldescription' => 'How To Work Comfortably! You\'re not purchasing an electric standing desk, but an easier and stress-free reducing work style. With a standing desk, you don\'t have to sit all day long for work which may possibly cause you discomfort. You decide how your workstation fits your moment. Sit to Stand in Seconds! An electric standing desk is easy to switch from a sitting to a standing position, with just one press on the control panel. Allowing a vertical height change from 28.3in to 47.2in, this height adjustable desk will offer an appropriate height no matter the position.',
            'image' => 'https://m.media-amazon.com/images/I/61YpyEvjZgL._AC_SL1500_.jpg',
            'price' => 400
            ],
            [
            'name' => 'Roundhill Furniture Habit',
            'slug' => 'habit',
            'description' => 'Roundhill',
            'fulldescription' => 'Simply elegant, the Habit Gray Solid Wood Tufted Parsons Dining Chair has a style fit for royalty. This dining chair is upholstered in your choice of color perfectly accented with button tufting. The seats and backs are padded and button tufted. The durable wooden legs are finished in light color to match the style.',
            'image' => 'https://m.media-amazon.com/images/I/91U6p29KjsL._AC_SL1500_.jpg',
            'price' => 144.82
            ],
            [
            'name' => 'ZINUS Bed Frame',
            'slug' => 'zinus-frame',
            'description' => 'ZINUS',
            'fulldescription' => 'MATTRESS SUPPORT FOR YOUR KIDS OR GUEST ROOM - With its sleek and compact silhouette, this durable and versatile metal frame looks great on its own or as part of a pair in your guest room or kids’ bedroomUNDER BED STORAGE - This 12 inch platform features 11 inches of under bed space perfect for storing extra odds and ends',
            'image' => 'https://m.media-amazon.com/images/I/91WDUzzUa7L._AC_SL1500_.jpg',
            'price' => 81.87
            ],
            [
            'name' => 'GOTOTOP Coffee Table',
            'slug' => 'gototop-table',
            'description' => 'GOTOTOP',
            'fulldescription' => 'The bottom of this modern wood high gloss coffee table is attached with LED lights which can be controlled by a wireless remote; it can provide 4 light mode and 16 different colour, different mode and colour can create different atmosphere, you can choose as you want; which makes the table more than just a coffee table but also an exquisite unique atmosphere tool',
            'image' => 'https://m.media-amazon.com/images/I/81I+cps-xbL._AC_SL1500_.jpg',
            'price' => 269.99
            ],
            [
            'name' => 'Acrylic Makeup Mirror',
            'slug' => 'acrylic-mirror',
            'description' => 'Acrylic',
            'fulldescription' => 'The base is made of high-quality composite wood. The mirror surface is made of hardened high-quality acrylic, which is different from other acrylic mirrors. There is almost no distortion of the image',
            'image' => 'https://m.media-amazon.com/images/I/81fn0bbMrVL._AC_SL1500_.jpg',
            'price' => 12.90
            ]
            ];
    
            foreach ($products as $key => $value) {
                Product::create($value);
            }
    }
}
