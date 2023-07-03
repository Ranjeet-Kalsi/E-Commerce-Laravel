<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'LG mobile',
                'price' => '10000',
                'description' => 'a smartphon with 4GB ram 64GB memory',
                'category' => 'mobile',
                'gallery' => "https://i5.walmartimages.com/asr/28b8fb9b-466a-4bae-b86c-1fe79bec978e.e080c3b6510728123a08b13bb221548e.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"
            ],
            [
                'name' => 'iPhone',
                'price' => '60000',
                'description' => 'Apple',
                'category' => 'mobile',
                'gallery' => "https://rukminim1.flixcart.com/image/416/416/ktketu80/mobile/s/l/c/iphone-13-mlpf3hn-a-apple-original-imag6vzz5qvejz8z.jpeg?q=70"
            ],
            [
                'name' => 'Samsung',
                'price' => '14000',
                'description' => 'a smartphon with 4GB ram 64GB memory',
                'category' => 'mobile',
                'gallery' => "https://rukminim1.flixcart.com/image/416/416/xif0q/mobile/j/i/k/galaxy-f14-5g-sm-e146bzggins-samsung-original-imagnzdkprfwj9hv.jpeg?q=70"
            ],
            [
                'name' => 'OnePlus',
                'price' => '18000',
                'description' => 'a smartphon with 4GB ram 64GB memory',
                'category' => 'mobile',
                'gallery' => "https://rukminim1.flixcart.com/image/416/416/xif0q/mobile/2/p/8/-original-imagg2a4rmk94gay.jpeg?q=70"
            ],
            [
                'name' => 'LG Fridge',
                'price' => '17000',
                'description' => 'LG 185 L Direct Cool Single Door 5 Star Refrigerator with Base Drawer with Smart Inverter Compressor, Smart Connect, Fast Ice Making  (Scarlet Euphoria, GL-D201ASEU)',
                'category' => 'Fridge',
                'gallery' => "https://rukminim1.flixcart.com/image/416/416/xif0q/refrigerator-new/t/l/b/-original-imagqsgjqhhetu2g.jpeg?q=70"
            ],
            [
                'name' => 'Sony SmartTv',
                'price' => '17000',
                'description' => 'SONY Bravia 80 cm (32 inch) HD Ready LED Smart Google TV  (KD-32W830K)',
                'category' => 'SmartTv',
                'gallery' => "https://rukminim1.flixcart.com/image/416/416/l3929ow0/television/y/f/w/kd-32w830k-in5-sony-original-imagef45ctezbskc.jpeg?q=70"
            ],
        ]);
    }
}
