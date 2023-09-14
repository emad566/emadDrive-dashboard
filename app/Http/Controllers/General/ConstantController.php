<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;


class ConstantController extends Controller
{

    const LARGE_NUMBER_OF_PAGINATE = 10;
    const TINY_NUMBER_OF_PAGINATE = 8;

    const SORT_ASC = 'asc';
    const SORT_DESC = 'desc';


    const CAPTAINS = 'captains';
    const PASSENGERS = 'passengers';

    const CAPTAIN = 'Captain';
    const PASSENGER = 'Passenger';

    const CAPTAIN_APP = 'captain_NOTIFICATION';
    const PASSENGER_APP = 'passenger_NOTIFICATION';

    const CAPTAIN_MODEL = 'App\Models\Captain';
    const PASSENGER_MODEL = 'App\Models\Passenger';

    const RADIUS = 2.0; // KM
    const ITERATION = 30;  // seconds

    const REGISTER_STEP_ONE = 1;
    const REGISTER_STEP_TWO = 2;
    const REGISTER_STEP_THREE = 3;


    ## Status of captain 0 not active  - 1 active
    const REJECT_REASON = 4;
    const MISSING_FILES = 3;

    ## Trip Status
    const TRIP_PENDING = 'pending';
    const TRIP_WAITE_APPROVE = 'wait-approve';
    const TRIP_APPROVE = 'approve';
    const TRIP_ARRIVED = 'arrived';
    const TRIP_CANCEL = 'cancel';
    const TRIP_END = 'end';
    const TRIP_END_WITH_PAYMENT = 'end-with-payment';
    const TRIP_WAIT_NEW_CAPTAIN = 'wait-new-captain';
    const TRIP_CANCEL_PASSENGER = 'cancel-passenger';
    const TRIP_CANCEL_CAPTAIN = 'cancel-captain';
    # Trip Status Firebase
    const STATUS_PENDING = "pending";
    const STATUS_ACCEPTED = "accepted";
    const STATUS_ON_WAY = "on_the_way";
    const STATUS_ARRIVED = "arrived";
    const STATUS_START_TRIP = "start_trip";
    const STATUS_PAY = "pay";
    const STATUS_PAID = "paid";
    const STATUS_REJECT_PAYMENT = "reject_payment";
    const STATUS_CANCELED = "canceled";

    const ALL_CANCEL_STATUS = ['cancel-passenger','cancel-captain','cancel','canceled'];
    const BEFORE_START_STATUS = ['pending','accepted','on_the_way','arrived'];
    # Trip Type
    const SCHEDULE_TRIP = 'schedule-trip';
    const NORMAL_TRIP = 'normal-trip';



    ############ START:: File Paths ################
    const NO_IMAGE = 'assets/images/logo-icon.png';
    ############ END:: File Paths ##################

    ############ Account Status ##################
    const ACTIVE = 1;
    const FREEZING = 2;
    const BLOCK = 3;

    # Payment Method
    const CASH = 'Cash';
    const WALLET = 'Wallet';
    const ONLINE = 'Online';
    const BUSINESS = 'Business';
    const FAMILY = 'Family';
    const APPLEPAY = 'APPLEPAY';
    const STC_PAY = 'STC_PAY';
    const VISA = 'VISA';
    const MASTER = 'MASTER';
    const MADA = 'MADA';
    const PAYPAL = 'PAYPAL';

    const IDENTIFICATION_CARD="identification-card";
    const DRIVING_CERTIFICATE="driving-certificate";
    const VEHICLE_LICENSE="vehicle-license";
    const VEHICLE_INSURANCE="vehicle-insurance";

    const TRANSACTION_REFUND="Refund";
    const TRANSACTION_TRANSFER_WEEKLY="Transfer Weekly";
    const TRANSACTION_REFUND_TRANSAFER_WEEKLY="Refund Transfer Weekly";
    const TRANSACTION_TRANSFER_URGENT="Transfer Urgent";
    const TRANSACTION_REFUND_TRANSAFER_URGENT="Refund Transfer Urgent";

    const AUTO_COMPOLETE="autocomplete";
    const GEOCODE="geocode";
    const DIRECETIONS="directions";
    const STATIC_MAP="staticmap";

    const STATUS_SUCCESS = "success";

}
