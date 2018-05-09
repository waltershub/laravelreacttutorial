<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemsController extends Controller
{
  public function index()
 {
    //  error_log('Some message here.');
      return Item::all();
 }

 public function show(Item $item)
 {
     return $item;
 }

 public function store(Request $request)
 {
     $item = Item::create($request->all());

     return response()->json($item, 201);
 }

 public function update(Request $request, Item $item)
 {
     $item->update($request->all());

     return response()->json($item, 200);
 }

 public function delete(Item $item)
 {
     $item->delete();

     return response()->json(null, 204);
 }
}
