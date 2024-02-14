<?php

namespace App\Http\Controllers\User\FillBalance;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\FillBalance;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class FillBalanceController extends Controller
{
    public function index()
    {
        return view('two_d.wallet.index');
    }

    // top up wallet
    public function topUpWallet()
    {
        return view('two_d.wallet.top_up');
    }
    // topup submit blade
    public function topUpSubmit()
    {
        $user = User::where('id', 1)->whereNotNull('kpay_no')->first();
        
        return view('two_d.kpay.top_up_submit', compact('user'));
    }

    public function CBPaytopUpSubmit()
    {
        $user = User::where('id', 1)->whereNotNull('cbpay_no')->first();
        
        return view('two_d.cbpay.top_up_submit', compact('user'));
    }

    public function WavePaytopUpSubmit()
    {
        $user = User::where('id', 1)->whereNotNull('wavepay_no')->first();
        
        return view('two_d.wavepay.top_up_submit', compact('user'));
    }

    public function AYAPaytopUpSubmit()
    {
        $user = User::where('id', 1)->whereNotNull('ayapay_no')->first();
        
        return view('two_d.ayapay.top_up_submit', compact('user'));
    }

    public function StoreKpayFillMoney(Request $request)
    {
       // dd($request->all());
        // Validate the request
        $request->validate([
            'kpay_no' => 'required|numeric',
            'user_ph_no' => 'required|numeric',
            'last_six_digit' => 'required|string|max:6|min:6',
            'amount' => 'required|numeric'
        ]);

        // Create a new FillBalance record
        $fillBalance = new FillBalance();
        $fillBalance->user_id = Auth::id();
        $fillBalance->kpay_no = $request->kpay_no;
        $fillBalance->user_ph_no = $request->user_ph_no;
        $fillBalance->last_six_digit = $request->last_six_digit;
        $fillBalance->amount = $request->amount;
        $fillBalance->status = 'pending';  // default to 'pending'

        $fillBalance->save();
        session()->flash('SuccessRequest', 'သင့်အကောင့်သို့ငွေဖြည့်ရန်တောင်းဆိုပြီးပါပီး .');

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Money fill request submitted successfully!');
    }

    public function StoreCBpayFillMoney(Request $request)
    {
        // Validate the request
        $request->validate([
            'cbpay_no' => 'required|numeric',
            'user_ph_no' => 'required|numeric',
            'last_six_digit' => 'required|string|max:6|min:6', 
            'amount' => 'required|numeric'
        ]);

        // Create a new FillBalance record
        $fillBalance = new FillBalance();
        $fillBalance->user_id = Auth::id();
        $fillBalance->cbpay_no = $request->cbpay_no;
        $fillBalance->user_ph_no = $request->user_ph_no;
        $fillBalance->last_six_digit = $request->last_six_digit;
        $fillBalance->amount = $request->amount;
        $fillBalance->status = 'pending';  // default to 'pending'

        $fillBalance->save();
        session()->flash('SuccessRequest', 'သင့်အကောင့်သို့ငွေဖြည့်ရန်တောင်းဆိုပြီးပါပီး .');

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Money fill request submitted successfully!');
    }

    public function StoreWavepayFillMoney(Request $request)
    {
        // Validate the request
        $request->validate([
            'wavepay_no' => 'required|numeric',
            'user_ph_no' => 'required|numeric',
            'last_six_digit' => 'required|string|max:6|min:6',
            'amount' => 'required|numeric'
        ]);

        // Create a new FillBalance record
        $fillBalance = new FillBalance();
        $fillBalance->user_id = Auth::id();
        $fillBalance->wavepay_no = $request->wavepay_no;
        $fillBalance->user_ph_no = $request->user_ph_no;
        $fillBalance->last_six_digit = $request->last_six_digit;
        $fillBalance->amount = $request->amount;
        $fillBalance->status = 'pending';  // default to 'pending'

        $fillBalance->save();
        session()->flash('SuccessRequest', 'သင့်အကောင့်သို့ငွေဖြည့်ရန်တောင်းဆိုပြီးပါပီး .');

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Money fill request submitted successfully!');
    }

    public function StoreAYApayFillMoney(Request $request)
    {
        // Validate the request
        $request->validate([
            'ayapay_no' => 'required|numeric',
            'user_ph_no' => 'required|numeric',
            'last_six_digit' => 'required|string|max:6|min:6',
            'amount' => 'required|numeric'
        ]);

        // Create a new FillBalance record
        $fillBalance = new FillBalance();
        $fillBalance->user_id = Auth::id();
        $fillBalance->ayapay_no = $request->ayapay_no;
        $fillBalance->user_ph_no = $request->user_ph_no;
        $fillBalance->last_six_digit = $request->last_six_digit;
        $fillBalance->amount = $request->amount;
        $fillBalance->status = 'pending';  // default to 'pending'

        $fillBalance->save();
        session()->flash('SuccessRequest', 'သင့်အကောင့်သို့ငွေဖြည့်ရန်တောင်းဆိုပြီးပါပီး .');

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Money fill request submitted successfully!');
    }

    
}