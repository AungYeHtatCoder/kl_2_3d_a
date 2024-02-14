@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-4 headers"
      style="height:100vh"
    >
      
    <div class="winner-card mt-5 p-1">
      <p class="mt-2">တစ်လအတွင်း 2D ကံထူးရှင်များ</p>
    </div>

    <div class="d-flex justify-content-between p-3">

      <p style="color: #f5bd02;">Updated at: <br><span class="font-weight-bold" >
            
        <script>
          var d = new Date();
          document.write(d.toLocaleString());
        </script>
      </span></p>
      <div>

       <span class="font-weight-bold" style="font-size: 30px;color: #fff">{{ $winners->count() }}
          @if($winners->count() > 1)
          ကံထူးရှင်များ
          @else
          ကံထူးရှင်များ
          @endif
        </span>
      </div>
    </div>

    <div class="p-1 mt-3" style="border-bottom: 200px;">
      @if($winners->isEmpty())
      <p style="color: #f5bd02">No winners found for the past month.</p>
      @else
      <table class="winner-table table table-striped">
        @foreach($winners as $index => $winner)
        <tr>
          {{-- <td class="mt-2">1.</td> --}}
          <td>
           {{ $index + 1 }}
          </td>
          <td>
            @if($winner->profile)
            <img src="{{ $winner->profile }}" width="50px" height="50px" style="border-radius: 50%" alt="" />
            @else
            <i class="fa-regular fa-circle-user" style="font-size: 50px;"></i>
            @endif
          </td>
          <td><span style="font-size: 10px">{{ $winner->name }}</span>
            <p style="font-size: 10px">{{ $winner->phone }}</p>
          </td>
          {{-- <td><span>Session</span>
            <p>{{ ucfirst($winner->session) }}</p>
          </td> --}}
          <td><span>ပေါက်ဂဏန်း</span>
            <p>{{ $winner->prize_no }}</p>
          </td>
          <td><span>ထိုးငွေ</span>
            <p>{{ $winner->sub_amount }}</p>
          </td>
          <td><span>ထီပေါက်ငွေ</span>
            <p>{{ $winner->prize_amount }}</p>
          </td>
        </tr>
        @endforeach

      </table>
      @endif
    
    </div> 

    </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')
@endsection
