@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="height: 100vh"
    >
    <div >
      <h6 class="mx-auto pt-4" style="color:  #f5bd02; font-weight: bold; font-size: 18px;">သင်ငွေလက်ခံမည့်ဘဏ်အကောင့်များ</h6>
      <div class="container">
       <div class="d-flex justify-content-between">
        <div class="banks">
         <img src="{{ asset('user_app/assets/images/bank/kpay.png') }}" class="w-100" alt="">
        </div>
        <div class="banks">
         <img src="{{ asset('user_app/assets/images/bank/wpay.png') }}" class="w-100" alt="">
        </div>
        <div class="banks">
         <img src="{{ asset('user_app/assets/images/bank/cbpay.png') }}" class="w-100" alt="">
        </div>
        <div class="banks">
         <img src="{{ asset('user_app/assets/images/bank/aya_logo.png') }}" class="w-100" alt="">
        </div>
       </div>
  </div>
    </div>
    </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')

@endsection
