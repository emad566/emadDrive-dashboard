<?php

namespace Database\Seeders;

use App\Http\Controllers\General\OptionsController;
use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Stichoza\GoogleTranslate\GoogleTranslate;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        App::setLocale('ar');
        foreach (OptionsController::BRANDS as $brand){
            Brand::create([
                'ar_name'=>GoogleTranslate::trans($brand, 'ar'),
                'en_name'=>$brand,
                'icon'=>'',
                'status'=>1,
            ]);
        }
    }
}
