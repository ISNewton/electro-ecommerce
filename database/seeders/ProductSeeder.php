<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
            [
                'id' => 1,
                'product_name' => 'Insignia 32-inch Class F20 Series Smart HD 720p Fire TV',
                'product_quantity' => 5,
                'sell_price' => 200,
                'discount_price' => 150,
                'subcategory_id' => 1,
                'brand_id' => 10,
                'product_discription' => 'DETAILS IN THE DARK: See brilliantly intense, 4K UHD contrast delivered by Mini LEDs and Quantum Matrix Technology',
            ],
            [
                'id' => 2,
                'product_name' => 'SAMSUNG 75-Inch Class Neo QLED QN90A Series - 4K UHD Quantum HDR 32x Smart TV with Alexa Built-in ',
                'product_quantity' => 5,
                'sell_price' => 3200,
                'discount_price' => 2800,
                'subcategory_id' => 1,
                'brand_id' => 1,
                'product_discription' => 'DETAILS IN THE DARK: See brilliantly intense, 4K UHD contrast delivered by Mini LEDs and Quantum Matrix Technology ',
            ],
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            [
                'id' => 3,
                'product_name' => 'Angrox Universal Remote Control for Samsung-TV-Remote All Samsung LCD LED HDTV 3D Smart TVs Models ',
                'product_quantity' => 5,
                'sell_price' => 40,
                'discount_price' => 20,
                'subcategory_id' => 2,
                'brand_id' => 2,
                'product_discription' => 'DETAILS IN THE DARK: See brilliantly intense, 4K UHD contrast delivered by Mini LEDs and Quantum Matrix Technology ',
            ],
            [
                'id' => 4,
                'product_name' => 'PERLESMITH Full Motion TV Wall Mount for 26-55 Inch TVs with Articulating Arms Swivels Tilt Extension',
                'product_quantity' => 5,
                'sell_price' => 80,
                'discount_price' => 50,
                'subcategory_id' => 2,
                'brand_id' => 9,
                'product_discription' => 'DETAILS IN THE DARK: See brilliantly intense, 4K UHD contrast delivered by Mini LEDs and Quantum Matrix Technology ',
            ],
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            [
                'id' => 5,
                'product_name' => 'ZINGYOU Condenser Microphone Bundle, BM-800 Mic Kit with Adjustable Mic Suspension Scissor Arm, Metal Shock Mount',
                'product_quantity' => 5,
                'sell_price' => 85,
                'discount_price' => 50,
                'subcategory_id' => 3,
                'brand_id' => 7,
                'product_discription' => 'DETAILS IN THE DARK: See brilliantly intense, 4K UHD contrast delivered by Mini LEDs and Quantum Matrix Technology ',
            ],
            [
                'id' => 6,
                'product_name' => 'EMB MX08BT 99 DSP 8-Channel Audio Mixer Mixing Console MP3 Sound Desk With Bluetooth ',
                'product_quantity' => 5,
                'sell_price' => 299,
                'discount_price' => 200,
                'subcategory_id' => 3,
                'brand_id' => 5,
                'product_discription' => ' 99 Preset Digital Effect Programs Sound Processor
                    Musical Instrument Input Switch( For Guitar, Bass, Aerophone, etc. ) ',
            ],
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            [
                'id' => 7,
                'product_name' => '2020 Apple MacBook Air Laptop',
                'product_quantity' => 5,
                'sell_price' => 2099,
                'discount_price' => 1099,
                'subcategory_id' => 4,
                'brand_id' => 3,
                'product_discription' => '2020 Apple MacBook Air Laptop: Apple M1 Chip, 13” Retina Display, 8GB RAM, 256GB SSD Storage, Backlit Keyboard, FaceTime HD Camera, Touch ID. Works with iPhone/iPad; Gold',
            ],
            [
                'id' => 8,
                'product_name' => 'Acer Aspire 5 A515-46-R3UB',
                'product_quantity' => 5,
                'sell_price' => 1342,
                'discount_price' => 1000,
                'subcategory_id' => 4,
                'brand_id' => 8,
                'product_discription' => 'Powerful Productivity: AMD Ryzen 3 3350U delivers desktop-class performance and amazing battery life in a slim notebook. With Precision Boost, get up to 3.5GHz for your high-demand applications ',
            ],
            [
                'id' => 9,
                'product_name' => 'Lenovo Flex 5 Laptop',
                'product_quantity' => 5,
                'sell_price' => 1100,
                'discount_price' => 999,
                'subcategory_id' => 4,
                'brand_id' => 9,
                'product_discription' => '2022 Newest Lenovo IdeaPad 3i 15.6" FHD Laptop, Intel Core i3-1115G4(up to 4.1GHz), 20GB RAM, 512GB NVMe SSD, Webcam, Bluetooth, Windows 11 S, Blue',
            ],
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            [
                'id' => 10,
                'product_name' => 'Skytech Blaze II Gaming PC Desktop – Intel Core i3 10105F 3.7 GHz',
                'product_quantity' => 5,
                'sell_price' => 5500,
                'discount_price' => 5400,
                'subcategory_id' => 5,
                'brand_id' => 7,
                'product_discription' => 'Skytech Blaze II Gaming PC Desktop – Intel Core i3 10105F 3.7 GHz, GTX 1650, 500GB SSD, 16G DDR4 3200, 600W Gold PSU, AC Wi-Fi, Windows 10 Home 64-bit',
            ],
            [
                'id' => 11,
                'product_name' => 'Skytech Archangel Gaming PC Desktop – Intel Core i5 12400F 2.5 GHz',
                'product_quantity' => 5,
                'sell_price' => 1100,
                'discount_price' => 999,
                'subcategory_id' => 5,
                'brand_id' => 8,
                'product_discription' => 'Skytech Archangel Gaming PC Desktop – Intel Core i5 12400F 2.5 GHz, RTX 3060, 1TB NVME SSD, 16G DDR4 3200, 600W Gold PSU, AC Wi-Fi, Windows 10 Home 64-bit',
            ],
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            [
                'id' => 12,
                'product_name' => 'Logitech Signature M650 L Full Size Wireless Mouse - for Large Sized Hands ',
                'product_quantity' => 5,
                'sell_price' => 40,
                'discount_price' => 33,
                'subcategory_id' => 6,
                'brand_id' => 9,
                'product_discription' => 'Logitech Signature M650 L Full Size Wireless Mouse - for Large Sized Hands, 2-Year Battery, Silent Clicks, Customizable Side Buttons, Bluetooth, Multi-Device Compatibility - Black ',
            ],
            [
                'id' => 13,
                'product_name' => 'havit Wired Gaming Keyboard Mouse Combo LED Rainbow',
                'product_quantity' => 5,
                'sell_price' => 1100,
                'discount_price' => 999,
                'subcategory_id' => 6,
                'brand_id' => 6,
                'product_discription' => 'havit Wired Gaming Keyboard Mouse Combo LED Rainbow Backlit Gaming Keyboard RGB Gaming Mouse Ergonomic Wrist Rest 104 Keys Keyboard Mouse 4800 DPI for Windows PC Gamers (Black)',
            ],
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            [
                'id' => 14,
                'product_name' => '2022 Newest Playtation Gaming Console PS.5 Disk Edition',
                'product_quantity' => 5,
                'sell_price' => 400,
                'discount_price' => 373,
                'subcategory_id' => 7,
                'brand_id' => 5,
                'product_discription' => '2022 Newest Playtation Gaming Console PS.5 Disk Edition, AMD Ryzen Zen 8 Cores, 16GB GDDR6 RAM, 825GB SSD + One Wireless Controller + w/MarxsolController Charging Dock + 3pcs Controller Skins ',
            ],
            [
                'id' => 15,
                'product_name' => 'XB-ox Series-X 1TB SSD Console - 16GB GDDR6 Memory',
                'product_quantity' => 5,
                'sell_price' => 1100,
                'discount_price' => 999,
                'subcategory_id' => 7,
                'brand_id' => 6,
                'product_discription' => 'XB-ox Series-X 1TB SSD Console - 16GB GDDR6 Memory, 4K UHD Blu-Ray, 8X Cores Custom Zen 2 CPU, RDNA 2 GPU, Up to 8K HDR, True 4K Gaming Resolution, 802.11AC WiFi, Ethernet',
            ],
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            [
                'id' => 16,
                'product_name' => 'Grand Theft Auto V Premium Edition Playstation 4',
                'product_quantity' => 5,
                'sell_price' => 100,
                'discount_price' => 99,
                'subcategory_id' => 8,
                'brand_id' => 5,
                'product_discription' => 'Grand Theft Auto V Premium Edition Playstation 4',
            ],
            [
                'id' => 17,
                'product_name' => 'God of War Hits - PlayStation 4',
                'product_quantity' => 5,
                'sell_price' => 100,
                'discount_price' => 99,
                'subcategory_id' => 8,
                'brand_id' => 3,
                'product_discription' => 'God of War Hits - PlayStation 4',
            ],
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            [
                'id' => 18,
                'product_name' => 'Apple iPhone 13 (128GB, Pink) [Locked] + Carrier Subscription',
                'product_quantity' => 5,
                'sell_price' => 1800,
                'discount_price' => 1400,
                'subcategory_id' => 9,
                'brand_id' => 3,
                'product_discription' => 'Apple iPhone 13 (128GB, Pink) [Locked] + Carrier Subscription',
            ],
            [
                'id' => 19,   
                'product_name' => 'Samsung Electronics Galaxy A03s Cell Phone',
                'product_quantity' => 5,
                'sell_price' => 700,
                'discount_price' => 500,
                'subcategory_id' => 9,
                'brand_id' => 1,
                'product_discription' => 'Samsung  Galaxy A03s Cell Phone, Factory Unlocked Android Smartphone, 32GB, Long Lasting Battery, Expandable Storage, 3 Camera Lenses, Infinite Display, US Version, Black',
            ],
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ]);

    }
}
