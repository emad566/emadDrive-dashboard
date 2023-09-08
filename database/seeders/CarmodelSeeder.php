<?php

namespace Database\Seeders;

use App\Http\Controllers\General\OptionsController;
use App\Models\Brand;
use App\Models\Carmodel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

class CarmodelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        App::setLocale('ar');
        foreach (Brand::all() as $brand){
            for($i=0; $i<7; $i++){
                Carmodel::create([
                    'ar_name'=>fake()->unique()->name(),
                    'en_name'=>fake()->unique()->name(),
                    'brand_id'=>$brand->id,
                    'status'=>1,
                ]);
            }
        }
    }
}
