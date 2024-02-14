@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:300px; min-height: 90vh;"
    >
    @foreach ($promotions as $p)
        <div class="d-flex justify-content-between shadow align-items-center px-3 py-1 my-2 rounded" style="background-color: #c50408; border:1px solid #f5bd02">
            <a href="{{ url('/promotion-detail/'.$p->id) }}" style="text-decoration: none" class="d-flex justify-content-around align-items-center text-white">
            <img src="{{ $p->img_url }}" class="rounded-circle" width="50px" height="50px" alt=""/>
            <p class="mx-3">
                {{ $p->title }}
            </p>
            <span>
                <a
                class="material-icons text-white"
                style="text-decoration: none"
                href="{{ url('/promotion-detail/'.$p->id) }}"
                >chevron_right</a
                >
            </span>
            </a>
        </div>
    @endforeach
    </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')

@endsection
