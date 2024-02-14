@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-5 headers"
      style="padding-bottom:300px"
    >
        <div class="text-center py-3">
            @if (Auth::user()->profile)
            <img src="{{ Auth::user()->profile }}" class="me-3 rounded-circle border border-1 border-success" width="90px" alt="">
            @else
            <i class="fas fa-user-circle profile-icon d-block me-3" style="font-size: 100px;"></i>
            @endif
        </div>

        <div class="d-flex justify-content-between py-3 px-2">
            <div class="d-flex">

                <div>
                    <p class="d-block mb-0" style="font-weight: 700;color:#f5bd02">{{ Auth::user()->name }}</p>
                    <p class="d-block mt-0 mb-0" style="font-weight: 700;color:#f5bd02">{{ Auth::user()->phone }}</p>
                    <div class=" text-success">
                        @if (Auth::user()->address)
                        <i class="fas fa-location-dot me-2"></i>
                        <span>{{ Auth::user()->address }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div>
                <p class="mb-0" style="color:#f5bd02; font-weight:700;">လက်ကျန်ငွေ</p>
                <p class="mt-0 mb-0" style="color:#f5bd02; font-weight:700;">{{ Auth::user()->balance }} kyats</p>
                <div class="dropstart my-2">
                    <button class="btn btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #c50408;color:#f5bd02;border:1px solid #f5bd02;">အကောင့် ပြင်ဆင်ရန်
                    </button>
                    <ul class="dropdown-menu border border-none shadow rounded-0" style="background: #e7fff9;">
                        <li><a class="dropdown-item text-success" href="#" onclick="event.preventDefault();" data-bs-target="#updateProfile" data-bs-toggle="modal">ဓာတ်ပုံတင်ရန်</a></li>
                        <li><a class="dropdown-item text-success" href="#" onclick="event.preventDefault();" data-bs-target="#updateInfo" data-bs-toggle="modal">မိမိအချက်အလက်ပြင်ရန်</a></li>
                        <li><a class="dropdown-item text-success" href="#" onclick="event.preventDefault();" data-bs-target="#updatePassword" data-bs-toggle="modal">Password ပြင်ရန်</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <hr>
        <div class="d-flex justify-content-around">
            <a href="{{ url('/user/fill-balance') }}" type="button" class="btn p-2" style="text-decoration: none; background-color: #c50408;color:#fff;border:2px solid #f5bd02">ငွေသွင်းမည်</a>
            <a href="{{ url('/user/withdraw-money')}}" type="button" class="btn p-2" style="text-decoration: none; background-color: #c50408;color:#fff; border:2px solid #f5bd02">ငွေထုတ်မည်</a>
        </div>

        <div class="my-4">
            <p class="text-center text-white px-3 py-2 shadow" style="background-color: #c50408;color:#f5bd02;border:1px solid #ebc03c">တစ်နေ့တာ 2D ထိုး မှတ်တမ်း
            <span>
                <a href="{{ url('/user/two-d-play-index')}}" style="color: #49da06; text-decoration:none">
                        <strong>ထီထိုးရန် နိုပ်ပါ</strong>
                    </a>
            </span>
            </p>
            @if(isset($morningDigits['two_digits']) && count($morningDigits['two_digits']) == 0)
            <p class="text-center text-white px-3 py-2 mt-3" style="background-color: #c50408">
                ကံစမ်းထားသော ထီဂဏန်းများ မရှိသေးပါ
                <span>
                    <a href="{{ url('/user/two-d-play-index')}}" style="color:#f5bd02; text-decoration:none">
                        <strong>ထီးထိုးရန် နိုပ်ပါ</strong></a>
                </span>
            </p>
            @endif

            <div class="d-flex justify-content-between text-success">
                
                <div id="morning" class="text-center w-100 rounded pt-3" style="background:#c50408;cursor: pointer;">
                    <i class="fas fa-list d-block fa-2x"></i>
                    <p style="color: #f5bd02">12:00 PM</p>
                </div>
                <div id="evening" class="text-center w-100 rounded pt-3" style="background:#c50408;cursor: pointer;">
                    <i class="fas fa-list d-block fa-2x"></i>
                    <p style="color: #f5bd02">04:30 PM</p>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header">
                    <p class="text-center">
                        <script>
                            var d = new Date();
                            document.write(d.toLocaleDateString());
                        </script>
                        <br />
                        <script>
                            var d = new Date();
                            document.write(d.toLocaleTimeString());
                        </script>
                    </p>
                </div>
            </div>

            

            {{-- 12:00 PM Start --}}

        <div class="morning d-none my-4">
            @if ($morningDigits)
                <div class="mb-3 d-flex justify-content-around text-white p-2 rounded shadow">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>စဉ်</th>
                                <th>ဂဏန်း</th>
                                <th>ထိုးကြေး</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($morningDigits['two_digits'] as $index => $digit)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $digit->two_digit }}</td>
                                <td>{{ $digit->pivot->sub_amount }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

            <div class="mb-3 d-flex justify-content-around text-white p-2 rounded shadow" style="background: #c50408">
                    <p class="text-right pt-1" style="color: #f5bd02">Total Amount for 12:00PM: ||&nbsp; &nbsp; စုစုပေါင်းထိုးကြေး
                        <strong>{{ $morningDigits['total_amount'] }} MMK</strong>
                    </p>
            </div>
        </div>

        {{-- 12:00 PM End --}}


        {{-- 4:30 PM Start --}}

        <div class="evening d-none my-4">
            @if(isset($eveningDigits['two_digits']) && count($eveningDigits['two_digits']) == 0)
                <p class="text-center text-white px-3 py-2 mt-3" style="background-color: #c50408">
                    ညနေပိုင်း ကံစမ်းထားသော ထီဂဏန်းများ မရှိသေးပါ
                    <span>
                        <a href="{{ route('admin.GetTwoDigit')}}" style="color: #f5bd02; text-decoration:none">
                            <strong>ထီးထိုးရန် နှိပ်ပါ</strong></a>
                    </span>
                </p>
            @endif

            <div class="mb-3 d-flex justify-content-around text-white p-2 rounded shadow">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>စဉ်</th>
                            <th>ဂဏန်း</th>
                            <th>ထိုးကြေး</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eveningDigits['two_digits'] as $index => $digit)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $digit->two_digit }}</td>
                            <td>{{ $digit->pivot->sub_amount }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mb-3 d-flex justify-content-around text-white p-2 rounded shadow" style="background:#c50408;">
                <p class="text-right" style="color: #f5bd02">Total Amount for 04:30PM : ||&nbsp; &nbsp; စုစုပေါင်းထိုးကြေး
                    <strong>{{ $eveningDigits['total_amount'] }} MMK</strong>
                </p>
            </div>

        </div>

        {{-- 4:30 PM End --}}

    </div>
</div>


<div class="modal" tabindex="-1" id="updateProfile">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-user me-2"></i>ဓာတ်ပုံတင်ရန်</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.editProfile', Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="file" class="form-control" name="profile">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="updateInfo">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-info-circle me-2"></i>အချက်အလက်များပြင်ရန်</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.editInfo') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter Name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{ Auth::user()->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" id="address" class="form-control" name="address" placeholder="Enter Address" value="{{ Auth::user()->address }}">
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id="updatePassword">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="fas fa-key me-2"></i>Password ပြင်ရန်</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('user.changePassword') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="old_password" class="form-label">Old Password</label>
                        <input type="password" id="old_password" class="form-control" name="old_password" placeholder="Enter Old Password" value="">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter New Password" value="">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>


{{-- @include('frontend.layouts.footer') --}}
@endsection
@section('script')

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('SuccessRequest'))
        Swal.fire({
            icon: 'success',
            title: 'Success! သင့်ကံစမ်းမှုအောင်မြင်ပါသည် ! သိန်းထီးဆုကြီးပေါက်ပါစေ',
            text: '{{ session('
            SuccessRequest ') }}',
            timer: 3000,
            showConfirmButton: false
        });
        @endif
    });
</script>

<script>
    $('#morning').click(function() {
        $('#morning').addClass('shadow-sm');
        $('#morning').addClass('border');
        $('#morning').addClass('border-1');
        $('#morning').addClass('border-warning');
        $('#evening').removeClass('shadow-sm');
        $('#evening').removeClass('border');
        $('#evening').removeClass('border-1');
        $('#evening').removeClass('border-warning');

        $('.morning').removeClass('d-none');
        $('.evening').addClass('d-none');
    });



    $('#evening').click(function() {
        $('#evening').addClass('shadow-sm');
        $('#evening').addClass('border');
        $('#evening').addClass('border-1');
        $('#evening').addClass('border-warning');
        $('#morning').removeClass('shadow-sm');
        $('#morning').removeClass('border');
        $('#morning').removeClass('border-1');
        $('#morning').removeClass('border-warning');
        $('.evening').removeClass('d-none');
        $('.morning').addClass('d-none');

    });
</script>
@endsection

