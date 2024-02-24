<?php

namespace App\Http\Controllers\admin;


use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function index() {

        $services = Service::latest()->get();

        return $services;  
    }

    public function store(){

        return Service::create([
            'name' => request('name'),
        ]);
    }
}
