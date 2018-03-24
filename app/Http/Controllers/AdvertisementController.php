<?php

namespace App\Http\Controllers;

use App\Model\Entity\Advertisement;
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
            $this->advertisementManager->fk_category = $request->post('fk_category');
            $this->advertisementManager->fk_group = $request->post('fk_group');
            $this->advertisementManager->fk_condition = $request->post('fk_condition');
            $this->advertisementManager->sell_or_buy = $request->post('sell_or_buy');
            $this->advertisementManager->price = $request->post('price');
            $this->advertisementManager->fk_price_currency = $request->post('fk_price_currency');
            $this->advertisementManager->fk_price_type = $request->post('fk_price_type');
            $this->advertisementManager->accept_replacement = $request->post('accept_replacement');
            $this->advertisementManager->accepted_publish_condition = $request->post('accepted_publish_condition');
            $this->advertisementManager->fk_place = $request->post('fk_place');
            $this->advertisementManager->contact_name = $request->post('contact_name');
            $this->advertisementManager->contact_phone = $request->post('contact_phone');

            // save advertisement
            $result = $this->advertisementManager->save();

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
            // count advertisements for logged user
            $data['my_ads_count'] = Advertisement::where('user_id', auth()->user()->id)->count();
            $data['my_ads'] = Advertisement::where('user_id', auth()->user()->id)->paginate(10);
            return view('advertisement.list', $data);
        } else {
            $data['login_warning'] = 'Morate biti ulogovani da biste videli svoje oglase';
            return view('auth.login', $data);
        }
    }

    public function viewAdvertisement(Request $request, $advID)
    {
        $data['adv'] = Advertisement::findOrFail($advID);
        return view('advertisement.view', $data);
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
            'description' => 'required|string|max:255',
            'sell_or_buy' => 'required|integer|between:1,2',
            'fk_category' => 'required|integer|max:5',
            'fk_group' => 'required|integer|max:5',
            'fk_condition' => 'required|integer|max:5',
            'price' => 'numeric',
            'fk_price_currency' => 'string|max:12',
            'fk_price_type' => 'numeric',
            'accept_replacement' => 'integer',
            'accepted_publish_condition' => 'required|integer',
            'fk_place' => 'required|integer|max:5',
            'contact_name' => 'required|string|max:255',
            'contact_phone' => 'string'
        ]);
    }

}
