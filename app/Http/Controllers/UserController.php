<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function test(){
        $data = [
            'name'=>'Abhishek',
            'phone'=>'8477877',
            'email'=>'asdfgh'
        ];
        return $data;
    }
}
