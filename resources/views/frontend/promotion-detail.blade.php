@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:100px"
    >

    <div>
      <img
        src="{{ $promotion->img_url }}"
        alt=""
        class="w-100"
        style="margin-top: 5px; border-radius: 10px"
      />
      <div class="mt-3 text-white ms-3">
        <p>{{ $promotion->title }}</p>
        <p>
            {!! $promotion->description !!}
        </p>
      </div>
    </div>
    </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')

@endsection
