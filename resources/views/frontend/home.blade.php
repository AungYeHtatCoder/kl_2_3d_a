@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 py-4 headers"
      style="height: 120vh;"
    >
    <div class="d-flex justify-content-between py-4 headercontent">
        <div class="d-flex">
            <i class="fa-regular fa-circle-user fa-4x text-white"></i>
            <span class="mt-3 ms-2"><a href="{{ url('/login') }}" class="text-decoration-none ms-3 text-white" style="border:1px solid #ebc03c;">အကောင့်အရင်ဝင်ပါ</a></span>
        </div>
        <div class="mt-3 me-2">
            <i class="fa-solid fa-bell fa-2xl text-white"></i>
        </div>
    </div>
    
    <div class="d-flex justify-content-between">
      <div class="d-flex">
        <img src="{{ asset('user_app/assets/images/wallet1.png') }}"  width="40px" height="40px" alt="">
        <p class="fw-bold pt-2 ps-2 text-white">ပင်မပိုက်ဆံအိတ်</p>
      </div>
      <div class="d-flex pt-2">
        <p class="fw-bold fs-6 pe-2 text-white">0 ကျပ်</p>
        <i class="material-icons">add_circle</i>
      </div>                  
    </div>
     <div class="custom-line"></div>
    
     <!-- carousel -->
    <div
    id="carouselExampleSlidesOnly"
    class="carousel slide carousel-fade mt-3"
    data-bs-ride="carousel"
    >
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img
                src="{{ asset('user_app/assets/images/banner/banner6551a36c29352.png') }}"
                style="max-height: 500px"
                class="d-block w-100"
                alt="..."
            />
            <div class="marquee">
                <div class="marquee-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolorem ea id exercitationem. Quos consequuntur vitae
                soluta aliquid odit temporibus beatae iste autem?
                </div>
            </div>                   
            </div>
            <div class="carousel-item">
            <img
                src="{{ asset('user_app/assets/images/banner/banner6551a35f3f8a0.png') }}"
                style="max-height: 500px"
                class="d-block w-100"
                alt="..."
            />
            <div class="marquee">
                <div class="marquee-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolorem ea id exercitationem. Quos consequuntur vitae
                soluta aliquid odit temporibus beatae iste autem?
                </div>
            </div>
            </div>
            <div class="carousel-item">
            <img
                src="{{ asset('user_app/assets/images/banner/banner6551a3505d2c9.png') }}"
                style="max-height: 500px"
                class="d-block w-100"
                alt="..."
            />
            <div class="marquee">
                <div class="marquee-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolorem ea id exercitationem. Quos consequuntur vitae
                soluta aliquid odit temporibus beatae iste autem?
                </div>
            </div>
            </div>               
        </div>
    </div>
    
    <div style="padding-bottom: 100px;">
        <div class="d-flex justify-content-around mt-4">
            <div>
              <div class="buttons">
                <a href="{{ url('2d') }}" class="text-decoration-none">2D</a>
              </div>
            </div>
            <div>
              <div class="buttons">
                <a href="{{ url('/3d') }}" class="text-decoration-none">3D</a>
              </div>
              
            </div>
        </div>
    
        <div class="d-flex justify-content-around mt-4">
        <div>
            <div class="button">
            <a href="#"
                ><img
                class="w-100 buttons-img"
                src="https://play-lh.googleusercontent.com/_8W1DzUsigdywIFKmm8sYIuJN6cHjzg7SOMhHC6T5MHaMl40h66ru_lAABR7eCCCKQ=w526-h296-rw"
                alt=""
            /></a>
            </div>
            
        </div>
        <div>
            <div class="button">
            <a href="#"
                ><img class="buttons-img" src="https://play-lh.googleusercontent.com/_8W1DzUsigdywIFKmm8sYIuJN6cHjzg7SOMhHC6T5MHaMl40h66ru_lAABR7eCCCKQ=w526-h296-rw" alt=""
            /></a>
            </div>
            
        </div>
        </div>
    
        <div class="d-flex justify-content-around mt-4">
        <div>
            <div class="button">
            <a href="#"
                ><img
                class="w-100 buttons-img"
                src="https://play-lh.googleusercontent.com/_8W1DzUsigdywIFKmm8sYIuJN6cHjzg7SOMhHC6T5MHaMl40h66ru_lAABR7eCCCKQ=w526-h296-rw"
                alt=""
            /></a>
            </div>
            
        </div>
        <div>
            <div class="button">
            <a href="#"
                ><img class="buttons-img" src="https://play-lh.googleusercontent.com/_8W1DzUsigdywIFKmm8sYIuJN6cHjzg7SOMhHC6T5MHaMl40h66ru_lAABR7eCCCKQ=w526-h296-rw" alt=""
            /></a>
            </div>
          
        </div>
        </div>
      </div>

        <!-- carousel -->

        <!-- content -->
                      
    
    </div>
</div>
@include('frontend.layouts.footer')
@endsection