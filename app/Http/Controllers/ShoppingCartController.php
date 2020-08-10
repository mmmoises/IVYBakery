<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function init(){
        return session('items', []);
    }


    public function store(Request $request){
       
        $items = session('items', []);
        $exist = false;
 
        foreach ($items as &$item) {
            if ($item['id'] == $request->id) {
                $item['quantity'] += $request->quantity;
                $exist = true;
            }
        }

        if($exist){
           
            session(['items' => $items]);
            return 'si se pudo y existe';
        }else{
            $item =[
                'id'=> $request->id,
                'name'=> $request->name,
                'price'=> $request->price,
                'quantity'=>$request->quantity
            ];

            array_push($items,$item);
            session(['items' => $items]);
            return 'si se pudo';
        }
        return 'no se pudo';
    }

    public function remove(Request $request){
        $items = session('items', []);
 
        foreach ($items as $key=>$item) {
            if ($item['id'] == $request->id) {
                unset($items[$key]);
            }
        }
        session(['items' => $items]);
        return 'si se borro';
    }
}
