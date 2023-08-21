<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;


class WelcomeController extends Controller
{
    public function show(): View
    {

        $locale = App::currentLocale();

        $features = Storage::json('json/features.json');


        return view('welcome', [
            'features' => $features[$locale]
        ]);
    }
}
