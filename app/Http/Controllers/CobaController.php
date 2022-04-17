<?php

namespace App\Http\Controllers;

use App\Models\Friends;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    // public function index(){
    //     return "Test Berhasil";
    // }

    // public function urutan($ke){

    //     $friends = Friends::paginate(2);

    //     return view('friend', compact('friends'));
    // }

    // public function coba($ke){
    //     return view('coba', ['ke' => $ke]);
    // }

    public function index()
    {
        $friends = Friends::paginate(2);

        return view('index', compact('friends'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the request...

        $friends = new Friends();

        $friends->nama = $request->nama;
        $friends->no_tlpn = $request->no_tlpn;
        $friends->alamat = $request->alamat;

        $friends->save();
    }
}
