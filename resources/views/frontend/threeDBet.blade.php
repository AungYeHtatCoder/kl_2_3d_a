@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="height:100vh"
    >
    <div class="d-flex justify-content-between align-items-center">

      <a href="./wallet.html" class="d-flex justify-content-start align-items-center text-decoration-none ">
          <img src="{{ asset('user_app/assets/images/wallet.png') }}"  width="40px" height="40px" alt="">
          <p class="fw-bold pt-2 ps-2 text-white">0 ကျပ်</p>
      </a>
      <div class="mt-1 me-2 text-white" style="line-height: 10px;">
          <p class="d-block">ထီပိတ်ချိန် </p>
          <small>01-12-2023 2:45 PM</small>
      </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mt-5">
      <button type="button" class="py-2 px-3 mx-2 border border-none outline outline-none bg-transparent" data-toggle="modal" data-target="#quickSelectModal">အမြန်ရွေး</button>
      <button type="button"  id="toggleButton" class="py-2 px-3 mx-2 border border-none outline outline-none toggle-btn"  onclick="toggleState()">R</button>
      <i class="fa-regular fa-circle-question px-3 my-3" style="cursor: pointer;" data-toggle="modal" data-target="#colorModal">အရောင်ရှင်းလင်းချက်</i>
      
    </div>

    <div class="mx-auto ms-2">
      <input type="number" id="numberInput" class="p-2 my-3 border bg-transparent text-white" maxlength="3" placeholder="ဂဏန်း ရိုက်ထည့်ပါ" required/>
      <input type="number"  class="p-2 border border-none text-white bg-transparent" style="outline: none;" minlength="3" placeholder="၁၀၀ ကျပ်အထက်" required/>
    </div>

    <div class="ms-2 my-3">
      <button type="button" class="py-2 px-3 rounded  bg-transparent border border-none text-white" onclick="showNumbers()">ရွေးမည်</button>
    </div>

    

    <div id="outputDiv" class="my-3">

    </div>  
    </div>
</div>
<div class="row footer">
  <div class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 py-3">
    <div class="d-flex justify-content-between align-items-center mt-5 ms-2">
      <a type="button" class="btn remove-btn px-3 py-2 me-2 my-3 rounded text-white text-decoration-none" onclick="deleteNumbers()">ပယ်မည်</a>
      <a href="./3d-confirm.html" type="button" class="btn play-btn px-3 py-2 me-2 my-3 rounded text-white outline outline-none text-decoration-none">ထိုးမည်</a>
    </div>
  </div>
</div>


{{-- @include('frontend.layouts.footer') --}}
@endsection