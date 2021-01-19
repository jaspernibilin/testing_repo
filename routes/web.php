<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {

    // $users = App\User::with('address')->get()->toArray();    // 

    $users = App\User::find(1)->address()->get(['user_id','country'])->toArray();    // 

    // $addr = App\Address::with('users')->get()->toArray();

    // $users = App\User::select("*")
    //             ->join("addresses", "addresses.user_id","=", "users.id")
    //             ->get()->toArray();     // 9 records

    // $users = App\User::select("users.name","users.email","addresses.country")
    //             ->join("addresses", "addresses.user_id","=", "users.id")
    //             ->get()->toArray();


    

    echo "<pre>";
    print_r($users);

    exit;
 

    return view('users.index', compact('users'));

});

