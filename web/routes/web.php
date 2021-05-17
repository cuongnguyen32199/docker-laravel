<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/{uri?}', 'welcome')->where('uri', '(.*)');
