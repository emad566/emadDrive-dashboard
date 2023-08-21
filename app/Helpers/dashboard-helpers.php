<?php

use App\Models\Language;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

/**
 * default Passenger Avatar
 */
if (!function_exists('defaultPassengerAvatar')) {
    function defaultPassengerAvatar()
    {
        return 'assets/images/logo.png';
    }
}
/**
 * default Passenger Avatar
 */
if (!function_exists('defaultAvatar')) {
    function defaultAvatar()
    {
        return 'assets/images/logo.png';
    }
}

/**
 * Base Url For Image From Dashboard Project
 */
if (!function_exists('FileBaseURl')) {
    function FileBaseURl($file)
    {
        if ($file) {
            return env('APP_FILE_URL') . $file;
        }
    }
}

if (!function_exists('CalcMinutesOfTrip')) {
    function CalcMinutesOfTrip($start_date)
    {
        $from = Carbon::createFromFormat('Y-m-d H:i:s', $start_date);
        $to = Carbon::createFromFormat('Y-m-d H:i:s', Carbon::now());
        return $to->diffInMinutes($from);
    }
}

if (!function_exists('convertToMinutes')) {
    function convertToMinutes($second)
    {
        if ($second == 0) {
            return 0;
        }
        $second = $second / 60;
        return round($second, 2, PHP_ROUND_HALF_UP);
    }
}

if (!function_exists('convertToKM')) {
    function convertToKm($meter)
    {
        if ($meter == 0) {
            return 0;
        }
        $meter = $meter / 1000;
        return round($meter, 2, PHP_ROUND_HALF_UP);
    }
}

if (!function_exists('tripTimeInMinutes')) {
    function tripTimeInMinutes($from, $to)
    {
        if (!$from || !$to) return '0';

        if (!$from) $from = now();
        if (!$to) $to = now();

        $from = Carbon::createFromFormat('Y-m-d H:i:s', $from);
        $to = Carbon::createFromFormat('Y-m-d H:i:s', $to);
        return $to->diffInMinutes($from);
    }
}



/**
 * Get list of languages
 */

if (!function_exists('languages')) {
    function languages()
    {
        $languages = Language::all();
        return $languages;
    }
}
/**
 * upload64
 */
if (!function_exists('upload64')) {
    function upload64($file, $path)
    {
        $baseDir = 'uploads/' . $path;

        $name = sha1(time() . $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName = "{$name}.{$extension}";

        $file->move(public_path() . '/' . $baseDir, $fileName);

        return "{$baseDir}/{$fileName}";
    }
}
/**
 * Upload
 */
if (!function_exists('upload')) {
    function upload($file, $path)
    {
        $baseDir = 'uploads/' . $path;

        $name = sha1(time() . $file->getClientOriginalName());
        $extension = $file->getClientOriginalExtension();
        $fileName = "{$name}.{$extension}";

        $file->move(public_path() . '/' . $baseDir, $fileName);

        return "{$baseDir}/{$fileName}";
    }
}
/**
 * Upload Storage
 */
if (!function_exists('uploadToStorage')) {
    function uploadToStorage($file, $path)
    {

        $baseDir = 'public/' . $path;

        $name   = sha1(time() . $file->getClientOriginalExtension());
        $extension = $file->getClientOriginalExtension();

        $fileName = "{$name}.{$extension}";

        $img = Image::make($file->getRealPath());

        $img->stream(); // <-- Key point

        //dd();
        Storage::disk('local')->put($baseDir . '/' . $fileName, $img, 'public');
        return "{$path}/{$fileName}";
    }
}
/**
 * Upload Storage
 */
if (!function_exists('uploadStorage')) {
    function uploadStorage($file, $name, $path)
    {

        $baseDir = 'public/' . $path;

        $name   = $name . $file->getClientOriginalExtension();
        $extension = $file->getClientOriginalExtension();

        $fileName = "{$name}.{$extension}";

        $img = Image::make($file->getRealPath());

        $img->stream(); // <-- Key point

        Storage::disk('local')->put($baseDir . '/' . $fileName, $img, 'public');
        return "{$path}/{$fileName}";
    }
}


/**
 * Gender
 */
if (!function_exists('gender')) {
    function gender($gander)
    {
        if ($gander == 'male') {
            return '/assets/media/svg/avatars/001-boy.svg';
        } else {
            return '/assets/media/svg/avatars/006-girl-3.svg ';
        }
    }
}

/**
 * Generate random Color
 */
if (!function_exists('random_color_part')) {
    function random_color_part()
    {
        return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    }
}

if (!function_exists('generateRandomColor')) {
    function generateRandomColor()
    {
        return  random_color_part() . random_color_part() . random_color_part();
    }
}
/**
 * Generate Code
 */
if (!function_exists('generateRandomCode')) {
    function generateRandomCode($string)
    {
        return $string . '-' . substr(md5(microtime()), rand(0, 26), 5);
    }
}

/**
 * trip Status
 */
if (!function_exists('tripStatus')) {
    function tripStatus($status)
    {
        if ($status == 'approve') {
            return '<span class="label label-xl label-light-success label-inline">' . __("approve") . '</span>';
        } elseif ($status == 'pending') {
            return '<span class="label label-xl label-light-warning label-inline">' . __("pending") . '</span>';
        } elseif ($status == 'arrived') {
            return '<span class="label label-xl label-light-warning label-inline">' . __("arrived") . '</span>';
        } elseif ($status == 'cancel') {
            return    '<span class="label label-xl label-light-danger label-inline">' . __("cancel") . '</span>';
        } elseif ($status == 'cancel-passenger') {
            return    '<span class="label label-xl label-light-danger label-inline">' . __("Cancel Passenger") . '</span>';
        } elseif ($status == 'cancel-captain') {
            return    '<span class="label label-xl label-light-danger label-inline">' . __("Cancel Captain") . '</span>';
        } elseif ($status == 'cancel-before-captain-accept') {
            return    '<span class="label label-xl label-light-danger label-inline">' . __("Cancel Before Captain Accept") . '</span>';
        } elseif ($status == 'time-out-before-accept') {
            return    '<span class="label label-xl label-light-info label-inline">' . __("Time Out Before Accept") . '</span>';
        } elseif ($status == 'wait-approve') {
            return    '<span class="label label-xl label-light-danger label-inline">' . __("Waite Approve") . '</span>';
        } elseif ($status == 'end') {
            return    '<span class="label label-xl label-light-primary label-inline">' . __("end") . '</span>';
        } elseif ($status == 'end-with-payment') {
            return    '<span class="label label-xl label-light-primary label-inline">' . __("end with payment") . '</span>';
        }
    }
}



/**
 * Color To Hexa
 */
if (!function_exists('hex_to_name')) {
    function hex_to_name($hex)
    {
        $colors  =  array(
            '#000000' => 'black',
            '#FFFFFF' => 'white',
            '#C0C0C0' => 'silver',
            '#A9A9A9' => 'grey',
            '#0000FF' => 'blue',
            '#FF0000' => 'red',
            '#8B4513' => 'brown',
            '#32CD32' => 'green',
            '#FFC300' => 'yellow',
        );

        if (isset($colors[$hex])) {
            return ($colors[$hex]);
        } else {
            return ('white');
        }
    }
}


/**
 * calc between two days ex: Sunday - Thursday = 4 Days
 */
if (!function_exists('daysUntil')) {
    function daysUntil($start, $end)
    {

        $lookup = ['Sunday' => 0, 'Monday' => 1, 'Tuesday' => 2, 'Wednesday' => 3, 'Thursday' => 4, 'Friday' => 5, 'Saturday' => 6];
        $days = $lookup[$end] - $lookup[$start] + ($lookup[$end] <= $lookup[$start] ? 7 : 0);
        //return "{$days} days from {$start} to {$end}\n";
        return $days;
    }
}

/**
 * Round Amount
 */
if (!function_exists('roundAmount')) {
    function roundAmount($amount)
    {
        return round($amount, 2, PHP_ROUND_HALF_UP);
    }
}
/**
 * Round Amount Down
 */
if (!function_exists('roundAmountDown')) {
    function roundAmountDown($amount)
    {
        return number_format($amount, 2, '.', '');
    }
}

/**
 * Get Distance By Lat,Lng
 */
if (!function_exists('getDistanceByLatLng')) {
    function getDistanceByLatLng($latFrom, $lngFrom, $latTo, $lngTo)
    {
        $latFrom = deg2rad($latFrom);
        $lngFrom = deg2rad($lngFrom);
        $latTo = deg2rad($latTo);
        $lngTo = deg2rad($lngTo);

        $latDelta = $latTo - $latFrom;
        $lngDelta = $lngTo - $lngFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) + cos($latFrom) * cos($latTo) * pow(sin($lngDelta / 2), 2)));
        return array(
            'success' => true,
            'distanceValue' => $angle * 6371000,
            'distance' => $angle * 6371000,
        );
    }
}
