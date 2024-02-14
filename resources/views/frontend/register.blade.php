@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="height: 100vh;"
    >
    {{-- <img src="{{ asset('user_app/assets/images/login.jpg') }}" class="w-100 mt-2" alt=""> --}}
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class=" w-100 px-3 my-4 mx-auto">
            <input type="text" name="name" class="form-control"  placeholder="အမည်ထည့်ပါ" />
            @error('name')
            <span class="d-block text-white" style="text-shadow: 1px 2px 2px red;">{{ $message }}</span>
            @enderror
        </div>

        {{-- <div class=" w-100 px-3 my-4 mx-auto">
            <input type="email" name="email" class="form-control"  placeholder="အီးမေးလ်ထည့်ပါ" />
            @error('email')
            <span class="d-block text-white" style="text-shadow: 1px 2px 2px red;">{{ $message }}</span>
            @enderror
        </div> --}}

        <div class=" w-100 px-3 my-4 mx-auto">
            <input type="text" name="phone" class="form-control"  placeholder="ဖုန်းနံပတ်ဖြည့်ပါ" />
            @error('phone')
            <span class="d-block text-white" style="text-shadow: 1px 2px 2px red;">{{ $message }}</span>
            @enderror
        </div>

        <div class=" w-100 px-3 my-4 mx-auto">
            <input type="password" name="password" class="form-control"  placeholder="လျှို့ဝှက်နံပါတ်ဖြည့်ပါ" />
            @error('password')
            <span class="d-block text-white" style="text-shadow: 1px 2px 2px red;">{{ $message }}</span>
            @enderror
        </div>

        <div class=" w-100 px-3 my-4 mx-auto">
            <input type="password" name="password_confirmation" class="form-control"  placeholder="နောက်တစ်ခါ လျှို့ဝှက်နံပါတ်ဖြည့်ပါ"/>
            @error('password_confirmation')
            <span class="d-block text-white" style="text-shadow: 1px 2px 2px red;">{{ $message }}</span>
            @enderror
        </div>
        <div class=" w-100 px-3 my-4 mx-auto">
            <button type="submit" name="signin_btn" class="btn btn-outline-success w-100">၀င်မည်</button>
        </div>
    </form>
    </div>
</div>
{{-- @include('frontend.layouts.footer') --}}
@endsection
