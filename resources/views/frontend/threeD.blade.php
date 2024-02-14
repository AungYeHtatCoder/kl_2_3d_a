@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:100px;"
    >
    <div class="d-flex justify-content-between pt-4 headercontent">
        <div class="d-flex">
            <i class="fa-regular fa-circle-user fa-4x text-white"></i>
            <span class="mt-1 ms-2 fw-bold">
                <a href="#" class="text-decoration-none text-white" style="font-size: 17px;">Name <p>********213</p> </a>
            </span>
        </div>
        <div class="mt-1 me-2 text-white" style="line-height: 10px;">
            <p class="d-block">ထီပိတ်ချိန် </p>
            <small>01-12-2023 2:45 PM</small>
        </div>
    </div>

    <div class="d-flex justify-content-around">
      <div class="d-flex">
        <img src="{{ asset('user_app/assets/images/wallet.png') }}"  width="40px" height="40px" alt="">
        <p class="fw-bold pt-2 ps-2 text-white">ပင်မပိုက်ဆံအိတ်</p>
      </div>
      <div class="d-flex pt-2">
        <p class="fw-bold fs-6 pe-2 text-white">0 ကျပ်</p>
        <i class="material-icons">add_circle</i>
      </div>                  
    </div>
     <!-- <div class="custom-line"></div> -->

     <!-- two links menu -->
     <div class="d-flex justify-content-around align-items-center">
        <div class="d-flex list-card w-25 justify-content-center align-items-center">
            <!-- <i class="fa-regular fa-newspaper fa-xl "></i> -->
            <a href="./3d-history.html" class="text-decoration-none text-white">
                <p class="pt-2 text-white">မှတ်တမ်း</p>
            </a>
        </div>

        <div class="d-flex list-card w-25 justify-content-center align-items-center">
            <!-- <i class="fa-solid fa-award fa-xl"></i> -->
            <a href="./3d-winners.html" class="text-decoration-none">
                <p class="pt-2 text-white">ထီပေါက်သူ</p>
            </a>
        </div>
     </div>

     <!-- end two links menu -->

     

    <!-- content -->
    <div class="dashboard-lists pt-2 ps-2">
        <div class="d-flex list-card justify-content-around align-items-center">
         <p class="">2023-11-16</p>
         <p>970</p>
        </div>

        <div class="d-flex list-card justify-content-around align-items-center">
            <p class="">2023-11-16</p>
            <p>970</p>
           </div>

           <div class="d-flex list-card justify-content-around align-items-center">
            <p class="">2023-11-16</p>
            <p>970</p>
           </div>

           <div class="d-flex list-card justify-content-around align-items-center">
            <p class="">2023-11-16</p>
            <p>970</p>
           </div>

           <div class="d-flex list-card justify-content-around align-items-center">
            <p class="">2023-11-16</p>
            <p>970</p>
           </div>
    </div> 
    </div>
</div>
<div class="row footer">
    <div class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 py-3">
     <div class="d-flex justify-content-center align-items-center">
        <a href="{{ url('/3dBet') }}" type="button" class="px-3 py-2 rounded text-white outline outline-none text-decoration-none" style="border: 2px solid #cb9b51;background-image: url('./images/background.jpg');">ထိုးမည်</a>
     </div>
    </div>
</div>


{{-- @include('frontend.layouts.footer') --}}
@endsection