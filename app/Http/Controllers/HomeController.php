<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // mengambil data dari table
        $games = DB::table('games')->get();
        $journals = DB::table('journals')->get();


        // mengirim data ke view
        return view('VHome',[
            'journals' => $journals
        ]);

    }

}
