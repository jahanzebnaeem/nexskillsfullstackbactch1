<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function about() {
        return view('about');
    }

    public function services() {
        // Model - singular
        // Service

        // Table - plular
        // services

        $services = [
            'Service 1',
            'Service 2'
        ];

        $nServices = \App\Service::all();

        // dd($nServices);

        return view('services', compact('services'));
    }
}