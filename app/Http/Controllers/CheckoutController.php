<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return Checkout::all();
    }

    public function store(Request $request)
    {
        return Checkout::create([
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
            'checked_out_on' => $request->checked_out_on,
        ]);
    }

    public function destroy($id)
    {
        // $checkout = Checkout::where('user_id', $request->user_id)
        //     ->where('book_id', $request->book_id)
        //     ->first();
        // dd($request);
        // $checkout = Checkout::find($request->id);
        // if($checkout){
        //     $checkout->delete();        
        // }
        $checkout = Checkout::find($id)->delete();
    }
}
