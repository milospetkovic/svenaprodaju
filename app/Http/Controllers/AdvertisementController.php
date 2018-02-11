<?php

namespace App\Http\Controllers;

use App\Model\Managers\AdvertisementManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        if (auth()->user())
        {
            // validate request
            $this->validator($request->all())->validate();

            // populate properties
            $this->advertisementManager->user_id = auth()->user()->id;
            $this->advertisementManager->title = $request->post('title');
            $this->advertisementManager->description = $request->post('description');

            // save advertisement
            $this->advertisementManager->save();

            return view('advertisement.create');
        } else {
            $data['login_warning'] = 'Morate biti ulogovani da biste kreirali oglas';
            return view('auth.login', $data);
        }
    }

    public function myAdvertisementList(Request $request)
    {
        if (auth()->user())
        {
            return view('advertisement.list');
        } else {
            $data['login_warning'] = 'Morate biti ulogovani da biste videli svoje oglase';
            return view('auth.login', $data);
        }

    }

    /**
     * Validator for saving advertisement request
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255'
        ]);
    }
}
