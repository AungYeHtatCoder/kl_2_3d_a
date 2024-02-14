@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-4 headers"
      style="padding-bottom:100px"
    >
      <div class="dashboard-lists pt-2 ps-2 mt-3">
        <a href="{{ route('home') }}" class="text-decoration-none">
          <div class="d-flex list-card">
          <i class="fa-regular fa-circle-user fs-3 ms-2"></i>
          <p class="ps-3">ကိုယ်ရေးအချက်လက်(Profile)</p>
          </div>
        </a>
        <a href="{{ url('/user/three-d-display') }}" class="text-decoration-none">
          <div class="d-flex list-card">
          <i class="fa-regular fa-circle-user fs-3 ms-2"></i>
          <p class="ps-3">3D ထိုးမှတ်တမ်း</p>
          </div>
        </a>
        <a href="{{ url('/user/two-d-winners-history') }}" class="text-decoration-none">
          <div class="d-flex list-card">
          <i class="fa-solid fa-language fs-3 ms-2"></i>
          <p class="ps-3">2D ကံထူးရှင်များ</p>
          </div>
        </a>
         <a href="{{ url('/user/three-d-winners-history') }}" class="text-decoration-none">
          <div class="d-flex list-card">
          <i class="fa-solid fa-language fs-3 ms-2"></i>
          <p class="ps-3">3D ကံထူးရှင်များ</p>
          </div>
        </a>
      <a href="{{ url('/twoDPrize') }}" class="text-decoration-none">

        <div class="d-flex list-card">
          <i class="fas fa-calendar-days fs-3 ms-2"></i>
          <p class="ps-3">ထွက်ဂဏန်းများ</p>
        </div>
      </a>
      <a href="{{ url('/twod-live') }}" class="text-decoration-none">

        <div class="d-flex list-card">
          <i class="fas fa-tower-broadcast fs-3 ms-2" aria-hidden="true"></i>
          <p class="ps-3">2D Live</p>
        </div>
      </a>
      <a href="{{ url('/twod-calendar') }}" class="text-decoration-none">

        <div class="d-flex list-card">
          <i class="fas fa-calendar fs-3 ms-2" aria-hidden="true"></i>
          <p class="ps-3">2D Calendar</p>
        </div>
      </a>
      <a href="{{ url('/twod-holiday') }}" class="text-decoration-none">

        <div class="d-flex list-card">
        <i class="fas fa-calendar-days fs-3 ms-2"></i>
        <p class="ps-3">2D Holiday</p>
        </div>
      </a>
      <a href="{{ url('/twod-live') }}" class="text-decoration-none">

        <div class="d-flex list-card">
          <i class="fas fa-tower-broadcast fs-3 ms-2" aria-hidden="true"></i>
        <p class="ps-3">3D Live</p>
        </div>
      </a>
      <a href="#" class="text-decoration-none">

        <div class="d-flex list-card">
        <i class="fas fa-star fs-3 ms-2"></i>
        <p class="ps-3">အမှတ် 0 (ကျပ်)</p>
        </div>
      </a>
      <a href="{{ url('/myBank') }}" class="text-decoration-none">

        <div class="d-flex list-card">
        <i class="fas fa-wallet fs-3 ms-2"></i>
        <p class="ps-3">ဘဏ်အကောင့်များ</p>
        </div>
      </a>
      <a href="{{ url('/changePassword') }}" class="text-decoration-none">

        <div class="d-flex list-card">
        <i class="fas fa-lock fs-3 ms-2"></i>
        <p class="ps-3">လျှို့ဝှက်နံပါတ်ပြောင်းရန်</p>
        </div>
      </a>
      <a href="{{ url('/inviteCode') }}" class="text-decoration-none">

        <div class="d-flex list-card">
        <i class="fas fa-user-group fs-3 ms-2"></i>
        <p class="ps-3">မိတ်ဆက်ကုဒ်</p>
        </div>
      </a>
      <a href="{{ url('/comment') }}" class="text-decoration-none">

        <div class="d-flex list-card">
        <i class="fas fa-comment-dots fs-3 ms-2"></i>
        <p class="ps-3">အကြံပြုရန်</p>
        </div>
      </a>
      <a href="#" class="text-decoration-none">

        <div class="d-flex list-card">
        <i class="fa-brands fa-google-play fs-3 ms-2"></i>
        <p class="ps-3">ဗားရှင်း - 1.0.0</p>
        </div>
      </a>
      <a href="" class="d-flex list-card text-decoration-none" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa-solid fa-right-from-bracket fs-3 ms-2"></i>
        <p class="ps-3">ထွက်မည်</p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </a>
      </div>

    </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')
<script>
  $('#first-block').click(function () {
    $('#first-block').addClass('click');
    $('#second-block').removeClass('click1');

    $('.first-block').removeClass('d-none');
    $('.second-block').addClass('d-none');
  });
  $('#second-block').click(function () {
    $('#second-block').addClass('click1');
    $('#first-block').removeClass('click');


    $('.first-block').addClass('d-none');
    $('.second-block').removeClass('d-none');
  });
</script>
@endsection
