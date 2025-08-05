<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

use Illuminate\Support\Facades\Schedule;


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


Schedule::command('model:prune')->daily();

// Schedule::command('model:prune', [
//     '--model' => [Address::class, Flight::class],
// ])->daily();


// Schedule::command('model:prune', [
//     '--except' => [Address::class, Flight::class],
// ])->daily();


