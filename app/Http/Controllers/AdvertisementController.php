<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;

class AdvertisementController extends Controller
{
    public function viewCreateForm(Request $request)
    {
        //$this->authorize('viewcreateform', 'AdvertisementPolicy');
        if ((new Gate)->allows('view-create', 'AdvertisementPolicy')) {

            return view('advertisement.create');
        }
    }
}
