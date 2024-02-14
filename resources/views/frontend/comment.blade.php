@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:300px"
    >
      
    <div style="min-height: 100vh;">
      <h6 class="text-center py-4 text-white">အကြံပြုရန်</h6>
      <form action="" method="post">
          <div class="mb-3">
              <input type="text" placeholder="အကြောင်းအရာ" class="form-control">
          </div>
          <div class="mb-3">
              <textarea name="" placeholder="အသေးစိတ်" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>
          <div class="d-flex justify-content-around">
              <div>
                  <a href="#" class="btn btn-secondary px-5 py-2">ဖျက်ရန်</a>
              </div>
              <div>
                  <button type="submit" class="btn px-5 py-2 text-white" style="background-color: #cb9b51;">ပို့ရန်</button>
              </div>
          </div>
      </form>
  </div>
    

    </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')

@endsection
