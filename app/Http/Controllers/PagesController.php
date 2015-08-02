<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

class PagesController extends Controller
{
    function tool($t) {
        $tool = DB::table('pages')->where('url', $t);
        if ($tool->count() == 0) {
            return view('errors.404');
        }

        return view('main.tool')->with('tool', $tool->first());
    }

    function blog() {
        return redirect('http://tutran.me');
    }

    function index() {
        return view('main.home');
    }
}
