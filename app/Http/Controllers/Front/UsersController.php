<?php

namespace App\Http\Controllers\Front;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

class UsersController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function ShowUserName() {
        return 'Samer Amri';
    }
    public function ShowUserId() {
        return '2oo3';
    }
    public function ShowUserAge() {
        return '20';
    }

    public function __construct() {
        // $this->middleware('auth');
        // To Except Some funcs from midd
        $this->middleware('auth')->except('ShowUserId');
        // $this->middleware('auth')->except(['ShowUserId', 'ShowUserAge']);
    }
}

