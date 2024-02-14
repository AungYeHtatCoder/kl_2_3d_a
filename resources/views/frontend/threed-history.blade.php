@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-4 headers"
      style="padding-bottom:200px"
    >
      
    <p class="text-center fw-bold">3D  ထီထိုးမှတ်တမ်း</p>
                
    <div class="tab">
        <button class="tablinks active me-3 w-50" onclick="openTab(event, 'first_tab')">3D  ထီထိုးမှတ်တမ်း</button>
        <button class="tablinks ms-3 w-50 " onclick="openTab(event, 'second_tab')">3D ထီပေါက်စဥ်</button>
    </div>

    <div id="first_tab" class="tabcontent mt-4"  style="display: block;">
        <p class="fw-bold text-white">လွန်ခဲ့သော(၁၆) ရက်၏ ထီထိုးမှတ်တမ်း</p>
        <div>
            <div class="d-flex justify-content-between align-items-center text-white">
                <p>ရက်စွဲ</p>
                <p>စုစုပေါင်းထိုးငွေ (ကျပ်)</p>
            </div>
            <div class="d-flex justify-content-between align-items-center text-white">
              <p>12/05/2023</p>
              <p>5000 (ကျပ်)</p>
          </div>

          <div class="d-flex list-card justify-content-around align-items-center text-white">
            <p class="text-white">2023-11-16</p>
            <p>970</p>
           </div>
           <div class="d-flex list-card justify-content-around align-items-center text-white">
            <p class="">2023-11-16</p>
            <p>970</p>
           </div>
        </div>
    </div>

    <div id="second_tab" class="tabcontent mt-4"  style="display: none; min-height: 100vh;">
        <div class="dashboard-lists pt-2 ps-2">
            <div class="d-flex list-card justify-content-around align-items-center">
             <p class="">2023-11-16</p>
             <p>970</p>
            </div>

            <div class="d-flex list-card justify-content-around align-items-center text-white">
                <p class="">2023-11-16</p>
                <p>970</p>
               </div>

               <div class="d-flex list-card justify-content-around align-items-center text-white">
                <p class="">2023-11-16</p>
                <p>970</p>
               </div>

               <div class="d-flex list-card justify-content-around align-items-center text-white">
                <p class="">2023-11-16</p>
                <p>970</p>
               </div>

               <div class="d-flex list-card justify-content-around align-items-center text-white">
                <p class="">2023-11-16</p>
                <p>970</p>
               </div>

               <div class="d-flex list-card justify-content-around align-items-center text-white">
                <p class="">2023-11-16</p>
                <p>970</p>
               </div>

               <div class="d-flex list-card justify-content-around align-items-center text-white">
                <p class="">2023-11-16</p>
                <p>970</p>
               </div>

               <div class="d-flex list-card justify-content-around align-items-center text-white">
                <p class="">2023-11-16</p>
                <p>970</p>
               </div>

               <div class="d-flex list-card justify-content-around align-items-center text-white">
                <p class="">2023-11-16</p>
                <p>970</p>
               </div>
        </div> 
    </div> 

    </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')
<script>
  function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>
@endsection
