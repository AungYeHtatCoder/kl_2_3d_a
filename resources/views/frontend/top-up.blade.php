@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:200px;"
    >
      
    <div class="banks-section mt-5">
      <div class="d-flex justify-content-between">
       <div class="d-flex bank ck">
        <img src="{{ asset('user_app/assets/images/bank/kb1.png') }}" alt="">
        <p class="mt-3 ps-3">K Pay</p>
       </div>
       <i class="fa-solid fa-chevron-right float-end mt-4 ck" ></i>
      </div>
      <hr style="color: #f5bd02;"/>
      <div class="d-flex justify-content-between">
       <div class="d-flex bank cb">
        <img src="{{ asset('user_app/assets/images/bank/cbpay.png') }}" alt="">
        <p class="mt-3 ps-3">CB Pay</p>
       </div>
       <i class="fa-solid fa-chevron-right float-end mt-4"></i>
      </div>
      <hr style="color: #f5bd02;"/>
      <div class="d-flex justify-content-between">
       <div class="d-flex bank">
        <img src="{{ asset('user_app/assets/images/bank/wpay.png') }}" alt="">
        <p class="mt-3 ps-3">Wave Pay</p>
       </div>
       <i class="fa-solid fa-chevron-right float-end mt-4" ></i>
      </div>
      <hr style="color: #f5bd02;"/>
      <div class="d-flex justify-content-between mt-4">
        <div class="d-flex bank">
         <img src="{{ asset('user_app/assets/images/bank/aya_logo.png') }}" alt="">
         <p class="mt-3 ps-3">Aya Pay</p>
        </div>
        <i class="fa-solid fa-chevron-right float-end mt-4" ></i>
      </div>
    </div>
      
   
    <div class="fill-money d-none mt-4">
      <div class="top-up-card d-flex justify-content-around">
        <div class="banks ms-2 mt-3">
         <img src="{{ asset('user_app/assets/images/bank/kb1.png') }}" class="w-100" alt="" />
        </div>
        <p class="mt-4 ms-2">K Pay</p>
        <hr class="vertical-line" style="border-left: 2px solid #ebc03c; height: 12vh" />
        <div class="mt-3 mx-5" style="color: #fff">
         <p>လွှဲငွေပမာဏ</p>
         <p>--------</p>
        </div>
       </div>
      <!-- <div class="custom-line"></div> -->
      <div class="container">
        <div class="form-group m-3">
          <p class="text-white">ငွေလက်ခံမည့်ဖုန်းနံပါတ်</p>
          <input type="number" id="kpay_no" name="kpay_no" class="form-control" value="">
              <div class="input-group-append">
                  <button class="btn btn-outline-light" type="button">Copy</button>
              </div>
        </div>
        <div class="form-group m-3">
          <label for="" class="form-lable"
            >သင်၏ ဖုန်းနံပါတ်ထဲ့ပါ</label
          >
          <input
            type="text"
            id=""
            placeholder=""
            class="form-control mt-1"
          />
        </div>
        <div class="form-group m-3">
          <label for="" class="form-lable"
            >လုပ်ဆောင်မှုအမှတ်စဥ် <span style="color: #f5bd02">(နောက်ဆုံးဂဏန်း ၆ လုံး)</span> </label
          >
          <input
            type="number"
            id=""
            placeholder="ဂဏန်း ၆ လုံး ဖြည့်ပါ"
            class="form-control mt-1"
          />
        </div>
        <div class="form-group m-3">
          <label for="" class="form-lable">ငွေဖြည့်ပမာဏ</label>
          <input
            type="number"
            id="inputField"
            placeholder="ငွေပမာဏဖြည့်ပါ"
            class="form-control mt-1"
          />
        </div>
        <div class="d-flex justify-content-between m-4">
          <div
            class="fill-box"
            data-value="1000"
            onclick="fillInputBox(this)"
          >
            <p>1,000</p>
          </div>
          <div
            class="fill-box"
            data-value="5000"
            onclick="fillInputBox(this)"
          >
            5,000
          </div>
          <div
            class="fill-box"
            data-value="10000"
            onclick="fillInputBox(this)"
          >
            10,000
          </div>
        </div>
        <div class="d-flex justify-content-between m-4">
          <div
            class="fill-box"
            data-value="100000"
            onclick="fillInputBox(this)"
          >
            100,000
          </div>
          <div
            class="fill-box"
            data-value="200000"
            onclick="fillInputBox(this)"
          >
            200,000
          </div>
          <div
            class="fill-box"
            data-value="500000"
            onclick="fillInputBox(this)"
          >
            500,000
          </div>
        </div>
        <div class="row">
         <div class="col-6">
          <!-- <div class="form-group text-center" id="previous-btn">
          <a href="#" class="btn back-btn"
            >ရှေ့တစ်ဆင့်</a
          >
        </div> -->
         </div>
         <div class="col-6">
          <div class="form-group text-center me-4">
          <a href="#" class="btn top-up-btn"
            >‌‌‌ငွေဖြည့်မည်</a
          >
        </div>
         </div>
        </div>
        
      </div>
    </div>   
  </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')
<script>
  $('.ck').click(function () {
      $('.banks-section').addClass('d-none');
      $('.fill-money').removeClass('d-none');
  });
  $('#previous-btn').click(function () {
      $('.banks-section').removeClass('d-none');
      $('.fill-money').addClass('d-none');
  });
</script>
 <script>
    function fillInputBox(element) {
      let value = element.getAttribute('data-value');
      console.log(value);
      let inputField = document.getElementById('inputField');
      inputField.value = value;
    }
  </script>
@endsection
