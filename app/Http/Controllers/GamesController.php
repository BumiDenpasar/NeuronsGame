<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamesController extends Controller
{
    public function index()
    {
        // mengambil data dari table
        $datas = DB::table('games')->get();

        // mengirim data ke view
        return view('Vgames',['datas' => $datas]);

    }

    public function add(Request $request)
    {
    	DB::insert('insert into games (title, description, category, img, github) values (?, ?, ?, ?, ?)', [
            $request->title,
            $request->description,
            $request->category,
            $request->img,
            $request->github
        ]);
        
		// alihkan halaman ke halaman games
		return redirect('/games');
 
    }

    public function delete(Request $request)
    {
		$id=$request->id;
		DB::table('games')->where('id',$id)->delete();

		// alihkan halaman ke halaman games
		return redirect('/games');
 
    }

    public function edit(Request $request)
    {
        DB::table('games')->where('id', $request->idedit)->update([
                'title' => $request->titleedit,
                'description' => $request->descriptionedit,
                'category' => $request->categoryedit,
                'img' => $request->imgedit,
                'github' => $request->githubedit
            ]);

        return redirect('/games');
    }
}
