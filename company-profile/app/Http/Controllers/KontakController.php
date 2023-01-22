<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index() {

        $kontaks = Kontak::all();

        return view('comment.comments',compact(['kontaks']));
    }

    public function create() {

        return view('contact');
    }

    public function store(Request $request) {
        Kontak::create($request->except(['_token','submit']));
        return redirect('/');
    }

    public function edit($id) {

        $kontakId = Kontak::find($id);
        return view('comment.edit',compact(['kontakId']));
    }

    public function update($id,Request $request) {

        $kontakId = Kontak::find($id);

        $kontakId->update($request->except(['_token','submit']));

        return redirect('/comments');
    }

    public function delete($id) {

        $kontakId = Kontak::find($id);
        $kontakId->delete();

        return redirect('/comments');
    }

}
