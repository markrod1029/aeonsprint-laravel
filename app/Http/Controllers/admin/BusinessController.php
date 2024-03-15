<?php

namespace App\Http\Controllers\admin;

use App\Models\Business;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BusinessController extends Controller
{
    public function store() {

        return Business::create([
            'name' => request('name'),
            'email' => request('email'),
            'contact' => request('contact'),
            'status' => 'business Card',
        ]);
    }
}
