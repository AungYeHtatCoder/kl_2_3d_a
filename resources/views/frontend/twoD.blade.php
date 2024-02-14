@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:20px;"
    >
      {{-- <div class="flesh-card">
        <div class="d-flex">
          <span class="material-icons">account_balance_wallet</span>
          <p class="px-2 mt-1">လက်ကျန်ငွေ</p>
        </div>
        <p>0.00 Kyat</p>
      </div> --}}

      <div class="d-flex justify-content-between">
        <div class="d-flex">
          <img src="{{ asset('user_app/assets/images/wallet.png') }}"  width="40px" height="40px" alt="">
          <p class="fw-bold pt-2 ps-2 text-white">ပင်မပိုက်ဆံအိတ်</p>
        </div>
        <div class="d-flex pt-2">
          <p class="fw-bold fs-6 pe-2 text-white">0 ကျပ်</p>
          <i class="material-icons">add_circle</i>
        </div>                  
      </div>
  

      <div class="card text-center mt-1" style="background-color: #c50408; border-radius: 10px;">
          <div class="card-body">
            <div class="d-flex p-1 justify-content-around">
              <div class="cards">
                <a href="#" class="text-decoration-none">
                  <span class="material-icons">manage_search</span>
                  <p>မှတ်တမ်း</p>
                </a>
              </div>
              <div>
                <a href="#" class="text-decoration-none">
                  <span class="material-icons">stars</span>
                  <p>ကံထူးရှင်များ</p>
                </a>
              </div>
              <div>
                <a href="#" class="text-decoration-none">
                  <span class="material-icons">event_note</span>
                  <p>ပိတ်ရက်</p>
                </a>
              </div>
            </div>
          </div>
      </div>

      <div class="results">
          <h1>71</h1>
          <p class="text-start">
            Updated:
            <span>11-11-2023 4:31:59PM</span>
          </p>
          
          <button type="button" class="btns" data-bs-toggle="modal" data-bs-target="#exampleModal">ထိုးမည်</button>
          
      </div>
      <!-- content -->

      <div class="container mb-4">
          <div
            class="card text-center p-0 mt-3"
            style="background-color: #c50408; border: 2px solid #ebc03c; color: #ffffff; box-shadow: 2px 10px 8px 0 rgba(0, 0, 0, 0.2), 2px 10px 10px 0 rgba(0, 0, 0, 0.19)"
          >
            <div class="card-body">
              <p class="text-center text-white">11:00:00</p>
              <div class="text-center">
                <div class="d-flex justify-content-between text-center">
                  <p>Set</p>
                  <p>Value</p>
                  <p>2D</p>
                </div>
                <div class="d-flex justify-content-between text-center">
                  <p>1389.57</p>
                  <p>50981.87</p>
                  <p>71</p>
                </div>
              </div>
            </div>
          </div>
          
          <div
            class="card text-center p-0 cards mt-3"
            style="background-color: #c50408; border: 2px solid #ebc03c; color: #ffffff; box-shadow: 2px 10px 8px 0 rgba(0, 0, 0, 0.2), 2px 10px 10px 0 rgba(0, 0, 0, 0.19)"
          >
            <div class="card-body">
              <p class="text-center text-white">11:00:00</p>
              <div class="text-center">
                <div class="d-flex justify-content-between text-center">
                  <p>Set</p>
                  <p>Value</p>
                  <p>2D</p>
                </div>
                <div class="d-flex justify-content-between text-center">
                  <p>1389.57</p>
                  <p>50981.87</p>
                  <p>71</p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="card text-center p-0 mt-3"
            style="background-color: #c50408; border: 2px solid #ebc03c; color: #ffffff; box-shadow: 2px 10px 8px 0 rgba(0, 0, 0, 0.2), 2px 10px 10px 0 rgba(0, 0, 0, 0.19)"
          >
            <div class="card-body">
              <p class="text-center text-white">11:00:00</p>
              <div class="text-center">
                <div class="d-flex justify-content-between text-center">
                  <p>Set</p>
                  <p>Value</p>
                  <p>2D</p>
                </div>
                <div class="d-flex justify-content-between text-center">
                  <p>1389.57</p>
                  <p>50981.87</p>
                  <p>71</p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="card text-center p-0 mt-3"
            style="background-color: #c50408; border: 2px solid #ebc03c; color: #ffffff;  box-shadow: 2px 10px 8px 0 rgba(0, 0, 0, 0.2), 2px 10px 10px 0 rgba(0, 0, 0, 0.19);

            "
          >
            <div class="card-body">
              <p class="text-center text-white">11:00:00</p>
              <div class="text-center">
                <div class="d-flex justify-content-between text-center">
                  <p>Set</p>
                  <p>Value</p>
                  <p>2D</p>
                </div>
                <div class="d-flex justify-content-between text-center">
                  <p>1389.57</p>
                  <p>50981.87</p>
                  <p>71</p>
                </div>
              </div>
            </div>
          </div>
          
      </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: #f5bd02;">ထိုးမည့်အချိန် (section) ကိုရွေးပါ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="modal-btn">
          <a href="{{ url('/2dPlay') }}" class="text-decoration-none btn">09:30 AM</a>
        </div>
        <div class="modal-btn mt-2">
          <a href="#" class="text-decoration-none btn">12:01 PM</a>
        </div>
        <div class="modal-btn mt-2">
          <a href="#" class="text-decoration-none btn">02:00 PM</a>
        </div>
        <div class="modal-btn mt-2 mb-4">
          <a href="#" class="text-decoration-none btn">04:00 PM</a>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- @include('frontend.layouts.footer') --}}
@endsection