@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-4 headers"
      style="padding-bottom:200px"
    >
      
    <h4 class="text-center my-3" style="color: #f5bd02">မှတ်တမ်း</h4>
    <ul class="nav nav-justified" >
      <li class="nav-item card p-2" style="background-color: #c50408; box-shadow: 3px 5px 10px 0 rgba(0, 0, 0, 0.2),
      3px 5px 10px 0 rgba(0, 0, 0, 0.19);">
        <a class="nav-link" id="twod-tab" data-toggle="tab" href="#twodmorning" style="color: #f5bd02;">
          <i class="fas fa-calendar fa-2x mb-3 d-block" aria-hidden="true"></i>
          <span class="d-block" style="font-size: 20px;">Morning 2D ထီပေါက်စဉ်</span>
        </a>
      </li>
      <li class="nav-item card ms-2" style="background-color: #c50408; box-shadow: 3px 5px 10px 0 rgba(0, 0, 0, 0.2),
      3px 5px 10px 0 rgba(0, 0, 0, 0.19);">
        <a class="nav-link" id="threed-tab" data-toggle="tab" href="#twodevening" style="color: #f5bd02">
          <i class="fas fa-calendar fa-2x mb-3 d-block" aria-hidden="true"></i>
          <span class="d-block" style="font-size: 20px;">Evening 2D ထီပေါက်စဉ်</span>
        </a>
      </li>
    </ul>

    <div class="tab-content" style="height: 100vh;">
      <div class="tab-pane fade" id="twodmorning" >
        <div class="card p-4 rounded my-3" style="background-color: #c50408; color:#fff; border:1px solid #ebc03c">
          <div class="d-flex justify-content-between">
            <div class="text-center">
              <p class="mb-0 pb-0">Session</p>
              <p class="mb-0 pb-0">Morning</p>
            </div>
            <div class="text-center">
              <p class="mb-0 pb-0">Date</p>
              <p class="mb-0 pb-0">
                10-11-2023
                Friday
                04:07 PM 
              </p>
            </div>
            <div>
              <p class="mb-0 pb-0">2D</p>
              <p class="text-warning mb-0 pb-0">12</p>
            </div>
          </div>
        </div>

        <div class="card p-4 rounded my-3" style="background-color: #c50408; color:#fff; border:1px solid #ebc03c">
          <div class="d-flex justify-content-between">
            <div class="text-center">
              <p class="mb-0 pb-0">Session</p>
              <p class="mb-0 pb-0">Morning</p>
            </div>
            <div class="text-center">
              <p class="mb-0 pb-0">Date</p>
              <p class="mb-0 pb-0">
                10-11-2023
                Friday
                04:07 PM 
              </p>
            </div>
            <div>
              <p class="mb-0 pb-0">2D</p>
              <p class="text-warning mb-0 pb-0">12</p>
            </div>
          </div>
        </div>

        <div class="card p-4 rounded my-3" style="background-color: #c50408; color:#fff; border:1px solid #ebc03c">
          <div class="d-flex justify-content-between">
            <div class="text-center">
              <p class="mb-0 pb-0">Session</p>
              <p class="mb-0 pb-0">Morning</p>
            </div>
            <div class="text-center">
              <p class="mb-0 pb-0">Date</p>
              <p class="mb-0 pb-0">
                10-11-2023
                Friday
                04:07 PM 
              </p>
            </div>
            <div>
              <p class="mb-0 pb-0">2D</p>
              <p class="text-warning mb-0 pb-0">12</p>
            </div>
          </div>
        </div>

        <div class="card p-4 rounded my-3" style="background-color: #c50408; color:#fff; border:1px solid #ebc03c">
          <div class="d-flex justify-content-between">
            <div class="text-center">
              <p class="mb-0 pb-0">Session</p>
              <p class="mb-0 pb-0">Morning</p>
            </div>
            <div class="text-center">
              <p class="mb-0 pb-0">Date</p>
              <p class="mb-0 pb-0">
                10-11-2023
                Friday
                04:07 PM 
              </p>
            </div>
            <div>
              <p class="mb-0 pb-0">2D</p>
              <p class="text-warning mb-0 pb-0">12</p>
            </div>
          </div>
        </div>

        
      </div>
      <div class="tab-pane fade" id="twodevening">
        <div class="card p-4 rounded my-3" style="background-color: #c50408; color:#fff; border:1px solid #ebc03c">
          <div class="d-flex justify-content-between">
            <div class="text-center">
              <p class="mb-0 pb-0">Session</p>
              <p class="mb-0 pb-0">Evening</p>
            </div>
            <div class="text-center">
              <p class="mb-0 pb-0">Date</p>
              <p class="mb-0 pb-0">
                10-11-2023
                Friday
                04:07 PM 
              </p>
            </div>
            <div>
              <p class="mb-0 pb-0">2D</p>
              <p class="text-warning mb-0 pb-0">12</p>
            </div>
          </div>
        </div>
        <div class="card p-4 rounded my-3" style="background-color: #c50408; color:#fff; border:1px solid #ebc03c">
          <div class="d-flex justify-content-between">
            <div class="text-center">
              <p class="mb-0 pb-0">Session</p>
              <p class="mb-0 pb-0">Evening</p>
            </div>
            <div class="text-center">
              <p class="mb-0 pb-0">Date</p>
              <p class="mb-0 pb-0">
                10-11-2023
                Friday
                04:07 PM 
              </p>
            </div>
            <div>
              <p class="mb-0 pb-0">2D</p>
              <p class="text-warning mb-0 pb-0">12</p>
            </div>
          </div>
        </div>
        <div class="card p-4 rounded my-3" style="background-color: #c50408; color:#fff; border:1px solid #ebc03c">
          <div class="d-flex justify-content-between">
            <div class="text-center">
              <p class="mb-0 pb-0">Session</p>
              <p class="mb-0 pb-0">Evening</p>
            </div>
            <div class="text-center">
              <p class="mb-0 pb-0">Date</p>
              <p class="mb-0 pb-0">
                10-11-2023
                Friday
                04:07 PM 
              </p>
            </div>
            <div>
              <p class="mb-0 pb-0">2D</p>
              <p class="text-warning mb-0 pb-0">12</p>
            </div>
          </div>
        </div>
        <div class="card p-4 rounded my-3" style="background-color: #c50408; color:#fff; border:1px solid #ebc03c">
          <div class="d-flex justify-content-between">
            <div class="text-center">
              <p class="mb-0 pb-0">Session</p>
              <p class="mb-0 pb-0">Evening</p>
            </div>
            <div class="text-center">
              <p class="mb-0 pb-0">Date</p>
              <p class="mb-0 pb-0">
                10-11-2023
                Friday
                04:07 PM 
              </p>
            </div>
            <div>
              <p class="mb-0 pb-0">2D</p>
              <p class="text-warning mb-0 pb-0">12</p>
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
  document.getElementById('twod-tab').addEventListener('click', function() {
  document.getElementById('twod-tab').classList.add('active');
  document.getElementById('threed-tab').classList.remove('active');
  document.getElementById('twodmorning').classList.add('show', 'active');
  document.getElementById('twodevening').classList.remove('show', 'active');
});


document.getElementById('threed-tab').addEventListener('click', function() {
  document.getElementById('threed-tab').classList.add('active');
  document.getElementById('twod-tab').classList.remove('active');
  document.getElementById('twodevening').classList.add('show', 'active');
  document.getElementById('twodmorning').classList.remove('show', 'active');
});
</script>
@endsection
