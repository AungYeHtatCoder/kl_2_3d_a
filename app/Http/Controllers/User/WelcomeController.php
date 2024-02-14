<?php

namespace App\Http\Controllers\User;

use App\Models\Admin\Promotion;
use App\Models\User;
use GuzzleHttp\Client;
use App\Models\Admin\Banner;
use Illuminate\Http\Request;
use App\Models\Admin\Lottery;
use App\Models\Admin\TwoDigit;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\RequestException;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $twoDigits = TwoDigit::all();
    //     $client = new Client();

    //     // Data from 'https://api.thaistock2d.com/live'
    //     try {
    //         $responseLive = $client->request('GET', 'https://api.thaistock2d.com/live');
    //         $data = json_decode($responseLive->getBody(), true);
    //     } catch (RequestException $e) {
    //         $data = []; // or provide a default value
    //     }

    //     // Data from 'https://api.thaistock2d.com/2d_result'
    //     $latestResultToday = [];
    //     try {
    //         $responseResult = $client->request('GET', 'https://api.thaistock2d.com/2d_result');
    //         $dataResult = json_decode($responseResult->getBody(), true);

    //         // Assuming the results are sorted by date, get the first entry for today
    //         $todayData = $dataResult[0];

    //         // From today's data, get the last child entry
    //         $latestResultToday = end($todayData['child']);
    //     } catch (RequestException $e) {
    //         // Handle exception if needed
    //     }

    //     if (request()->ajax()) {
    //         return response()->json(['live' => $data, 'latestResultToday' => $latestResultToday]);
    //     }

    //     return view('welcome', compact('twoDigits', 'data', 'latestResultToday'));
    // }


    public function index()
    {
        $banners = Banner::latest()->take(3)->get();
        //$twoDigits = TwoDigit::all();
        //$client = new Client();

        // try {
        //     $response = $client->request('GET', 'https://api.thaistock2d.com/live');
        //     $data = json_decode($response->getBody(), true);
        // } catch (RequestException $e) {
        //     // Log the error or inform the user
        //     $data = []; // or provide a default value
        // }
        // if (request()->ajax()) {
        //     return response()->json($data);
        // }

        return view('welcome', compact('banners'));



    }

    public function wallet()
    {
        return view('frontend.wallet');
    }

    public function userLogin()
    {
        if(Auth::check()){
            return redirect()->back()->with('error', "Already Logged In.");
        }else{
            return view('frontend.login');
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required', // Input field named 'login' can hold either email or phone
            'password' => ['required', 'string', 'min:6'],
        ]);

        $loginField = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        $credentials = [
            $loginField => $request->input('login'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect('/home')->with('success', 'Login Success!');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials. Please try again.');
        }
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['nullable', 'string', 'min:11', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        // Create user based on provided credentials
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            Auth::login($user);
            return redirect('/home')->with('success', 'Logged In Successful.');
        } else {
            return redirect()->back()->with('error', 'Registration failed. Please try again.');
        }
    }


    public function userRegister()
    {
        if(Auth::check()){
            return redirect()->back()->with('error', "Already Logged In.");
        }else{
            return view('frontend.register');
        }
    }

    public function topUp()
    {
        return view('frontend.top-up');
    }

    public function topUpSubmit()
    {
        return view('frontend.topUpSubmit');
    }


    public function withDraw()
    {
        return view('frontend.withdraw');
    }

    public function promotion()
    {
        $promotions = Promotion::latest()->get();
        return view('frontend.promotion', compact('promotions'));
    }

    //promotionDetail
    public function promotionDetail($id)
    {
        $promotion = Promotion::find($id);
        return view('frontend.promotion-detail', compact('promotion'));
    }

    public function servicePage()
    {
        return view('frontend.service');
    }

    public function dashboard()
    {
        return view('frontend.dashboard');
    }

    public function winnerDigit()
    {
        return view('frontend.winnerDigit');
    }

    public function twoDWinnerHistory()
    {
        return view('frontend.twoD-winner-history');
    }

    public function myDigit()
    {
        return view('frontend.myDigit');
    }



    public function myBank()
    {
        return view('frontend.myBank');
    }

    public function changePassword()
    {
        return view('frontend.new-password-change');
    }


    public function twoD()
    {
        return view('frontend.twoD');
    }

    public function twoDPlay()
    {
        return view('frontend.twoDplay');
    }

    public function twoDPlayConfirm()
    {
        return view('frontend.twoDplay-confirm');
    }

    public function twoDQuick()
    {
        return view('frontend.twoD-quick-play');
    }

    public function threeD()
    {
        return view('frontend.threeD');
    }

    public function threedBet()
    {
        return view('frontend.threeDBet');
    }

    public function threedNum()
    {
        return view('frontend.threed-num');
    }

    public function threedQuick()
    {
        return view('frontend.threed-quick');
    }

    public function threedConfirm()
    {
        return view('frontend.threed-confirm');
    }

    public function threedWinner()
    {
        return view('frontend.threed-winner-history');
    }

    public function threedHistory()
    {
        return view('frontend.threed-history');
    }

    public function inviteCode()
    {
        return view('frontend.invite-code');
    }

    public function comment()
    {
        return view('frontend.comment');
    }

    public function user_dashboard()
    {
        return view('frontend.user-dashboard');
    }

    public function winningRecord()
    {
        return view('frontend.winning-record');
    }

    public function twoDPrize()
    {
        return view('frontend.twoD-prize-history');
    }

    public function moriningRecord()
    {
        return view('frontend.play-two-morning-record');
    }

    public function eveningRecord()
    {
        return view('frontend.play-two-evenving-record');
    }

    public function morningHistoryRecord()
    {
        return view('frontend.morning-history-record');
    }

    public function eveningHistoryRecord()
    {
        return view('frontend.evening-history-record');
    }


    public function twodHistory()
    {
        return view('frontend.twod-history');
    }

    public function twodHoliday()
    {
        return view('frontend.twoD-holidays');
    }

    public function twodCalendar()
    {
        return view('frontend.twoD-calendar');
    }

    public function twodDreamBook()
    {
        return view('frontend.twoD-dream-book');
    }

    public function threedDreamBook()
    {
        return view('frontend.threeD-dream-book');
    }

    public function threedResult()
    {
        return view('frontend.threed-result');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    //     public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'selected_digits' => 'required|string',
    //         'amounts' => 'required|array',
    //         'amounts.*' => 'required|integer|min:100|max:5000',
    //         'totalAmount' => 'required|integer|min:100',
    //         'user_id' => 'required|exists:users,id',
    //     ]);

    //     DB::beginTransaction();

    //     try {
    //         // Deduct the total amount from the user's balance
    //         $user = Auth::user();
    //         $user->balance -= $request->totalAmount;

    //         // Check if user balance is negative after deduction
    //         if ($user->balance < 0) {
    //             throw new \Exception('Your balance is not enough.');
    //         }

    //         // Update user balance in the database
    //         $user->save();

    //         $lottery = Lottery::create([
    //             'pay_amount' => $request->totalAmount,
    //             'total_amount' => $request->totalAmount,
    //             'user_id' => $request->user_id,
    //         ]);

    //         $attachData = [];
    //         foreach($request->amounts as $two_digit_id => $sub_amount) {
    //             $totalBetAmountForTwoDigit = DB::table('lottery_two_digit_pivot')
    //                     ->where('two_digit_id', $two_digit_id)
    //                     ->sum('sub_amount');

    //             if($totalBetAmountForTwoDigit + $sub_amount > 5000) {
    //                 $twoDigit = TwoDigit::find($two_digit_id);
    //                 throw new \Exception("The two-digit's amount limit for {$twoDigit->two_digit} is full.");
    //             }
    //             $attachData[$two_digit_id] = ['sub_amount' => $sub_amount];
    //         }

    //         $lottery->twoDigits()->attach($attachData);

    //         DB::commit();

    //         return redirect()->back()->with('message', 'Data stored successfully!');
    //     } catch (\Exception $e) {
    //         DB::rollback();
    //         return redirect()->back()->with('error', $e->getMessage());
    //     }
    //     // return response()->json([
    //     //         'success' => true,
    //     //         'message' => 'Data stored successfully!'
    //     //     ]);
    //     // } catch (\Exception $e) {
    //     //     DB::rollback();
    //     //     return response()->json([
    //     //         'success' => false,
    //     //         'error' => $e->getMessage()
    //     //     ]);
    //     // }
    // }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function userProfile()
    {
        return view('frontend.user-profile');
    }

    public function userFillMoney()
    {
        return view('user_fillmoney');
    }

    public function winnerList()
    {
        return view('winner_lists');
    }

    public function lotteryResult()
    {
        return view('lottery_result');
    }

    public function contact()
    {
        return view('contact');
    }

    public function service()
    {
        return view('service');
    }

    public function userRequestMoney()
    {
        return view('request_money');
    }

    public function twodLive()
    {
        return view('frontend.twoD-live');
    }
}