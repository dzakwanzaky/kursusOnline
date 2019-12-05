<?php
namespace App;
class SendOTP{
    public static function sendOTP($phone){
        $code=rand(1111,9999);
        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'+6289613954111',
            'from'=> 'Properti',
            'text'=>'Verify code: '.$code,
        ]);
        return $code;
    }
}