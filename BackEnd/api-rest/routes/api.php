<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('team', \App\Http\Controllers\Api\TeamController::class);

Route::apiResource('team.players', \App\Http\Controllers\Api\PlayerController::class);

Route::apiResource('claches', \App\Http\Controllers\Api\ClashesController::class);

Route::apiResource('claches.logs', \App\Http\Controllers\Api\LogsController::class);