<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WifiUser;
use GuzzleHttp\Client;

class WifiUsersController extends Controller
{

    public function store(Request $request) {

        // create user instance
        $wifiuser = new WifiUser($request->all());

        // open client
        $client = new GuzzleHttp\Client();

        // what headers are needed here?
        $headers = [
            'Content-Type: application/json',
            'X-Client-Authorization: B7t9U9tsoWsGhrv2ouUoSqpM',
            'X-Product-Name: facebook',
            'X-Subproduct-Name: campaign-10-2017',
            'X-User-Agent: CURL manual test',
        ];

        // what parameters / properties are needed here?
        $body = [];

        // 
        $request = new Request('PUT', 'https://bpc-api.boostcom.no/v3/infinity-mall/members', $headers, $body);

        // save user
        $wifiuser->save();

        return redirect('/');
    }

}
