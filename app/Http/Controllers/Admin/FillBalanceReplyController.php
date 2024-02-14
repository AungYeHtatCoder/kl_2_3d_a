<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\FillBalance;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FillBalanceReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get balance request list order by latest 
        $balance_requests = FillBalance::orderBy('created_at', 'desc')->get();
        return view('admin.fill_balance.index', compact('balance_requests'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $balance = FillBalance::findOrFail($id);
        return view('admin.fill_balance.show', compact('balance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $balance = FillBalance::findOrFail($id);
        return view('admin.fill_balance.edit', compact('balance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    //dd($request->all());
    // 1. Validate the data
    $data = $request->validate([
        'balance' => 'required|numeric',
        'status' => 'required|in:pending,accept,reject',
    ]);

    // Retrieve the fill balance record
    $fillBalance = FillBalance::findOrFail($id);

    // 2. Retrieve the user
    $user = $fillBalance->user;

    // 3. Update user's balance column (assuming you're adding to the existing balance)
    $user->balance += $data['balance'];
    $user->save();

    // 4. Update the status of fill_balances table
    $fillBalance->status = $data['status'];
    $fillBalance->save();

    // Return or redirect as per your requirement
    return back()->with('success', 'Balance and Status updated successfully!');
}

    public function updateBalanceAndStatus(Request $request, $id)
{
    //dd($request->all());
    // Validate the request... validated
    $validated = $request->validate([
        'balance' => 'required|numeric',
        'status' => 'required|in:pending,accept,reject',
    ]);

    // Begin a transaction
    DB::beginTransaction();

    try {
        // Retrieve the fill balance record
        $fillBalance = FillBalance::findOrFail($id);

        // Update fill balance details
        $fillBalance->amount = $validated['amount'];
        $fillBalance->status = $validated['status'];
        $fillBalance->save();

        // Retrieve the associated user and update their balance
        $user = User::findOrFail($fillBalance->user_id);
        // Make sure to adjust the user's balance correctly depending on your logic
        // This is just an example of adding the amount
        $user->balance += $validated['amount'];
        $user->save();

        // Commit the transaction
        DB::commit();

        // Return a successful response
        return response()->json(['message' => 'Balance and status updated successfully!'], 200);
    } catch (\Exception $e) {
        // An error occurred; rollback the transaction...
        DB::rollback();

        // Return an error response
        return response()->json(['message' => $e->getMessage()], 500);
    }
}    
//  public function update(Request $request, $id)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'status' => 'required|in:0,1',
    //     ]);

    //     // Retrieve the balance
    //     $balance = FillBalance::findOrFail($id);

    //     // Update the status
    //     $balance->status = $request->status;
    //     $balance->save();

    //     // Redirect back with a success message
    //     return redirect()->back()->with('success', 'Status updated successfully.');
    // }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}