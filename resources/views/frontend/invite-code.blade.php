@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:80px"
    >
      
    <div style="height: 100vh;">
        <div>
            <div class="text-center m-3"><img src="{{ asset('user_app/assets/images/friends.svg') }}" width="200px" height="150px" alt="">
                <p class="mx-5 text-white">သင်၏မိတ်ဆက်ကုဒ်</p>

            </div>
            <p class="p-2 text-white">သင့်အား App ကိုမိတ်ဆက်ပေးသောသူ၏ မိတ်ဆက်ကုဒ်ကို ဖြည့်ပါ။(သင်၏မိတ်ဆက်ကုဒ်ကို ဖြည့်ရန်မဟုတ်ပါ)</p>
        </div>
        <div class="">
            <div class="">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="မိတ်ဆက်ကုဒ်" name="" id="">
                    <p class="mt-2" style="font-size: 14px; color: #ebc03c; ">မိတ်ဆက်ကုဒ် လိုအပ်ပါသည်</p>
                </div>
                <div class="form-group mt-3">
                    <a href="" class="btn w-100" style="font-weight: bold; background-color: #c50408; color: #ebc03c;"
                    >ဆက်လုပ်ရန်</a>
                </div>
            </div>
        </div>
    </div>
    

    </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')

@endsection
