<?php

namespace App\Http\Controllers;

use App\Model\Managers\AdvertisementManager;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use App\Model\Entity\Advertisement;
use App\User;

class AdvertisementController extends Controller
{
    protected $advertisementManager;

    public function __construct(AdvertisementManager $advertisementManager)
    {
        $this->advertisementManager = $advertisementManager;
    }

    public function viewCreateForm(Request $request, User $user)
    {
        if (auth()->user()) {
            return view('advertisement.create');
        } else {
            $data['login_warning'] = 'Morate biti ulogovani da biste kreirali oglas';
            return view('auth.login', $data);
        }
    }

    public function saveForm(Request $request)
    {
        if (auth()->login()) {
            return view('advertisement.create');
        } else {
            $data['login_warning'] = 'Morate biti ulogovani da biste kreirali oglas';
            return view('auth.login', $data);
        }
    }
}
