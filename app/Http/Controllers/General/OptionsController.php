<?php

namespace App\Http\Controllers\General;
use App\Http\Controllers\Controller;


class OptionsController extends Controller
{
    //Options
    const COLORS = ['Red','Orange','Yellow','Green','Blue','Purple','Pink','White','Gray','Brown','Black'];
    const BRANDS = ['BMW','Daewoo','Ford','Holden','Honda','Hyundai','Isuzu','Kia','Lexus','Mazda','Mitsubishi','Nissan','MG','Peugeot','Subaru','Suzuki','Toyota','Volkswagen'];
    const YEARS = ['2021','2020','2019','2018','2017','2016','2015','2014','2013','2012','2011','2010','2009','2008','2007','2006','2005'];
    const GENDER = ['Male', 'Female'];
    const CAPTAIN_STATUS = ['active','underReview','registration',];
    const DEVICE_TYPES = ['ios', 'android', 'web'];
    const PAGINATE_LIST = [2,5,10,20,50,100,200,400,500,1000];
}
