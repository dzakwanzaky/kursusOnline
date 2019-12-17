<?php
namespace App;
class SendOTP{
    public static function sendOTP($phone){
        $code=rand(1111,9999);
        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'+62'.(float) $phone,
            'from'=> 'Properti',
            'text'=>'Verify code: '.$code,
        ]);
        return $code;
    }
}