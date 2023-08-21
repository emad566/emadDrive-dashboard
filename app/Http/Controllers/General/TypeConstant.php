<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use ReflectionClass;

class TypeConstant extends Controller
{
    const BANK_CARD='bank_card';
    const EXPIRED_DOCUMENT='expired_document';
    const REQUIRED_DOCUMENT='require_document';
    const USER_ACTIVATED='user_activated';
    const NEW_CAR='new_car';
    const SAME_CAPTAIN='same_captain';
    const ACTIVE_VEHICLE='active_vehicle';
    const NEW_NEWS='new_news';
    const NEW_OFFERS='new_offers';
    const WALLET_TRANSFER='wallet_transfer';
    const BLOCK='block';
    const UN_BLOCK='un_block';
    const TICKET='ticket';
    const TRIP_CANCEL='trip_cancel';
    const MAKE_TRIP='make_trip';
    const BALANCE_TRANSFER='balance_transfer';
    const BALANCE_REFUND='balance_refund';
    const NEW_TRIP='new_trip';
    const PROFIT_REFENCE='profit_refernce';
    const REFENCE='refernce';
    const OFFLINE='offline';

    static function getConstants() {
        $oClass = new ReflectionClass(__CLASS__);
        return $oClass->getConstants();
    }
}
