<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JournalsController extends Controller
{
    public function index()
    {
        // mengambil data dari table
        $datas = DB::table('journals')->get();

        // mengirim data ke view
        return view('Vjournals',['datas' => $datas]);

    }

    public function add(Request $request)
    {
    	DB::table('journals')->insert([
			'head' => $request->head,
            'body' => $request->body,
            'img' => $request->img
		]);
		// alihkan halaman ke halaman journals
		return redirect('/journals');
 
    }

    public function delete(Request $request)
    {
		$id=$request->id;
		DB::table('journals')->where('id',$id)->delete();

		// alihkan halaman ke halaman journals
		return redirect('/journals');
 
    }

    public function edit(Request $request)
    {
        DB::table('journals')->where('id', $request->idedit)->update([
                'head' => $request->headedit,
                'body' => $request->bodyedit,
                'img' => $request->imgedit,
            ]);

        return redirect('/journals');
    }
}
