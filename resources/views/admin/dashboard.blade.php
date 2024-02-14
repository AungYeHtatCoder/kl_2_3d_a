@extends('layouts.admin_app')
@section('styles')

@endsection
@section('content')
{{-- 2d income row --}}
<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">weekend</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">2D Daily Income</p>
                    <h4 class="mb-0">{{ $dailyTotal }} MMK</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">leaderboard</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">2D Weekly Income</p>
                    <h4 class="mb-0">{{ $weeklyTotal }} MMK</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">store</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">2D Monthly Income</p>
                    <h4 class="mb-0 ">{{ $monthlyTotal }} MMK</h4>
                  </div>
                </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  {{-- <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
              <div class="card ">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">2D Yearly Income </p>
                    <h4 class="mb-0 ">{{ $yearlyTotal }} MMK</h4>
                  </div>
                </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  {{-- <p class="mb-0 ">Just updated</p> --}}
                </div>
              </div>
            </div>
          </div>
          {{-- 2d income end  --}}
          {{-- 3d income start --}}
          <div class="row mt-3">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">weekend</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">3D Daily Income</p>
                    <h4 class="mb-0">{{ $three_d_dailyTotal }}MMK</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2">
                  <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">leaderboard</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">3D Weekly Income</p>
                    <h4 class="mb-0">{{ $three_d_weeklyTotal }}MMK</h4>
                  </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  {{-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
              <div class="card  mb-2">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">store</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">3D Monthly Income</p>
                    <h4 class="mb-0 ">{{ $three_d_monthlyTotal }}MMK</h4>
                  </div>
                </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  {{-- <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
              <div class="card ">
                <div class="card-header p-3 pt-2 bg-transparent">
                  <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person_add</i>
                  </div>
                  <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize ">3D Yearly Income </p>
                    <h4 class="mb-0 "> {{ $three_d_yearlyTotal }} MMK</h4>
                  </div>
                </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  {{-- <p class="mb-0 ">Just updated</p> --}}
                </div>
              </div>
            </div>
          </div>

          {{-- 3d income end --}}
          {{-- second row start --}}
          <div class="row mt-5">
            {{-- session two reset start 1 --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card  mb-2">
                <div class="d-flex mt-n2">
                            <div class="avatar avatar-xl bg-gradient-dark border-radius-xl p-2 mt-n4">
                                <img src="{{ asset('admin_app/assets/img/small-logos/logo-slack.svg') }}" alt="slack_logo">
                            </div>
                            <div class="ms-3 my-auto">
                                <h6 class="mb-0"> 2D Session Reset</h6>
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                        data-original-title="Jessica Rowland">
                                        <img alt="Image placeholder" src="{{ asset('admin_app/assets/img/team-3.jpg') }}"
                                            class="">
                                    </a>
                                    <form action="{{ route('admin.SessionReset') }}" method="POST">
                                      @csrf
                                      <button class="btn btn-primary" type="submit">Reset</button>
                                  </form>
                                </div>
                            </div>

                        </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">ပွဲချိန်ပြီး တခုပြီးတိုင်း  </span>၁၅ မိနစ်အတွင်း လုပ်ပေးရပါမည်။</p>
                </div>
              </div>
            </div>
            {{-- session reset 1 end --}}
            {{-- session reset 2 start --}}
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card  mb-2">
                <div class="d-flex mt-n2">
                            <div class="avatar avatar-xl bg-gradient-dark border-radius-xl p-2 mt-n4">
                                <img src="{{ asset('admin_app/assets/img/small-logos/logo-slack.svg') }}" alt="slack_logo">
                            </div>
                            <div class="ms-3 my-auto">
                                <h6 class="mb-0"> 2D Over Amount Limit Reset</h6>
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                        data-original-title="Jessica Rowland">
                                        <img alt="Image placeholder" src="{{ asset('admin_app/assets/img/team-3.jpg') }}"
                                            class="">
                                    </a>
        <form action="{{ route('admin.OverAmountLimitSessionReset') }}" method="POST">
                                      @csrf
                                      <button class="btn btn-primary" type="submit">OverAmountLimitReset</button>
                                  </form>
                                </div>
                            </div>

                        </div>

                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">ပွဲချိန်ပြီး တခုပြီးတိုင်း  </span>၁၅ မိနစ်အတွင်း လုပ်ပေးရပါမည်။</p>
                </div>
              </div>
            </div>
            {{-- session reset 2 --}}
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
              <div class="card  mb-2">
                <div class="d-flex mt-n2">
                            <div class="avatar avatar-xl bg-gradient-dark border-radius-xl p-2 mt-n4">
                                <img src="{{ asset('admin_app/assets/img/small-logos/logo-slack.svg') }}" alt="slack_logo">
                            </div>
                            <div class="ms-3 my-auto">
                                <h6 class="mb-0">Morning Session</h6>
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                        data-original-title="Jessica Rowland">
                                        <img alt="Image placeholder" src="{{ asset('admin_app/assets/img/team-3.jpg') }}"
                                            class="">
                                    </a>
                                    
                                        <form action="{{ route('admin.OpenCloseTwoD' , $lottery_matches->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="is_active" value="{{ $lottery_matches->id }}">
                                            <div class="form-check form-switch ps-0">
                                                <input class="form-check-input ms-auto" type="checkbox"
                                                    id="flexSwitchCheckDefault" name="flexSwitchCheckDefault"
                                                    {{ $lottery_matches->is_active ? 'checked' : '' }}>
                                                <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                                    for="flexSwitchCheckDefault">Close For 2D Session</label>
                                            </div>
                                            <button class="btn btn-primary" type="submit">Open / Close</button>
                                        </form>
                                    
                                </div>
                            </div>

                        </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">2D Session </span>အဖွင့်အပိတ်ကို ဤနေရာမှ လုပ်ပေးရပါမည်။</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
              <div class="card ">
                {{-- 3d reset --}}
                <div class="d-flex mt-n2">
                            <div class="avatar avatar-xl bg-gradient-dark border-radius-xl p-2 mt-n4">
                                <img src="{{ asset('admin_app/assets/img/small-logos/logo-slack.svg') }}" alt="slack_logo">
                            </div>
                            <div class="ms-3 my-auto">
                                <h6 class="mb-0"> 3D Reset</h6>
                                <div class="avatar-group">
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip"
                                        data-original-title="Jessica Rowland">
                                        <img alt="Image placeholder" src="{{ asset('admin_app/assets/img/team-3.jpg') }}"
                                            class="">
                                    </a>
                                 <form action="{{ route('admin.ThreeDReset') }}" method="POST">
                                      @csrf
                                      <button class="btn btn-primary" type="submit">3D Reset</button>
                                  </form>
                                </div>
                            </div>

                        </div>
                <hr class="horizontal my-0 dark">
                <div class="card-footer p-3">
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">3D ထွက်ပြီး </span>၁၀ နာရီအတွင်း လုပ်ဆောင်ပေးရပါမည်။</p>
                </div>
              </div>
            </div>
          </div>
          {{-- second row end --}}
          {{-- pie chart start --}}
          <div class="row mt-3">
        <div class="col-md-6">
          {{-- <h5 class="mb-0">Pie Charts</h5>
          <p class="text-sm mb-0">
            Charts on this page use Chart.js - Simple yet flexible JavaScript charting for designers & developers.
          </p> --}}
        </div>
      </div>
      {{-- 2d chart start --}}
      <div class="row mt-4">
        <div class="col-lg-4 col-sm-6">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-0">2D</h6>
                <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="See traffic channels">
                  <i class="material-icons text-sm">priority_high</i>
                </button>
              </div>
            </div>
            <div class="card-body pb-0 p-3 mt-4">
              <div class="row">
                <div class="col-7 text-start">
                  <div class="chart">
                    <canvas id="chart-pie" class="chart-canvas" height="200"></canvas>
                  </div>
                </div>
                <div class="col-5 my-auto">
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-info"></i>
                    <span class="text-dark text-xs">2D DailyIncome</span>
                  </span>
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-primary"></i>
                    <span class="text-dark text-xs">2D WeeklyIncome</span>
                  </span>
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-dark"></i>
                    <span class="text-dark text-xs">2D MonthlyIncome</span>
                  </span>
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-secondary"></i>
                    <span class="text-dark text-xs">2D YearlyIncome</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
              <div class="w-60">
                {{-- <p class="text-sm">
                  More than <b>1,200,000</b> sales are made using referral marketing, and <b>700,000</b> are from social media.
                </p> --}}
              </div>
              <div class="w-40 text-end">
                {{-- <a class="btn bg-light mb-0 text-end" href="javascript:;">Read more</a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-sm-6 mt-sm-0 mt-4">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-0">2D</h6>
                <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
                  <i class="material-icons text-sm">priority_high</i>
                </button>
              </div>
              <div class="d-flex align-items-center">
                <span class="badge badge-md badge-dot me-4">
                  <i class="bg-primary"></i>
                  {{-- <span class="text-dark text-xs">Facebook Ads</span> --}}
                </span>
                <span class="badge badge-md badge-dot me-4">
                  <i class="bg-dark"></i>
                  {{-- <span class="text-dark text-xs">Google Ads</span> --}}
                </span>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- 2d chart end --}}
          {{-- pie chart end --}}
          {{-- 3d row --}}
          <div class="row mt-4">
        <div class="col-lg-4 col-sm-6">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-0">3D</h6>
                <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="See traffic channels">
                  <i class="material-icons text-sm">priority_high</i>
                </button>
              </div>
            </div>
            <div class="card-body pb-0 p-3 mt-4">
              <div class="row">
                <div class="col-7 text-start">
                  <div class="chart">
                    <canvas id="chart-pie-3d" class="chart-canvas" height="200"></canvas>
                  </div>
                </div>
                <div class="col-5 my-auto">
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-info"></i>
                    <span class="text-dark text-xs">3D DailyIncome</span>
                  </span>
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-primary"></i>
                    <span class="text-dark text-xs">3D WeeklyIncome</span>
                  </span>
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-dark"></i>
                    <span class="text-dark text-xs">3D MonthlyIncome</span>
                  </span>
                  <span class="badge badge-md badge-dot me-4 d-block text-start">
                    <i class="bg-secondary"></i>
                    <span class="text-dark text-xs">3D YearlyIncome</span>
                  </span>
                </div>
              </div>
            </div>
            <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
              <div class="w-60">
                {{-- <p class="text-sm">
                  More than <b>1,200,000</b> sales are made using referral marketing, and <b>700,000</b> are from social media.
                </p> --}}
              </div>
              <div class="w-40 text-end">
                {{-- <a class="btn bg-light mb-0 text-end" href="javascript:;">Read more</a> --}}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-sm-6 mt-sm-0 mt-4">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <div class="d-flex justify-content-between">
                <h6 class="mb-0">3D</h6>
                <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
                  <i class="material-icons text-sm">priority_high</i>
                </button>
              </div>
              <div class="d-flex align-items-center">
                <span class="badge badge-md badge-dot me-4">
                  <i class="bg-primary"></i>
                  {{-- <span class="text-dark text-xs">Facebook Ads</span> --}}
                </span>
                <span class="badge badge-md badge-dot me-4">
                  <i class="bg-dark"></i>
                  {{-- <span class="text-dark text-xs">Google Ads</span> --}}
                </span>
              </div>
            </div>
            <div class="card-body p-3">
              <div class="chart">
                <canvas id="chart-line-3d" class="chart-canvas" height="300"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
          {{-- 3d row --}}
          {{-- fourth row --}}
          <div class="row mt-5">
        <div class="col-md-6">
          <h5 class="mb-0">2D 3D Daily Income Charts</h5>
          {{-- <p class="text-sm mb-0">
            Charts on this page use Chart.js - Simple yet flexible JavaScript charting for designers & developers.
          </p> --}}
        </div>
      </div>
           <div class="row mb-4 mt-5">
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
              <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <div class="chart">
                      <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h6 class="mb-0 ">2D DailyIncome</h6>
                  {{-- <p class="text-sm ">Last Campaign Performance</p> --}}
                  <hr class="dark horizontal">
                  <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    {{-- <p class="mb-0 text-sm"> campaign sent 2 days ago </p> --}}
                  </div>
                </div>
              </div>
            </div>
            {{-- add more col --}}
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
              <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <div class="chart">
                      <canvas id="chart-bars-3d" class="chart-canvas" height="170"></canvas>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h6 class="mb-0 ">3D DailyIncome</h6>
                  {{-- <p class="text-sm ">Last Campaign Performance</p> --}}
                  <hr class="dark horizontal">
                  <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    {{-- <p class="mb-0 text-sm"> campaign sent 2 days ago </p> --}}
                  </div>
                </div>
              </div>
            </div>
            {{-- add more col --}}
          </div>
          {{-- fourth row end --}}
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{ asset('admin_app/assets/js/plugins/chartjs.min.js')}}"></script>
{{-- pie chart --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js">
</script>
<script src="{{ asset('admin_app/assets/js/dashboard.js')}}"></script>
<script src="{{ asset('admin_app/assets/js/v_1_dashboard.js')}}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    @if(session('SuccessRequest'))
    Swal.fire({
      icon: 'success',
      title: 'Success!',
      text: '{{ session("SuccessRequest") }}',
      timer: 3000,
      showConfirmButton: false
    });
    @endif

    // If you want to show an error or other types of alerts, you can add more conditions here
    @if(session('error'))
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: '{{ session("error") }}'
    });
    @endif
});

// For the reset confirmation, you can replace the native confirm with SweetAlert
$('form').on('submit', function(e) {
    e.preventDefault(); // prevent the form from submitting immediately
    var form = this;
    Swal.fire({
        title: 'Are you sure you want to reset?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, reset it!'
    }).then((result) => {
        if (result.isConfirmed) {
            form.submit(); // submit the form if confirmed
        }
    });
});


</script>

{{-- first chart end --}}
@endsection