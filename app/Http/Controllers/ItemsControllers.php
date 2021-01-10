<?php

namespace App\Http\Controllers;
use App\item;

use Illuminate\Http\Request;

class ItemsControllers extends Controller
{
    //
    public function index(){
        $items=item::all();
        return view('showa',compact('items'));
    }
    public function create(){
        $item=new item;
        $item->name=request('name');
        $item->quantity=request('quantity');
        $item->price=request('price');
        $item->discription=request('discription');
        $item->status=request('status');
        $item->save();
        return redirect('/a/show');
    }
    public function edit($id)
    {
        $item = item::findOrFail($id);
        return view('edita', compact('item'));
    }
   public function  update ($id){
            $item=item::findOrFail($id);
            $item->name=request('name');
            $item->quantity=request('quantity');
            $item->price=request('price');
            $item->discription=request('discription');
            $item->status=request('status');
            $item->save();
            return redirect('/a/show');
    }
    public function destroy($id){
        $item=item::findOrFail($id);
        $item->delete();
        return redirect('/a/show');
    }

}
