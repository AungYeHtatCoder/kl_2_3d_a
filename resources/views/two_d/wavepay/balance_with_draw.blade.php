@extends('frontend.layouts.app')
@section('content')
<div class="row">
 <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom: 80px"
    >
  <p class="text-center mt-3" style="color: #fff">သင် ၏ အကောင့်မှ လက်ကျန်ငွေ <strong> {{ Auth::user()->balance }} </strong></p>
  <p class="text-center mt-3" style="color: #fff">ငွေထုတ်မည်</p>
  <p class="text-center" style="color: #fff">
   ကျေးဇူးပြု၍ အောက်ပါ Wave Pay အကောင့်သို့ ငွေလွှဲပါ။
  </p>
  <div class="top-up-card d-flex justify-content-between">
   <div class="banks">
    <img src="{{ asset('user_app/assets/images/bank/wpay.png') }}" class="w-100" alt="" />
   </div>
   <p class="mt-4 text-white">Wave Pay</p>
   <hr class="vertical-line" style="border-left: 2px solid #000; height: 10vh" />
   <div class="mt-3 mx-5" style="color: #fff">
    <p>ငွေထုတ်ပမာဏ</p>
    <p>-----</p>
   </div>
  </div>
  <form action="{{ route('user.StoreWavepayWithdrawMoney') }}" method="POST">
    @csrf
  <div class="form-group mt-2">
    <p class="text-white">ငွေလက်ခံမည့်ဖုန်းနံပါတ်</p>
    {{-- <input type="number" value="" class="form-control" name="" id="inputField"> --}}
    <input type="number" id="kpay_no" name="wavepay_no" class="form-control" value="{{ $user->wavepay_no }}">
        <div class="input-group-append float-end">
            <button class="btn btn-outline-secondary" type="button" onclick="copyToClipboard()">Copy</button>
        </div>
  </div>
  <div class="form-group mt-5">
    <p class="text-white">သင်၏ Wave pay ဖုန်းနံပါတ်ထဲ့ပါ</p>
    <input type="number" value="" class="form-control" name="user_ph_no">
  </div>
  {{-- <p class="mt-4" style="color: #fff; font-size: 14px">
   လုပ်ဆောင်မှုအမှတ်စဥ် (နောက်ဆုံးဂဏန်း ၆ လုံး)
  </p>
  <div class="form-group">
   <input type="number" class="form-control" placeholder="ဂဏန်းခြောက်လုံး ဖြည့်ပါ" name="last_six_digit" id="" />
  </div> --}}
  <div class="form-group mt-3">
          <p style="color: #fff">ငွေထုတ်ယူမည့် ပမာဏ</p>
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
  <div class="form-group my-4">
   <button type="submit" class="top-up-btn btn text-white">ငွေထုတ်မည်</button>
  </div>
  </form>
  <p style="color: #fff; font-size:14px; font-weight:bold">
   ငွေထုတ်ရန်အဆင်မပြေမှုတစ်စုံတစ်ရာရှိပါက ဆက်သွယ်ရန်
  </p>
  <div class="service-card mt-4">
   <p class="mt-3 text-white fw-bold">ငွေဖြည့် / ငွေထုတ်</p>
   <div class="phone-icon">
    <i class="fa-brands fa-telegram px-3 fa-2x"></i>
    <i class="fa-brands fa-viber fa-2x"></i>
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