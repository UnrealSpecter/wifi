<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WifiUser;
use GuzzleHttp\Client;
use Carbon\Carbon;

class WifiUsersController extends Controller
{

    public function store(Request $request) {

        // create user instance
        $wifiuser = new WifiUser($request->all());

        //add consent
        $wifiuser->consent1 = $request->consent1;
        $wifiuser->consent2 = $request->consent2;

        //generate msisdn id based on timestamp
        $msisdn = Carbon::now()->timestamp;

        $wifiuser->msisdn = $msisdn;

        // open guzzle client
        $client = new Client();

        // set http headers
        $headers = [
            'Content-Type' => 'application/json',
            'X-Client-Authorization header' => 'xamUdW4Rvtju6ZNsPHYKxcNU',
            'X-Product-Name header' => 'setict-wifi',
        ];

        // what parameters / properties are needed here?
        $body = [
            'properties' => [
                'first_name' => $wifiuser->firstname,
                'last_name' => $wifiuser->lastname,
                'email' => $wifiuser->email,
                'msisdn' => $wifiuser->msisdn
            ],
            'consents' => [
                'consent1' => true,
                'consent2' => true
            ],
        ];

        //dunno if this works
        // you can die and dump with dd($variable);
        // $client->request('PUT', 'https://events-api.stg.boostcom.no/api/1.0/wifi/events/generic', $headers, $body)->getStatusCode();

        // save user
        $wifiuser->save();

        return redirect('/');
    }

}
