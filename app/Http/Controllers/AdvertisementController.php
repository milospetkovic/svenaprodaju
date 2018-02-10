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
            $data['login_warning'] = 'Morate biti ulogovani da biste kreirali oglas';
            return view('auth.login', $data);
        }
    }
}
