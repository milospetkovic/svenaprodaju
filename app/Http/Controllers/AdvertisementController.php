<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use App\User;

class AdvertisementController extends Controller
{
    public function viewCreateForm(Request $request, User $user)
    {
        //$this->authorize('viewcreateform', 'AdvertisementPolicy');
        if (auth()->user()) {
            return view('advertisement.create');
        } else {
            return view('auth.login');
        }
    }
}
