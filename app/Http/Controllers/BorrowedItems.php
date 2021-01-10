<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Borrow;
class BorrowedItems extends Controller
{
    public function index(){
        $borrows=Borrow::all();
        return view('output',compact('borrows'));
    }

    public function create(){
        $borrow=new Borrow;
        $borrow->itemname=request('name');
        $borrow->itemquantity=request('quantity');
        $borrow->personname=request('pname');
        $borrow->persontype=request('ptype');
        $borrow->save();
        return redirect('/borrow/output');
    }
    public function edit($id)
    {
        $borrow=Borrow::findOrFail($id);
        return view('editb', compact('borrow'));
    }
    public function  update ($id){
        $borrow=Borrow::findOrFail($id);
        $borrow->itemname=request('name');
        $borrow->itemquantity=request('quantity');
        $borrow->personname=request('pname');
        $borrow->persontype=request('ptype');
        $borrow->save();
        return redirect('/borrow/output');
    }
    public function destroy($id){
        $borrow=Borrow::findOrFail($id);
        $borrow->delete();
        return redirect('/borrow/output');
    }
}
