<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function send(){
        $data = [
            'nama' => 'al',
            'email' => 'al@gmail.com'
        ];

        dd($data);
    }
}
