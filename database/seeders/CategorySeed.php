<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_category')->truncate();

        DB::table('_category')->insert([
            [
            // CPU
                'name' => 'AMD Ryzen 9 3900X',
                'description' => 'Processor 12-core 24-threads socket AM4 game cache 70 MB 7 nm TDP 105W with cooling system',
                'price' => 490,
                'regular_price' => 500,
                'imgpath' => 'assets/img/Project-images/CPU/CPU.jpg',
                'category' => 'CPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'AMD Ryzen 5 7600X',
                'description' => 'Processor with high performance, suitable for gaming and multitasking.',
                'price' => 199.98,
                'regular_price' => 200,
                'imgpath' => 'assets/img/Project-images/CPU/AMD Ryzen 5 7600X.png',
                'category' => 'CPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'AMD Ryzen 7 7800X3D',
                'description' => 'Advanced processor with high performance for gaming and productivity.',
                'price' => 339.99,
                'regular_price' => 400,
                'imgpath' => 'assets/img/Project-images/CPU/AMD Ryzen 7 7800X3D.jpg',
                'category' => 'CPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'AMD Ryzen 9 7950X',
                'description' => 'High-end processor with 16 cores, designed for intensive tasks and gaming.',
                'price' => 549.99,
                'regular_price' => 400,
                'imgpath' => 'assets/img/Project-images/CPU/AMD Ryzen 9 7950X.jpg',
                'category' => 'CPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Intel Core i5-12400',
                'description' => 'Mid-range processor ideal for everyday computing and gaming.',
                'price' => 145.85,
                'regular_price' => 400,
                'imgpath' => 'assets/img/Project-images/CPU/Intel Core i5-12400.jpg',
                'category' => 'CPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Intel Core i7-12700KF',
                'description' => 'High-performance processor designed for gaming and creative tasks.',
                'price' => 189.27,
                'regular_price' => 400,
                'imgpath' => 'assets/img/Project-images/CPU/Intel Core i7-12700KF.png',
                'category' => 'CPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Intel® Core i9 12900K',
                'description' => 'Top-tier processor with excellent performance for demanding applications.',
                'category' => 'CPU',
                'price' => 426.47,
                'regular_price' => 400,
                'imgpath' => 'assets/img/Project-images/CPU/Intel® Core i9 12900K.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // GPU
            [
                'name' => 'GeForce RTX 4090 GAMING X TRIO 24G',
                'description' => 'High-performance graphics card featuring the latest NVIDIA Ampere architecture, 24GB GDDR6X VRAM, and advanced cooling technology.',
                'price' => 1499.99,
                'regular_price' => 1599.99,
                'imgpath' => 'assets/img/Project-images/GPU/GPU.png',
                'category' => 'GPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'PNY GeForce RTX 4090 XLR8',
                'description' => 'High-performance graphics card featuring the latest NVIDIA Ampere architecture, 24GB GDDR6X VRAM, and advanced cooling technology.',
                'price' => 1824.99,
                'regular_price' => 1599.99,
                'imgpath' => 'assets/img/Project-images/GPU/PNY GeForce RTX 4090 XLR8.png',
                'category' => 'GPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'ASUS ROG Strix GeForce RTX™ 4060 OC Edition',
                'description' => 'High-performance graphics card featuring the latest NVIDIA Ampere architecture, 24GB GDDR6X VRAM, and advanced cooling technology.',
                'price' => 379.99,
                'regular_price' => 1599.99,
                'imgpath' => 'assets/img/Project-images/GPU/ASUS ROG Strix GeForce RTX™ 4060 OC Edition.jpg',
                'category' => 'GPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'ASUS ROG Strix GeForce RTX™ 3060 OC Edition',
                'description' => 'High-performance graphics card featuring the latest NVIDIA Ampere architecture, 24GB GDDR6X VRAM, and advanced cooling technology.',
                'price' => 379.99,
                'regular_price' => 1599.99,
                'imgpath' => 'assets/img/Project-images/GPU/ASUS ROG Strix GeForce RTX™ 3060 OC Edition.png',
                'category' => 'GPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'ASUS ROG Herculx Graphics Card',
                'description' => 'High-performance graphics card featuring the latest NVIDIA Ampere architecture, 24GB GDDR6X VRAM, and advanced cooling technology.',
                'price' => 39.99,
                'regular_price' => 1599.99,
                'imgpath' => 'assets/img/Project-images/GPU/ASUS ROG Herculx Graphics Card.png',
                'category' => 'GPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'AORUS RTX 3090',
                'description' => 'High-performance graphics card featuring the latest NVIDIA Ampere architecture, 24GB GDDR6X VRAM, and advanced cooling technology.',
                'price' => 1799.00,
                'regular_price' => 1599.99,
                'imgpath' => 'assets/img/Project-images/GPU/AORUS RTX 3090.png',
                'category' => 'GPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'AORUS GeForce RTX 4060 Ti ELITE 8G',
                'description' => 'High-performance DDR4 RAM with customizable RGB lighting, ideal for gaming and content creation.',
                'price' => 586.64,
                'regular_price' => 1599.99,
                'imgpath' => 'assets/img/Project-images/GPU/AORUS GeForce RTX 4060 Ti ELITE 8G.png',
                'category' => 'GPU',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Ram
            [
                'name' => 'Corsair Vengeance RGB PRO',
                'description' => 'High-performance DDR4 RAM with customizable RGB lighting, ideal for gaming and content creation.',
                'price' => 129.99,
                'regular_price' => 139.99,
                'imgpath' => 'assets/img/Project-images/Ram/Ram.jpg',
                'category' => 'RAM',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'ADATA XPG SPECTRIX D60G',
                'description' => 'High-performance DDR4 RAM with customizable RGB lighting, ideal for gaming and content creation.',
                'price' => 66.83,
                'regular_price' => 139.99,
                'imgpath' => 'assets/img/Project-images/Ram/ADATA XPG SPECTRIX D60G.png',
                'category' => 'RAM',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'ADATA XPG SPECTRIX D41 RGB',
                'description' => 'High-performance DDR4 RAM with customizable RGB lighting, ideal for gaming and content creation.',
                'price' => 39.32,
                'regular_price' => 139.99,
                'imgpath' => 'assets/img/Project-images/Ram/ADATA XPG SPECTRIX D41 RGB.png',
                'category' => 'RAM',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'addlink AddGame Spider X5 RGB',
                'description' => 'High-performance DDR4 RAM with customizable RGB lighting, ideal for gaming and content creation.',
                'price' => 119.99,
                'regular_price' => 139.99,
                'imgpath' => 'assets/img/Project-images/Ram/addlink AddGame Spider X5 RGB.jpg',
                'category' => 'RAM',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'G.SKILL Trident Z RGB Series',
                'description' => 'High-performance DDR4 RAM with customizable RGB lighting, ideal for gaming and content creation.',
                'price' => 79.99,
                'regular_price' => 139.99,
                'imgpath' => 'assets/img/Project-images/Ram/G.SKILL Trident Z RGB Series.jpg',
                'category' => 'RAM',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // PowerSupply
            [
                'name' => 'ASUS ROG STRIX 750G',
                'description' => '80 PLUS Gold certified fully modular power supply with 1000W capacity, designed for gaming enthusiasts with ASUS ROG Strix aesthetics.',
                'price' => 199.99,
                'regular_price' => 219.99,
                'imgpath' => 'storage/assets/img/Project-images/PowerSupply/Powersupply.png',
                'category' => 'PowerSupply',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Asus Rog Thor 1200W Platinum',
                'description' => '80 PLUS Gold certified fully modular power supply with 1000W capacity, designed for gaming enthusiasts with ASUS ROG Strix aesthetics.',
                'price' => 296.99,
                'regular_price' => 219.99,
                'imgpath' => 'storage/assets/img/Project-images/PowerSupply/Asus_Rog_Thor_1200W_Platinum.jpg',
                'category' => 'PowerSupply',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'EVGA 850 G5 80 Plus Gold',
                'description' => '80 PLUS Gold certified fully modular power supply with 1000W capacity, designed for gaming enthusiasts with ASUS ROG Strix aesthetics.',
                'price' => 114.99,
                'regular_price' => 219.99,
                'imgpath' => 'storage/assets/img/Project-images/PowerSupply/EVGA_850_G5_80_Plus_Gold.png',
                'category' => 'PowerSupply',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Storage
            [
                'name' => 'Samsung 2TB 870 QVO SSD',
                'description' => 'High-capacity 2.5-inch internal SSD with 2TB storage, designed for fast and reliable data storage and retrieval.',
                'price' => 249.99,
                'regular_price' => 279.99,
                'imgpath' => 'assets/img/Project-images/Storage/SSD.jpg',
                'category' => 'Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'SK hynix Platinum P41 2TB',
                'description' => 'High-capacity 2.5-inch internal SSD with 2TB storage, designed for fast and reliable data storage and retrieval.',
                'price' => 174.99,
                'regular_price' => 279.99,
                'imgpath' => 'assets/img/Project-images/Storage/SK hynix Platinum P41 2TB.png',
                'category' => 'Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Samsung 990 PRO 2TB',
                'description' => 'High-capacity 2.5-inch internal SSD with 2TB storage, designed for fast and reliable data storage and retrieval.',
                'price' => 151.88,
                'regular_price' => 279.99,
                'imgpath' => 'assets/img/Project-images/Storage/Samsung 990 PRO 2TB.png',
                'category' => 'Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Seagate IronWolf Pro 12TB',
                'description' => 'High-capacity 3.5-inch internal hard drive designed for NAS systems, featuring 12TB storage capacity, optimized for 24x7 operation, and built for reliability.',
                'price' => 399.99,
                'regular_price' => 449.99,
                'imgpath' => 'assets/img/Project-images/Storage/Hard Disk.png',
                'category' => 'Storage',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Motherboard
            [
                'name' => 'Asus ROG Strix B460-F Gaming Motherboard',
                'description' => 'High-performance ATX motherboard designed for gaming, featuring Intel B460 chipset, support for 10th Gen Intel Core processors, and RGB lighting.',
                'price' => 199.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Motherboard/Motherboard.png',
                'category' => 'Motherboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'ASUS ROG Strix Z790-E',
                'description' => 'High-performance ATX motherboard designed for gaming, featuring Intel B460 chipset, support for 10th Gen Intel Core processors, and RGB lighting.',
                'price' => 359.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Motherboard/ASUS ROG Strix Z790-E.jpg',
                'category' => 'Motherboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'GIGABYTE B550 AORUS ELITE AX V2',
                'description' => 'High-performance ATX motherboard designed for gaming, featuring Intel B460 chipset, support for 10th Gen Intel Core processors, and RGB lighting.',
                'price' => 139.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Motherboard/GIGABYTE B550 AORUS ELITE AX V2.jpg',
                'category' => 'Motherboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'GIGABYTE X670 AORUS Elite AX',
                'description' => 'High-performance ATX motherboard designed for gaming, featuring Intel B460 chipset, support for 10th Gen Intel Core processors, and RGB lighting.',
                'price' => 246.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Motherboard/GIGABYTE X670 AORUS Elite AX.jpg',
                'category' => 'Motherboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'MSI MAG B550 TOMAHAWK',
                'description' => 'High-performance ATX motherboard designed for gaming, featuring Intel B460 chipset, support for 10th Gen Intel Core processors, and RGB lighting.',
                'price' => 159.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Motherboard/MSI MAG B550 TOMAHAWK.jpg',
                'category' => 'Motherboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Asus ROG STRIX Z370-E',
                'description' => 'High-performance ATX motherboard designed for gaming, featuring Intel B460 chipset, support for 10th Gen Intel Core processors, and RGB lighting.',
                'price' => 339.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Motherboard/ROG STRIX Z370-E.jpg',
                'category' => 'Motherboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Mouse
            [
                'name' => "Logitech G Pro X",
                'description' => "Ultra-lightweight gaming mouse designed for professional gamers, featuring Logitech's HERO sensor, customizable buttons, and a sleek design.",
                'price' => 129.99,
                'regular_price' => 169.99,
                'imgpath' => 'assets/img/Project-images/Mouse/Mouse.png',
                'category' => 'Mouse',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Logitech G Pro X Superlight",
                'description' => "Ultra-lightweight gaming mouse designed for professional gamers, featuring Logitech's HERO sensor, customizable buttons, and a sleek design.",
                'price' => 141.99,
                'regular_price' => 169.99,
                'imgpath' => 'assets/img/Project-images/Mouse/Logitech G Pro X Superlight Wireless.png',
                'category' => 'Mouse',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Logitech G502 HERO High Performance",
                'description' => "Ultra-lightweight gaming mouse designed for professional gamers, featuring Logitech's HERO sensor, customizable buttons, and a sleek design.",
                'price' => 39.99,
                'regular_price' => 169.99,
                'imgpath' => 'assets/img/Project-images/Mouse/Logitech G502 HERO High Performance.png',
                'category' => 'Mouse',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Glorious Model O Wireless Gaming Mouse",
                'description' => "Ultra-lightweight gaming mouse designed for professional gamers, featuring Logitech's HERO sensor, customizable buttons, and a sleek design.",
                'price' => 69.99,
                'regular_price' => 169.99,
                'imgpath' => 'assets/img/Project-images/Mouse/Glorious Model O Wireless Gaming Mouse.png',
                'category' => 'Mouse',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Razer Viper Ultimate Lightweight Wireless Gaming",
                'description' => "Ultra-lightweight gaming mouse designed for professional gamers, featuring Logitech's HERO sensor, customizable buttons, and a sleek design.",
                'price' => 114.99,
                'regular_price' => 169.99,
                'imgpath' => 'assets/img/Project-images/Mouse/Razer Viper Ultimate Lightweight Wireless Gaming.png',
                'category' => 'Mouse',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => "Razer Basilisk V3 Customizable Ergonomic Gaming Mouse",
                'description' => "Ultra-lightweight gaming mouse designed for professional gamers, featuring Logitech's HERO sensor, customizable buttons, and a sleek design.",
                'price' => 49.99,
                'regular_price' => 169.99,
                'imgpath' => 'assets/img/Project-images/Mouse/Razer Basilisk V3 Customizable Ergonomic Gaming Mouse.jpg',
                'category' => 'Mouse',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Keyboard
            [
                'name' => 'SteelSeries Apex Pro TKL',
                'description' => 'Tenkeyless mechanical gaming keyboard with customizable mechanical switches, programmable RGB lighting, and a magnetic wrist rest for enhanced comfort.',
                'price' => 199.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Keyboard/Keyboard.jpg',
                'category' => 'Keyboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DRACONIC K530 PRO Keyboard',
                'description' => 'Tenkeyless mechanical gaming keyboard with customizable mechanical switches, programmable RGB lighting, and a magnetic wrist rest for enhanced comfort.',
                'price' => 59.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Keyboard/DRACONIC K530 PRO.png',
                'category' => 'Keyboard',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ducky One 2 Mini RGB Keyboard',
                'description' => 'Tenkeyless mechanical gaming keyboard with customizable mechanical switches, programmable RGB lighting, and a magnetic wrist rest for enhanced comfort.',
                'price' => 99.99,
                'regular_price' => 219.99,
                'imgpath' => 'assets/img/Project-images/Keyboard/Ducky One 2 Mini RGB.jpg',
                'category' => 'Keyboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'FIZZ K617 60 White',
                'description' => 'Tenkeyless mechanical gaming keyboard with customizable mechanical switches, programmable RGB lighting, and a magnetic wrist rest for enhanced comfort.',
                'price' => 44.99,
                'regular_price' => 99.99,
                'imgpath' => 'assets/img/Project-images/Keyboard/FIZZ K617 60 White.png',
                'category' => 'Keyboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Logitech G915 TKL Tenkeyless LIGHTSPEED',
                'description' => 'Tenkeyless mechanical gaming keyboard with customizable mechanical switches, programmable RGB lighting, and a magnetic wrist rest for enhanced comfort.',
                'price' => 229.99,
                'regular_price' => 249.99,
                'imgpath' => 'assets/img/Project-images/Keyboard/Logitech G915 TKL Tenkeyless LIGHTSPEED.png',
                'category' => 'Keyboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Razer Huntsman V3 Pro Mini 60% Esports Gaming Keyboard',
                'description' => 'Tenkeyless mechanical gaming keyboard with customizable mechanical switches, programmable RGB lighting, and a magnetic wrist rest for enhanced comfort.',
                'price' => 559.99,
                'regular_price' => 699.99,
                'imgpath' => 'assets/img/Project-images/Keyboard/Razer Huntsman V3 Pro Mini 60% Esports Gaming Keyboard.png',
                'category' => 'Keyboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Razer Huntsman V3 Pro TKL Esports',
                'description' => 'Tenkeyless mechanical gaming keyboard with customizable mechanical switches, programmable RGB lighting, and a magnetic wrist rest for enhanced comfort.',
                'price' => 219.99,
                'regular_price' => 699.99,
                'imgpath' => 'assets/img/Project-images/Keyboard/Razer Huntsman V3 Pro TKL Esports.png',
                'category' => 'Keyboard',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Monitor
            [
                'name' => 'Canvas 32Q Curved Monitor',
                'description' => '32-inch curved monitor with QHD resolution, designed for immersive gaming and multimedia experiences, featuring a sleek design and multiple connectivity options.',
                'price' => 499.99,
                'regular_price' => 549.99,
                'imgpath' => 'assets/img/Project-images/Monitor/Monitor.png',
                'category' => 'Monitor',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Alienware 27 AW2723DF',
                'description' => '27-inch curved monitor with QHD resolution, designed for immersive gaming and multimedia experiences, featuring a sleek design and multiple connectivity options.',
                'price' => 579.99,
                'regular_price' => 549.99,
                'imgpath' => 'assets/img/Project-images/Monitor/Alienware 27 AW2723DF.jpg',
                'category' => 'Monitor',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'MSI G27CQ4 E2',
                'description' => '27-inch curved monitor with QHD resolution, designed for immersive gaming and multimedia experiences, featuring a sleek design and multiple connectivity options.',
                'price' => 579.99,
                'regular_price' => 549.99,
                'imgpath' => 'assets/img/Project-images/Monitor/MSI G27CQ4 E2.png',
                'category' => 'Monitor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'name' => 'Rog Strix Xg32vqr 32',
                'description' => '27-inch curved monitor with QHD resolution, designed for immersive gaming and multimedia experiences, featuring a sleek design and multiple connectivity options.',
                'price' => 449.99,
                'regular_price' => 549.99,
                'imgpath' => 'assets/img/Project-images/Monitor/Rog Strix Xg32vqr 32.jpg',
                'category' => 'Monitor',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'ROG Swift OLED PG27AQDM',
                'description' => '27-inch curved monitor with QHD resolution, designed for immersive gaming and multimedia experiences, featuring a sleek design and multiple connectivity options.',
                'price' => 1793.99,
                'regular_price' => 1999.99,
                'imgpath' => 'assets/img/Project-images/Monitor/ROG Swift OLED PG27AQDM.png',
                'category' => 'Monitor',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'ROG SWIFT PG258Q',
                'description' => '27-inch curved monitor with QHD resolution, designed for immersive gaming and multimedia experiences, featuring a sleek design and multiple connectivity options.',
                'price' => 719.99,
                'regular_price' => 798.99,
                'imgpath' => 'assets/img/Project-images/Monitor/ROG SWIFT PG258Q.png',
                'category' => 'Monitor',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Samsung 57 Odyssey Neo G9 G95NC',
                'description' => '27-inch curved monitor with QHD resolution, designed for immersive gaming and multimedia experiences, featuring a sleek design and multiple connectivity options.',
                'price' => 2499.98,
                'regular_price' => 2879.99,
                'imgpath' => 'assets/img/Project-images/Monitor/Samsung 57 Odyssey Neo G9 G95NC.png',
                'category' => 'Monitor',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Samsung-34 Odyssey Oled',
                'description' => '27-inch curved monitor with QHD resolution, designed for immersive gaming and multimedia experiences, featuring a sleek design and multiple connectivity options.',
                'price' => 1291.99,
                'regular_price' => 2879.99,
                'imgpath' => 'assets/img/Project-images/Monitor/Samsung-34 Odyssey Oled.jpg',
                'category' => 'Monitor',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Case
            [
                'name' => 'Asus Rog Strix Helios',
                'description' => 'ASUS ROG Strix Helios GX601 RGB Mid-Tower Computer Case for ATX/EATX Motherboards with tempered glass, aluminum frame, GPU braces, 420mm radiator support, and Aura Sync.',
                'price' => 90.00,
                'regular_price' => 100.00,
                'imgpath' => 'assets/img/Project-images/Case/Asus Rog Strix Helios.png',
                'category' => 'Case',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Cooler Master MasterBox TD500',
                'description' => 'The Cooler Master MasterBox TD500 is a stylish mid-tower computer case designed for optimal airflow and aesthetics. It features a spacious interior, tempered glass side panel, and support for various cooling configurations.',
                'price' => 90.00,
                'regular_price' => 100.00,
                'imgpath' => 'assets/img/Project-images/Case/Cooler Master MasterBox TD500.png',
                'category' => 'Case',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'COOLER MASTER MASTERCASE H500',
                'description' => 'The Cooler Master MasterBox H500 is a stylish mid-tower computer case designed for optimal airflow and aesthetics. It features a spacious interior, tempered glass side panel, and support for various cooling configurations.',
                'price' => 129.00,
                'regular_price' => 100.00,
                'imgpath' => 'assets/img/Project-images/Case/COOLER MASTER MASTERCASE H500.png',
                                'category' => 'Case',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Gaming Y PRO Arctic',
                'description' => 'The Cooler Master MasterBox H500 is a stylish mid-tower computer case designed for optimal airflow and aesthetics. It features a spacious interior, tempered glass side panel, and support for various cooling configurations.',
                'price' => 129.00,
                'regular_price' => 100.00,
                'imgpath' => 'assets/img/Project-images/Case/Gaming Y PRO Arctic.png',
                'category' => 'Case',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'MSI Mag Vampiric 100R',
                'description' => 'The Cooler Master MasterBox H500 is a stylish mid-tower computer case designed for optimal airflow and aesthetics. It features a spacious interior, tempered glass side panel, and support for various cooling configurations.',
                'price' => 150.00,
                'regular_price' => 200.00,
                'imgpath' => 'assets/img/Project-images/Case/MSI Mag Vampiric 100R.png',
                'category' => 'Case',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Cooler
            [
                'name' => 'Asus ROG RYUO III 360 ARGB',
                'description' => 'The Cooler Master MasterBox H500 is a stylish mid-tower computer case designed for optimal airflow and aesthetics. It features a spacious interior, tempered glass side panel, and support for various cooling configurations.',
                'price' => 189.99,
                'regular_price' => 200.00,
                'imgpath' => 'assets/img/Project-images/Cooler/Asus ROG RYUO III 360 ARGB.png',
                'category' => 'Cooler',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'NZXT Kraken Z73 RGB',
                'description' => 'The Cooler Master MasterBox H500 is a stylish mid-tower computer case designed for optimal airflow and aesthetics. It features a spacious interior, tempered glass side panel, and support for various cooling configurations.',
                'price' => 279.99,
                'regular_price' => 300.00,
                'imgpath' => 'assets/img/Project-images/Cooler/NZXT Kraken Z73 RGB.png',
                'category' => 'Cooler',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'CORSAIR iCUE AR120 RGB',
                'description' => 'The Cooler Master MasterBox H500 is a stylish mid-tower computer case designed for optimal airflow and aesthetics. It features a spacious interior, tempered glass side panel, and support for various cooling configurations.',
                'price' => 19.99,
                'regular_price' => 300.00,
                'imgpath' => 'assets/img/Project-images/Cooler/CORSAIR iCUE AR120 RGB.jpg',
                'category' => 'Cooler',
                'created_at' => now(),
                'updated_at' => now(),
            ],
                
            // HeadSet
            [
                'name' => 'G733 LIGHTSPEED Wireless RGB',
                'description' => 'Wireless gaming headset designed for performance and comfort. Outfitted with all the surround sound, voice filters, and advanced lighting you need to look, sound, and play with more style than ever.',
                'price' => 134.99,
                'regular_price' => 200.00,
                'imgpath' => 'assets/img/Project-images/Headset/G733 LIGHTSPEED Wireless RGB.jpg',
                'category' => 'Headset',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'HyperX Cloud Alpha',
                'description' => 'Gaming Headset, Dual Chamber Drivers, Legendary Comfort, Aluminum Frame, Detachable Microphone, Works on PC, PS4, PS5, Xbox One/ Series X|S, Nintendo Switch and Mobile (Red)',
                'price' => 134.99,
                'regular_price' => 200.00,
                'imgpath' => 'assets/img/Project-images/Headset/HyperX Cloud Alpha.png',
                'category' => 'Headset',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Logitech G435 LIGHTSPEED Wireless',
                'description' => 'Play games and music with featherlight comfort and powerful and clean sound. Dual beamforming mics reduce background noise. Connect to your devices via gaming-grade LIGHTSPEED wireless and Bluetooth®.',
                'price' => 435.99,
                'regular_price' => 200.00,
                'imgpath' => 'assets/img/Project-images/Headset/Logitech G435 LIGHTSPEED Wireless.jpg',
                'category' => 'Headset',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Logitech PRO X Gaming Headset',
                'description' => 'Pro-grade comms and precision you need to win thanks to PRO-G 50 mm drivers, next-gen surround sound, and BLUE VO!CE. All with the freedom and mobility of advanced LIGHTSPEED wireless.',
                'price' => 229.99,
                'regular_price' => 300.00,
                'imgpath' => 'assets/img/Project-images/Headset/Logitech PRO X Gaming Headset.jpg',
                'category' => 'Headset',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'SteelSeries Arctis Pro Wireless',
                'description' => 'SteelSeries Arctis Pro Wireless Gaming Headset - High Fidelity 2.4 GHz Wireless - Mixable Bluetooth - Non-Stop Dual Battery - OLED Base Station - AI Noise Canceling Mic - PC, PS5, PS4, Mobile - Black',
                'price' => 369.99,
                'regular_price' => 300.00,
                'imgpath' => 'assets/img/Project-images/Headset/SteelSeries Arctis Pro Wireless.jpg',
                'category' => 'Headset',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            // Others
            [
                'name' => 'Arozzi Arena Gaming Desk',
                'description' => 'Spacious gaming desk with a large mouse pad surface, cable management system, and adjustable height, designed to provide a comfortable and immersive gaming experience.',
                'price' => 249.99,
                'regular_price' => 279.99,
                'imgpath' => 'assets/img/Project-images/Table.png',
                'category' => 'Other',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Blitzed Gaming Racing Style Chair',
                'description' => 'Ergonomic racing style gaming chair with adjustable armrests, lumbar support, and a high-back design for enhanced comfort during long gaming sessions.',
                'price' => 199.99,
                'regular_price' => 229.99,
                'imgpath' => 'assets/img/Project-images/Chair.png',
                'category' => 'Other',
                'created_at' => now(),
                'updated_at' => now(),
            ],     
            
            ]);
        }
    }
    
