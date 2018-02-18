<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function viewPage(Request $request, $id)
    {
        $dataContent = DB::table('pages')->where('id', $id)->first();

        $data = [ 'title' => $dataContent->title,
                  'body' => $dataContent->body
                ];

        return view('page.view', $data);

    }
}
