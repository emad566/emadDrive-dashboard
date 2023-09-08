<?php

namespace Database\Seeders;

use App\Http\Controllers\General\OptionsController;
use App\Models\Brand;
use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        App::setLocale('ar');
        foreach (OptionsController::COLORS as $color){
            Color::create([
                'ar_name'=>__($color),
                'en_name'=>$color,
                'code'=>'',
                'status'=>1,
            ]);
        }
    }
}
