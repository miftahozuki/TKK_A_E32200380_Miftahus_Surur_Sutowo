<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index()
    {
        return view('backend.pendidikan.index');
    }
    public function create()
    {
        $pendidikan = null;
        return view('backend.pendidikan.create',compact('pendidikan'));
    }
    public function store(Request $request)
    {
        PendidikanController::create($request->all());

        return redirect()->route('pendidikan.index')
                         ->with('success', 'Data pendidikan baru berhasil disimpan.');
    }
    
}
