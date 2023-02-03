<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Mail;
use App\Mail\Checkout\Paid;


class CheckoutController extends Controller
{
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->is_paid = true;
        $checkout->save();
        $request->session()->flash('success', "Checkout {$checkout->Camp->title} by {$checkout->User->name} has been Updated!");
        
        // email
        Mail::to($checkout->User->email)->send(new Paid($checkout));
        return redirect(route('admin.dashboard'));
    }
}
