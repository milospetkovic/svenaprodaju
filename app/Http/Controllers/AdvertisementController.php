<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function viewCreateForm(Request $request) {
        return view('advertisement.create');
    }
}
