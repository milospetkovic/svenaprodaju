<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class AdvertisementImageController extends Controller
{
    private $tempImageFolder = 'tempadvimages';

    //
    public function __construct()
    {
        //
    }

    /**
     * Save uploaded images to temp folder when creating advertisement
     *
     * @param Request $request
     */
    public function tempUpload(Request $request)
    {
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $file->storeAs($this->getUserTempImageFolder(), $filename);
    }

    public function removeTempUpload(Request $request)
    {
        $filename = $request->input('filename');
        File::delete(storage_path('app/'.$this->getUserTempImageFolder().'/'.$filename));
    }

    private function getUserTempImageFolder()
    {
        return $this->tempImageFolder.'/'.auth()->id();
    }


}
