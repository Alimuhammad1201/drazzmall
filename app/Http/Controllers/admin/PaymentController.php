<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Plan;
use App\Models\admin\payment;

class PaymentController extends Controller
{
    public function index($id)
    {
        $record = Plan::find($id);
        return view('payment.payment_method')->with(compact('record'));
    }

    public function store()
    {
        Payment::create([
            'email' => request()->get('email'),
            'card_holder_name' => request()->get('card_holder_name'),
            'card_no' => request()->get('card_no'),
            'date' => request()->get('date'),
            'cvc' => request()->get('cvc'),
            'address' => request()->get('address'),
            'state' => request()->get('state'),
            'zip' => request()->get('zip'),
            'fullname' => request()->get('fullname'),
            'phone_no' => request()->get('phone_no'),

            
             
        ]);
        
            return redirect()->to('plan/payment/confirm');
    }
}
