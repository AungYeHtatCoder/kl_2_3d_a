@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-4 headers"
      style="padding-bottom:200px"
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

        <span class="font-weight-bold" style="font-size: 30px;color: #f5bd02;">2
          ကံထူးရှင်များ
        </span>
      </div>
    </div>

    <div class="p-1 mt-3" style="border-bottom: 200px;">
      <table class="table table-bordered" width="100%">
        <tbody>
          <tr>
            <td><i class="fa-regular fa-circle-user" style="font-size: 50px;"></i></td>
            <td><span style="font-size: 10px">Super User</span> <p style="font-size: 10px">N/A</p></td>
            <td><span>Session</span> <p>Evening</p></td>
            <td><span>Win-No</span> <p>12</p></td>
            <td><span>ထိုးငွေ</span> <p>2500</p></td>
            <td><span>ထီပေါက်ငွေ</span> <p>212500</p></td>
          </tr>
          <tr>
            <td><i class="fa-regular fa-circle-user" style="font-size: 50px;"></i></td>
            <td><span style="font-size: 10px">Super User</span> <p style="font-size: 10px">N/A</p></td>
            <td><span>Session</span> <p>Evening</p></td>
            <td><span>Win-No</span> <p>12</p></td>
            <td><span>ထိုးငွေ</span> <p>2500</p></td>
            <td><span>ထီပေါက်ငွေ</span> <p>212500</p></td>
          </tr>
        </tbody>
      </table>
    </div> 

    </div>
</div>


@include('frontend.layouts.footer')
@endsection
@section('script')
@endsection
