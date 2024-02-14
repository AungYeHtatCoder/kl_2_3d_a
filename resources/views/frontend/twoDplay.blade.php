@extends('frontend.layouts.app')
@section('content')
<div class="row">
    <div
      class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 mt-4 pt-4 headers"
      style="padding-bottom:100px;"
    >
      
    <div class="flesh-card mt-4">
      <div class="d-flex justify-content-between">
          <div class="d-flex justify-content-between">
              <span class="material-icons">account_balance_wallet</span>
              <p class="px-2">လက်ကျန်ငွေ</p>
          </div>
          <div class="d-flex justify-content-between">
              <span class="material-icons">
                update
                </span>
              <p class="px-2">ပိတ်ရန်ကျန်ချိန်</p>
          </div>
      </div>

      <div class="d-flex justify-content-between">

          <p class="ms-5">0.00</p>
          <p class="me-2">02:30:00PM</p>
      </div>
      
  </div>

  <div>
    <div class="d-flex justify-content-between custom-btn">
      <button class="fs-6" data-bs-target="#quick_modal" data-bs-toggle="modal">အမြန်ရွေး</button>
      <a href="dream-book.html" class="btn h-50 text-white p-2" style="background-color: #c50408; border: 2px solid #ebc03c; box-shadow: 3px 5px 10px 0 rgba(0, 0, 0, 0.2), 3px 5px 10px 0 rgba(0, 0, 0, 0.19)">
        <span class="material-icons text-white icons">menu_book</span>  အိမ်မက်</a>
        
      <select class="h-50 text-white" style="box-shadow: 3px 5px 10px 0 rgba(0, 0, 0, 0.2), 3px 5px 10px 0 rgba(0, 0, 0, 0.19)">
        <option value="1">12:00 AM</option>
        <option value="2">04:00 PM</option>
      </select>
    </div>
  </div>

  <div class="d-flex justify-content-between mt-3 custom-btn">
    <button class="fs-6 px-3">ပတ်လည်</button>
    <input type="text" name="amount" id="amount" placeholder="ငွေပမာဏ" class="form-control w-75 text-center border-black"/>
  </div>


  <div class="dream-form mt-3">
    <div class="row">
       <div class="col-md-12">
        
        
       </div>
    </div>
    <div class="">
        <div class="ms-3">
          <form action="" method="post" class="p-1">

            <div class="row">
              <div class="col-md-12">
                <label for="selected_digits" style="font-size: 14px; color: #f5bd02;">ရွှေးချယ်ထားသောဂဏန်းများ</label>
                <input type="text" name="selected_digits" id="selected_digits" class="form-control mt-1" placeholder="" >
              </div>

              <!-- <div class="mb-3 mt-2">
                <label for="permulated_digit" style="font-size: 14px;">ပတ်လည် ဂဏန်းများ</label>
                <input type="text" id="permulated_digit" class="form-control" readonly>
              </div> -->


              <div class="col-md-12 mt-2">
                <label for="totalAmount" style="font-size: 14px; color: #f5bd02;">စုစုပေါင်းထိုးကြေး</label>
                <input type="text" id="totalAmount" name="totalAmount" class="form-control mt-1" readonly>
              </div>

              
            </div>
          </form>

        </div>
    </div>
  </div>
  
    <div class="box-container mt-3" id="boxContainer">
      <div class="d-flex justify-content-around">
        <div class="box">
          00
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>

        <div class="box">
          01
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          02
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          03
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          04
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="box">
          00
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>

        <div class="box ">
          01
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box ">
          02
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box ">
          03
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box ">
          04
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="box">
          00
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>

        <div class="box">
          01
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          02
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          03
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          04
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="box">
          00
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          01
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          02
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          03
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          04
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="box">
          00
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          01
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          02
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          03
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          04
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="box">
          00
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          01
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          02
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          03
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          04
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="box">
          00
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          01
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          02
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          03
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          04
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="box">
          00
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          01
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          02
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          03
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          04
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-around">
        <div class="box">
          00
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          01
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          02
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          03
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
        <div class="box">
          04
          <div class="progress mt-2" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="height: 15%">
            <div class="progress-bar bg-success" style="width: 25%"></div>
          </div>
        </div>
      </div>
    </div>
      
    </div>
</div>
<div class="row">

  <div class="col-lg-4 col-md-6 offset-lg-4 offset-md-3 py-3 submitbtns footers" style="background-color: #000;">
            
    <div class="d-flex justify-content-around mt-2" >
      <a href="" class="btn remove-btn me-2" style="font-size: 14px;">ဖျက်မည်</a>
      <button type="submit" class="btn play-btn me-1" style="font-size: 14px;">ထိုးမည်</button>
    </div> 
  </div>
</div>

{{-- @include('frontend.layouts.footer') --}}

<div class="modal fade" id="quick_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background-color: #c50408;">
      <div class="modal-header">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <!-- brake -->
      <div>
        <p class="m-3 fw-bold">ဘရိတ်</p>
        <div>
          <div
          id="buttonContainer1"
          class="buttonContainer box-container"
          style="height: auto"
        >
          <button
            id="btn1"
            class="btn-quick"
            onclick="toggle()"
          >
            0/10
          </button>
          <button
            id="btn2"
            class="btn-quick"
            onclick="toggleCount('2', 'container1', 1)"
          >
            1/11
          </button>
          <button
            id="btn3"
            class="btn-quick"
            onclick="toggleCount('3', 'container1', 1)"
          >
            2/12
          </button>
          <button
            id="btn4"
            class="btn-quick"
            onclick="toggleCount('4', 'container1', 1)"
          >
            3/13
          </button>
          <button
            id="btn5"
            class="btn-quick"
            onclick="toggleCount('5', 'container1', 1)"
          >
            4/14
          </button>
          <button
            id="btn6"
            class="btn-quick"
            onclick="toggleCount('6', 'container1', 1)"
          >
            5/15
          </button>
          <button
            id="btn7"
            class="btn-quick"
            onclick="toggleCount('7', 'container1', 1)"
          >
            6/16
          </button>
          <button
            id="btn8"
            class="btn-quick"
            onclick="toggleCount('8', 'container1', 1)"
          >
            7/17
          </button>
          <button
            id="btn9"
            class="btn-quick"
            onclick="toggleCount('9', 'container1', 1)"
          >
            8/18
          </button>
          <button
            id="btn10"
            class="btn-quick"
            onclick="toggleCount('10', 'container1', 1)"
          >
            9/19
          </button>
          </div>
        </div>
      </div>

      <!-- single & double size -->
      <div>
        <p class="m-3 fw-bold">Signle & Double Size</p>
        <div>
          <div
          style="height: auto"
        >
          <button
            class="btn-quick"
          >
            ညီအကို
          </button>
          <button
            class="btn-quick"
          >
            ကြီး
          </button>
          <button
            class="btn-quick"
          >
            ငယ်
          </button>
          <button
            class="btn-quick"
          >
            မ
          </button>
          <button
            class="btn-quick"
          >
            စုံ
          </button>
          <button
            class="btn-quick"
          >
          စုံစုံ
          </button>
          <button
            class="btn-quick"
          >
          စုံမ
          </button>
          <button
            class="btn-quick"
          >
            မစုံ
          </button>
          <button
            class="btn-quick"
          >
            မမ
          </button>
          <button
            class="btn-quick"
          >
            အပူး
          </button>
          </div>
        </div>
      </div>

      <!-- ပတ်သီး -->
      <div>
        <p class="m-3 fw-bold">ပတ်သီး</p>
        <div>
          <div
          style="height: auto"
        >
          <button
            class="btn-quick"
          >
            0
          </button>
          <button
            class="btn-quick"
          >
            1
          </button>
          <button
            class="btn-quick"
          >
            2
          </button>
          <button
            class="btn-quick"
          >
            3
          </button>
          <button
            class="btn-quick"
          >
            4
          </button>
          <button
            class="btn-quick"
          >
          5
          </button>
          <button
            class="btn-quick"
          >
          6
          </button>
          <button
            class="btn-quick"
          >
            7
          </button>
          <button
            class="btn-quick"
          >
            8
          </button>
          <button
            class="btn-quick"
          >
            9
          </button>
          </div>
        </div>
      </div>

      <!-- ထိပ် -->
      <div>
        <p class="m-3 fw-bold">ထိပ်</p>
        <div>
          <div
          style="height: auto"
        >
          <button
            class="btn-quick"
          >
            0
          </button>
          <button
            class="btn-quick"
          >
            1
          </button>
          <button
            class="btn-quick"
          >
            2
          </button>
          <button
            class="btn-quick"
          >
            3
          </button>
          <button
            class="btn-quick"
          >
            4
          </button>
          <button
            class="btn-quick"
          >
          5
          </button>
          <button
            class="btn-quick"
          >
          6
          </button>
          <button
            class="btn-quick"
          >
            7
          </button>
          <button
            class="btn-quick"
          >
            8
          </button>
          <button
            class="btn-quick"
          >
            9
          </button>
          </div>
        </div>
      </div>

      <!-- နောက် -->
      <div>
        <p class="m-3 fw-bold">နောက်</p>
        <div>
          <div
          style="height: auto"
        >
          <button
            class="btn-quick"
          >
            0
          </button>
          <button
            class="btn-quick"
          >
            1
          </button>
          <button
            class="btn-quick"
          >
            2
          </button>
          <button
            class="btn-quick"
          >
            3
          </button>
          <button
            class="btn-quick"
          >
            4
          </button>
          <button
            class="btn-quick"
          >
          5
          </button>
          <button
            class="btn-quick"
          >
          6
          </button>
          <button
            class="btn-quick"
          >
            7
          </button>
          <button
            class="btn-quick"
          >
            8
          </button>
          <button
            class="btn-quick"
          >
            9
          </button>
          </div>
        </div>
      </div>

      <!-- နက္ခတ် ပါ၀ါ -->
      <button type="button" class="w-75 text-white mx-auto mt-5 mb-2 btn btn-outline-primary" style="border-color: #ebc03c;">မြန်မာနက္ခတ် 07,18,24,35,69</button>

      <button type="button" class="w-75 text-white mx-auto my-1 btn btn-outline-primary" style="border-color: #ebc03c;">မြန်မာနက္ခတ် R 70,81,42,53,96</button>

      <button type="button" class="w-75 text-white mx-auto my-1 btn btn-outline-primary" style="border-color: #ebc03c;">ပါ၀ါ 05,16,27,38,49</button>

      <button type="button" class="w-75 text-white mx-auto my-1 btn btn-outline-primary" style="border-color: #ebc03c;">ပါ၀ါ R 50,61,72,83,94</button>

      <button type="button" class="w-75 text-white mx-auto mt-2 mb-5 btn btn-outline-primary" style="border-color: #ebc03c;">ထိုင်းနက္ခတ် 07,19,23,48,56</button>

      
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
    

  var boxes = document.querySelectorAll('.box');

  boxes.forEach(function(box) {
    box.addEventListener('click', function() {
      this.classList.toggle('special');

    });
  });
</script>
@endsection