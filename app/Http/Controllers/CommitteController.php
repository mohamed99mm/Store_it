<?php

namespace App\Http\Controllers;
use App\checkcommittee;

use Illuminate\Http\Request;

class CommitteController extends Controller
{
    public function examine()
    {
        return view('examine');
    }

    public function show()
    {
        $checkcommites= checkcommittee::all();
        return view('show',compact('checkcommites'));
    }
    public function create()
    {
        $Commitee = new checkcommittee;
        $Commitee->cname=request('cname');
        $Commitee->ctype=request('ctype');
        $Commitee->cemail=request('cemail');
        $Commitee->opnion=request('opinion');
        $Commitee->itemname=request('itemname');
        $Commitee->save();
        return redirect('/show');
    }

    public function edit($id)
    {
        $checkcommites = checkcommittee::findOrFail($id);
        return view('edit', compact('checkcommites'));
    }
    public function  update ($id){
        $checkcommites = checkcommittee::findOrFail($id);
        $checkcommites->cname=request('cname');
        $checkcommites->ctype=request('ctype');
        $checkcommites->cemail=request('cemail');
        $checkcommites->opnion=request('opinion');
        $checkcommites->itemname=request('itemname');
        $checkcommites->save();
        return redirect('/show');
    }
    public function destroy($id)
    {
        $checkcommites = checkcommittee::findOrFail($id);
        $checkcommites->delete();
        return redirect('/show');
    }
}