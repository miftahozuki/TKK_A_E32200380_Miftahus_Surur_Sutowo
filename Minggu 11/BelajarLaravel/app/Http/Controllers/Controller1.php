<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller1 extends Controller
{
    public function index()
    {
        //return "Halo ini adalah method index, dalam controller Controller1";
        //return "Method ini nantinya akan digunakan untuk mengambil semua data user";
        $nama = "Arvita Agus Kurniasari";
        $pelajaran = ["Algoritma dan Pemograman", "Kalkulus", "Pemrograman Web"];
        return view('coba1', compact('nama','pelajaran'));
    }
    public function create()
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk menambah data user";
    }
    public function store(Requests $requests)
    {
        return "Method ini nantinya akan digunakan untuk menciptakan data user yang baru";
    }
    public function show($id)
    {
        return "Method ini nantinya akan digunakan untuk mengambil satu data user dengan id=" . $id;
    }
    public function edit($id)
    {
        return "Method ini nantinya akan digunakan untuk menampilkan form untuk mengubah data edit dengan id=" . $id;
    }
    public function update(Requests $requests, $id)
    {
        return "Method ini nantinya akan digunakan untuk mengubah data user dengan id=" . $id;
    }
    public function destroy($id)
    {
        return "Method ini nantinya digunakan untuk menghapus data user dengan id=" . $id;
    }


}
