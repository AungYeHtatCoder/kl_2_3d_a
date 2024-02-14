@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:80px"
    >
      
    <div style="padding-bottom: 200px;" class="pt-2">
        <h6
          class="text-center p-3"
          style="color: #f5bd02; font-weight: bolder"
        >
          လျှို့ဝှက်နံပါတ်ပြောင်းမည်
        </h6>
        <div class="container my-3">
          <form
            action="https://thailotto123.net/user/change-new-password?6"
            method="post"
          >
            <input
              type="hidden"
              name="_token"
              value="c0JqurocMEvXXknPpB9sJ6UirfJoyKvZo0GsU98i"
              autocomplete="off"
            />
            <input type="hidden" name="_method" value="PUT" />
            <div class="form-group">
              <input
                type="password"
                class="form-control"
                placeholder="လျှို့ဝှက်နံပါတ်အဟောင်း"
                name="current_password"
                id="current_password"
              />
            </div>
            <p
              class="text-center mt-1"
              style="font-size: 13px; color: #f5bd02"
            >
              ကျေးဇူးပြု၍လျှို့ဝှက်နံပါတ်အသစ်ကိုနှစ်ကြိမ်ရိုက်ထည့်ပါ။
            </p>
            <p
              class="text-center mt-1"
              style="font-size: 13px; color:#f5bd02;"
            >
              မှတ်ချက် - လျှို့ဝှက်နံပါတ် နှစ်ခုတူညီရပါမည်
            </p>
            <div class="form-group">
              <input
                type="password"
                class="form-control"
                placeholder="လျှို့ဝှက်နံပါတ်အသစ်"
                name="new_password"
                id="new_password"
              />
            </div>
            <div class="form-group mt-4">
              <input
                type="password"
                class="form-control"
                placeholder="အတည်လျှို့ဝှက်နံပါတ်"
                name="new_password_confirmation"
                id="new_password_confirmation"
              />
            </div>
            <a href=""
              ><p
                class=""
                style="
                  font-size: 14px;
                  text-align: right;
                  text-decoration: none;
                  color: #f5bd02;
                "
              >
                လျှို့ဝှက်နံပါတ်မေ့နေပါသလား?
              </p></a
            >
            <div class="form-group my-2">
              <button type="submit" class="pw-btn text-white">
                ပြောင်းမည်
              </button>
            </div>
          </form>
          <div class="row m-2">
            <div
              class="col-lg-12 mx-auto font-weight-bold"
              style="color: #f5bd02"
            >
              <p>လျှို့ဝှက်နံပါတ်</p>
              <p>1. အကောင့်ဝင်ရန် အသုံးပြုရမည်<br /></p>
              <p>2. ငွေထုတ်ယူရန် အသုံးပြုရမည်</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <p class="text-white font-weight-bold" style="font-weight: bold;">
                အကောင့်လုံခြုံမှုရှိစေရန် သင်၏ လျှို့ဝှက်နံပါတ် ကို
                မည်သူ့ကိုမျှမပြောပါနှင့်။
              </p>
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
