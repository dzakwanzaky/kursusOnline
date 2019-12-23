<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RajaController extends Controller
{
    public function index(){
         $rajaongkir = new Rajaongkir('0cd6f8691c39c9a83e4ed513bc5601a6', Rajaongkir::ACCOUNT_STARTER);
         // inisiasi dengan config array
         $config['api_key'] = '0cd6f8691c39c9a83e4ed513bc5601a6';
         $config['account_type'] = 'starter';
 
         $rajaongkir = new Rajaongkir($config);
         $provinces = $rajaongkir->getProvinces();


    }
}
