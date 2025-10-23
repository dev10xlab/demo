<?php

use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use App\Models\Order;


Artisan::command('create:user', function () {

    User::create(['name'=>'Andrubale','email'=>'adrubale@gmail.com','password'=>'prova']);

});

Artisan::command('create:order', function () {

    Order::create();

});
