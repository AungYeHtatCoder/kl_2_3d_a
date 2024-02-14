@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:200px"
    >
    <p class="text-center fw-bold py-3 px-5 bet_styles text-white fs-4">3D ကံထူးသူများ</p>

    <div class="d-flex justify-content-around align-items-center text-white">
        <div style="font-size: 12px;font-weight: 700;">
            <p>Updated at:</p>
            <p>Nov 16, 2023, 04:30 PM</p>
        </div>
        <div style="font-size: 30px;font-weight: 900;">
            @if($three_digits_prize)
            {{ $three_digits_prize->prize_no }}
            @else
            <p style="font-size: 20px">
                    No Winner Data
                </p>
                @endif
        </div>
            
    </div>

    

    <div class="">
      <div class="dashboard-lists pt-2 ps-2">

          <div class="d-flex list-card justify-content-between align-items-start">
              <p>(စဉ်)</p>
              <!-- <span>User</span> -->
              <div class="w-25 text-white">အမည် </div>
              <div>
                  <p>ထိုးငွေ</p>
              <p>(ကျပ်)</p>
              </div>
              <div>
                  <p>ထီပေါက်ငွေ</p>
              <p>(ကျပ်)</p>
              </div>
          </div>


              @foreach ($winners as $index => $winner)
              @if ($winner->prize_sent == 1)
                  
    <div class="d-flex list-card justify-content-between align-items-start">
        <p>{{ $index + 1 }}</p>
        <span class="material-icons text-white">account_circle</span>
        <div class="text-white">
            <div>{{ $winner->user->name }}</div>
            <div>********{{ substr($winner->user->phone, -3) }}</div>
        </div>
        <p>{{ $winner->total_amount }}</p>
        <p>{{ $winner->total_amount * 700 }}</p> <!-- Assuming the prize amount is 700 times the total_amount -->
    </div>
        @endif
        @endforeach
      </div>
    </div>
     

    </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')

@endsection
