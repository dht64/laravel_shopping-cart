<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new App\Product([
        	'imagePath' => 'https://cdn.tgdd.vn/Products/Images/42/71770/iphone-6s-plus-rosegold-400x450.png',
        	'title' => 'iPhone 6S 16GB',
        	'description' => "The moment you use iPhone 6s Plus, you know you’ve never felt anything like it. With just a single press, 3D Touch lets you do more than ever before. Live Photos bring your memories to life in a powerfully vivid way. And that’s just the beginning. Take a deeper look at iPhone 6s Plus, and you’ll find innovation on every level.",
        	'price' => 800,
        ]); 
        $product->save();

        $product = new App\Product([
        	'imagePath' => 'https://cdn.tgdd.vn/Products/Images/42/75180/samsung-galaxy-s7-edge-1-400x460.png',
        	'title' => 'Samsung Galaxy S7 Edge',
        	'description' => "Pushed way out of its comfort zone and into a high-stakes flagship redesign last season, Samsung's back to what it does best -- making itself comfortable at the top of the heap. OK, it sounds like a bold claim but by no means incredible if you've seen the Samsung Galaxy S7 edge.",
        	'price' => 850,
        ]); 
        $product->save();

        $product = new App\Product([
        	'imagePath' => 'https://cdn.tgdd.vn/Products/Images/42/85235/sony-xperia-xz-1-400x460.png',
        	'title' => 'Sony Xperia XZ',
        	'description' => "Xperia XZ perfects the fundamentals of a great smartphone. Packed with innovations in technology, it boasts a photo-pro’s camera, an intelligent battery and smart features that adapt to you. And it’s all delivered in a stunning, evolved design.",
        	'price' => 750,
        ]); 
        $product->save();

        $product = new App\Product([
        	'imagePath' => 'http://cdn2.gsmarena.com/vv/pics/htc/htc-10-5.jpg',
        	'title' => 'HTC 10',
        	'description' => "HTC 10. It’s more of what you’re looking for in a flagship phone. Unparalleled performance. Superb 24-bit Hi-Res sound. The world’s first* Optical Image Stabilization in both front and back cameras. And one of the highest smartphone camera rankings ever from DxOMark. All in a beautifully crafted metal unibody.",
        	'price' => 750,
        ]); 
        $product->save();
    }
}
