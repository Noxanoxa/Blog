<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function Showstring() {
        echo 'string';
    }
    public function getView() {
        //Another Way To pass parameters by object
    // Example usage of \stdClass
    // $obj = new \stdClass();

    // Assign properties to the object
    // $obj->name = "John";
    // $obj->age = 30;
    // $obj->id = '545556l';
    // return view('welcome', compact('obj'));
    $data = [];
    // $data = ['Samer', 'Amri'];
    return view('welcome', compact('data'));

        // $data = [];
        // $data = ['name' => 'samer', 'age' => 20, 'id' => '545556' ];
        // return view('welcome', $data);
    }

    public function getLanding() {
        return view('landing');
    }
}
