<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::orderBy('nama_guru', 'asc')->get();
        
        return view('guru.index', compact('gurus') );
    }

    public function createguru()

    {
        return view('guru.create');
    }

    public function storeguru(Request $request)
    {

        Guru::insert([
        'nama_guru' => $request->nama_guru,
        'jk_guru' => $request->jk_guru
        ]);

        return redirect('guru');
    }

    public function editguru($id)
    {
        $guru = Guru::where('id', $id)->first();

        return view('guru.edit', ['guru' => $guru]);
    }

    public function updateguru(Request $request, $id)
    {
        Guru::where('id', $id)->update([ 
            'nama_guru' => $request->nama_guru, 
            'jk_guru' => $request->jk_guru
        ]);

        return redirect('guru');
    }

    public function destroyguru($id)
    {
        Guru::where('id', $id)->delete();
        
        return back();
    }
}