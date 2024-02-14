@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:200px;"
    >
      
    {{-- <div class="banks-section mt-5">
      <div class="d-flex justify-content-between">
       <div class="d-flex bank ck">
        <img src="{{ asset('user_app/assets/images/bank/kb1.png') }}" alt="">
        <p class="mt-3 ps-3">K Pay</p>
       </div>
       <i class="fa-solid fa-chevron-right float-end mt-4 ck" ></i>
      </div>
      <hr style="color: #f5bd02;"/>
      
    </div> --}}
      
   
    <div class="fill-money mt-4">
      <div class="top-up-card d-flex justify-content-around">
        <div class="banks ms-2 mt-3">
         <img src="{{ asset('user_app/assets/images/bank/cbpay.png') }}" class="w-100" alt="" />
        </div>
        <p class="mt-4 ms-2">CB Pay</p>
        <hr class="vertical-line" style="border-left: 2px solid #ebc03c; height: 12vh" />
        <div class="mt-3 mx-5" style="color: #fff">
         <p>လွှဲငွေပမာဏ</p>
         <p>--------</p>
        </div>
       </div>
      <!-- <div class="custom-line"></div> -->
      <div class="container">
     <form action="{{ route('user.StoreCBpayFillMoney') }}" method="POST">
    @csrf
  <div class="form-group mt-2">
    <p class="text-white">ငွေလက်ခံမည့်ဖုန်းနံပါတ်</p>
    {{-- <input type="number" value="" class="form-control" name="" id="inputField"> --}}
    <input type="number" id="kpay_no" name="cbpay_no" class="form-control" value="{{ $user->cbpay_no }}">
        <div class="input-group-append float-end">
            <button class="btn btn-outline-secondary" type="button" onclick="copyToClipboard()">Copy</button>
        </div>
  </div>
  <div class="form-group mt-5">
    <p class="text-white">သင်၏ CB pay ဖုန်းနံပါတ်ထည့်ပါ</p>
    <input type="number" value="" class="form-control" name="user_ph_no">
  </div>
  <p class="mt-3" style="color: #fff;">
   လုပ်ဆောင်မှုအမှတ်စဥ် <span style="color: #f5bd02">(နောက်ဆုံးဂဏန်း ၆ လုံး)</span>
  </p>
  <div class="form-group">
   <input type="number" class="form-control" placeholder="ဂဏန်းခြောက်လုံး ဖြည့်ပါ" name="last_six_digit" id="" />
  </div>
  <div class="form-group mt-3">
          <p style="color: #fff">ငွေဖြည့်ပမာဏ</p>
          <input type="number" value="" class="form-control" name="amount" id="inputField" />
        </div>
        <div class="d-flex justify-content-between m-3">
          <div class="fill-box" data-value="1000" onclick="fillInputBox(this)">
            <p>1,000</p>
          </div>
          <div class="fill-box" data-value="5000" onclick="fillInputBox(this)">
            5,000
          </div>
          <div class="fill-box" data-value="10000" onclick="fillInputBox(this)">
            10,000
          </div>
        </div>
        <div class="d-flex justify-content-between m-3">
          <div class="fill-box" data-value="100000" onclick="fillInputBox(this)">
            100,000
          </div>
          <div class="fill-box" data-value="200000" onclick="fillInputBox(this)">
            200,000
          </div>
          <div class="fill-box" data-value="500000" onclick="fillInputBox(this)">
            500,000
          </div>
        </div>
  <div class="form-group mt-4">
   <button type="submit" class="top-up-btn btn text-white">ငွေဖြည့်မည်</button>
  </div>
  </form>
  <p style="color: #fff; font-size:14px; font-weight:bold" class="mt-4">
   ငွေဖြည့်ရန်အဆင်မပြေမှုတစ်စုံတစ်ရာရှိပါက ဆက်သွယ်ရန်
  </p>
  <div class="service-card mt-4">
   <p class="mt-3 fw-bold">ငွေဖြည့် / ငွေထုတ်</p>
   <div class="phone-icon">
    <i class="fa-brands fa-telegram fa-2x px-3"></i>
    <i class="fa-brands fa-viber fa-2x"></i>
   </div>
  </div>
        
      </div>
    </div>   
  </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
<script>
   document.addEventListener('DOMContentLoaded', function () {
    @if(session('SuccessRequest'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('SuccessRequest') }}',
            timer: 3000,
            showConfirmButton: false
        });
    @endif
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
<script>
    function copyToClipboard() {
        var copyText = document.getElementById("kpay_no");
        copyText.select();
        document.execCommand("copy");
        alert("Copied: " + copyText.value); // Optional: Display an alert to indicate the value has been copied
    }
</script>
@endsection