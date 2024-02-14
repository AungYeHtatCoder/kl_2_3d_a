@extends('frontend.layouts.app')
@section('style')
<link rel="stylesheet" href="{{ asset('user_app/assets/css/balance.css') }}">

@endsection
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

          <p class="ms-5" class="font-green d-block" id="userBalance" data-balance="{{ Auth::user()->balance }}">{{ Auth::user()->balance }} MMK</p>
          <p class="me-2">
          <span id="todayDate" style="font-size: 15px"></span><br />
          <span id="currentTime" style="font-size: 15px"></span><br />
          <span id="sessionInfo" style="font-size: 15px"></span>
          </p>
      </div>

  </div>

  <div>
    <div class="d-flex justify-content-between custom-btn">
      {{-- <button href="{{ url('/user/two-d-quick-play-index') }}" class="fs-6" >အမြန်ရွေး</button> --}}
      <a href="{{ url('/user/two-d-quick-play-index') }}" class="btn h-50 text-white p-2" style="background-color: #c50408; border: 2px solid #ebc03c; box-shadow: 3px 5px 10px 0 rgba(0, 0, 0, 0.2), 3px 5px 10px 0 rgba(0, 0, 0, 0.19)">
          အမြန်ရွေး</a>
      <a href="{{ url('/user/two-d-dream-book') }}" class="btn h-50 text-white p-2" style="background-color: #c50408; border: 2px solid #ebc03c; box-shadow: 3px 5px 10px 0 rgba(0, 0, 0, 0.2), 3px 5px 10px 0 rgba(0, 0, 0, 0.19)">
        <span class="material-icons text-white icons">menu_book</span>  အိမ်မက်</a>
        
      <select class="h-50 text-white" style="box-shadow: 3px 5px 10px 0 rgba(0, 0, 0, 0.2), 3px 5px 10px 0 rgba(0, 0, 0, 0.19)">
        <option value="1">9:30 AM</option>
        {{-- <option value="2">04:00 PM</option> --}}
      </select>
    </div>
  </div>

  <div class="d-flex justify-content-between mt-3 custom-btn">
    <button class="fs-6 px-3" id="permuteButton" onclick="permuteDigits()">ပတ်လည်</button>
    <input type="text" name="amount" id="all_amount" placeholder="ငွေပမာဏ" class="form-control w-75 text-center border-black" autocomplete="off"/>
  </div>


  <div class="dream-form mt-3">
    <div class="row">
       <div class="col-md-12">


       </div>
    </div>
    <div class="">
        <div class="ms-3">
         @if ($lottery_matches->is_active == 1)
          <div class="p-1">
            @csrf
            <div class="row">
              <div class="col-md-12">
                <label for="selected_digits" style="font-size: 14px; color: #f5bd02;">ရွှေးချယ်ထားသောဂဏန်းများ</label>
                <input type="text" name="selected_digits" id="selected_digits" class="form-control mt-1" placeholder="Enter Digits" >
              </div>
              <div class="col-md-12 mt-2">
                <label for="totalAmount" style="font-size: 14px; color: #f5bd02;">ပတ်လည်ဂဏန်းများ</label>
                <input type="text" id="permulated_digit" class="form-control" readonly>
              </div>
              <div id="amountInputs" class="col-md-12 mb-3 d-none"></div>
              <div class="col-md-12 mt-2">
                <label for="totalAmount" style="font-size: 14px; color: #f5bd02;">စုစုပေါင်းထိုးကြေး</label>
                <input type="text" id="totalAmount" name="totalAmount" class="form-control mt-1" readonly>
              </div>
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

            </div>
           </div>
            @else
          <div class="row">
            <div class="col-md-12">
            <div class="text-center p-4">
            <h4 style="color: aliceblue" class="badge bg-primary">ယခု ပွဲချိန်မှာ ထိုး၍ မရတော့ပါ ! နောက်ပွဲစဉ်စောင့်ပေးပါ အားပေးမှုကို ကျေးဇူးတင်ပါသည်။ </h4>
        </div>
            </div>
          </div>
          @endif

        </div>
    </div>
  </div>

    <div class="box-container mt-3" id="boxContainer">

        <div class="main-row">
          @foreach ($twoDigits as $digit)
          <div class="column">

            @php
            $totalBetAmountForTwoDigit = DB::table('lottery_two_digit_copy')
            ->where('two_digit_id', $digit->id)
            ->sum('sub_amount');
            @endphp

            @if ($totalBetAmountForTwoDigit < 50000)
            <div class="text-center fs-6 digit" style="background-color: {{ 'javascript:getRandomColor();' }};" onclick="selectDigit('{{ $digit->two_digit }}', this)">
             <p style="font-size: 20px">
               {{ $digit->two_digit }}
             </p>
              {{-- <small class="d-none" style="font-size: 10px">{{ $remainingAmounts[$digit->id] }}</small> --}}
              <div class="progress">
                @php
                $totalAmount = 50000;
                $betAmount = $totalBetAmountForTwoDigit; // the amount already bet
                $remainAmount = $totalAmount - $betAmount; // the amount remaining that can be bet
                $percentage = ($betAmount / $totalAmount) * 100;
                @endphp

                <div class="progress-bar" style="width: {{ $percentage }}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                 <small class="d-none" style="font-size: 10px">{{ $remainingAmounts[$digit->id] }}</small>
                </div>
              </div>
          </div>
          @else
          <div class="col-2 text-center digit disabled" style="background-color: {{ 'javascript:getRandomColor();' }}" style="width:100%" onclick="showLimitFullAlert()">
            {{ $digit->two_digit }}
          </div>
          @endif

        </div>
        @endforeach

    </div>
    </div>

    </div>
</div>
<div class="row">
  <div class="col-lg-4 col-md-6 offset-lg-4 offset-md-3 py-3 submitbtns footers" style="background-color: #000;">
   @if ($lottery_matches->is_active == 1)    
    <div class="d-flex justify-content-around mt-2" >
      <a href="" class="btn remove-btn me-2" style="font-size: 14px;">ဖျက်မည်</a>
      <a href="{{ url('/user/two-d-play-9-30-early-morning-confirm') }}" onclick="storeSelectionsInLocalStorage()"" class="btn play-btn me-1" style="font-size: 14px;">ထိုးမည်</a>
    </div> 
  @endif
  </div>
</div>
{{-- 
   @if ($lottery_matches->is_active == 1)    
    <div class="d-flex justify-content-around mt-2" >
      <a href="" class="btn remove-btn me-2" style="font-size: 14px;">ဖျက်မည်</a>
      <a href="{{ url('/user/two-d-play-9-30-early-morning-confirm') }}" onclick="storeSelectionsInLocalStorage()"" class="btn play-btn me-1" style="font-size: 14px;">ထိုးမည်</a>
    </div> 
  @endif
  --}}
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
<script>

</script>
<script>
  // Function to update date and time display
  function updateDateTimeDisplay() {
    var d = new Date();
    document.getElementById('todayDate').textContent = d.toLocaleDateString();
    document.getElementById('currentTime').textContent = d.toLocaleTimeString();

    // Define the morning and evening session close times
    var morningClose = new Date(d.getFullYear(), d.getMonth(), d.getDate(), 12, 1);
    var eveningClose = new Date(d.getFullYear(), d.getMonth(), d.getDate(), 16, 30);

    // Determine current session based on current time
    var sessionInfo = "";
    if (d < morningClose) {
      sessionInfo = "Closes at 12:01 PM.";
    } else if (d >= morningClose && d < eveningClose) {
      sessionInfo = "Closes at 4:30 PM.";
    } else if (d >= eveningClose) {
      sessionInfo = "Evening session closed.";
    }
    document.getElementById('sessionInfo').textContent = sessionInfo;
  }

  // Update the display initially
  updateDateTimeDisplay();

  // Set interval to update the display every minute
  setInterval(updateDateTimeDisplay, 1000);
</script>
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
  function showLimitFullAlert() {
    Swal.fire({
      icon: 'info',
      title: 'Limit Reached',
      text: 'This two digit\'s amount limit is full.'
    });
  }

    function selectDigit(num, element) {
        const selectedInput = document.getElementById('selected_digits');
        const amountInputsDiv = document.getElementById('amountInputs');

        // Ensure that the digits are handled as strings
        let selectedDigits = selectedInput.value ? selectedInput.value.split(",") : [];
        num = num.toString(); // Convert num to a string to ensure "00" is not treated as 0

        // Check if the digit is already selected
        if (selectedDigits.includes(num)) {
            // If it is, remove the digit, its style, and its input field
            selectedInput.value = selectedDigits.filter(digit => digit !== num).join(',');
            element.classList.remove('selected');
            const inputToRemove = document.getElementById('amount_' + num);
            if (inputToRemove) {
                amountInputsDiv.removeChild(inputToRemove);
            }
        } else {
            // Otherwise, add the digit, its style, and its input field
            selectedDigits.push(num);
            selectedInput.value = selectedDigits.join(',');
            element.classList.add('selected');
            // const amountLabel = document.createElement('label');
            // amountLabel.textContent = 'ထိုးကြေးသတ်မှတ်ပါ ' + num;
            const amountInput = document.createElement('input');
            amountInput.setAttribute('type', 'number');
            amountInput.setAttribute('name', 'amounts[' + num + ']');
            amountInput.setAttribute('id', 'amount_' + num);
            amountInput.setAttribute('placeholder', 'Amount for ' + num);
            amountInput.setAttribute('min', '100');
            amountInput.setAttribute('max', '50000');
            amountInput.setAttribute('class', 'form-control mt-2');
            // amountInputsDiv.appendChild(amountLabel);
            amountInputsDiv.appendChild(amountInput);
        }

        // Store the current selections to local storage
        storeSelectionsInLocalStorage();
    }

    function storeSelectionsInLocalStorage() {
        let selections = {};
        document.querySelectorAll('input[name^="amounts["]').forEach(input => {
            let digit = input.name.match(/\[(.*?)\]/)[1];
            let amount = input.value;
            if (amount) { // only add to selections if an amount is entered
                selections[digit] = amount;
            }
        });
        localStorage.setItem('twoDigitSelections', JSON.stringify(selections));
        //window.location.href = "{{ url('/user/two-d-play-9-30-early-morning-confirm') }}";
    }


    function permuteDigits() {
        const outputField = document.getElementById('selected_digits');
        const permulatedField = document.getElementById('permulated_digit');

        if (!outputField || !permulatedField) {
        console.error('Required field not found');
        return;
        }

        let selectedDigits = outputField.value.split(",").map(s => s.trim());

        // Permute the digits only if they are two digits long
        const permutedDigits = selectedDigits.map(num => {
        return (num.length === 2) ? num[1] + num[0] : num;
        });

        // Update the outputField with both selected and permuted digits
        outputField.value = `${selectedDigits.join(", ")}`;

        // Update the permulatedField with the permuted digits only
        permulatedField.value = permutedDigits.join(",");

        // Combine selectedDigits and permutedDigits while removing duplicates
        const allUniqueDigits = Array.from(new Set([...selectedDigits, ...permutedDigits]));

        // Recreate the amount inputs for all unique digits
        createAmountInputs(allUniqueDigits);
    }

    function createAmountInputs(digits) {
        const amountInputsDiv = document.getElementById('amountInputs');
        amountInputsDiv.innerHTML = ''; // Clear existing amount inputs

        // Create a new input field for each unique digit
        digits.forEach(digit => {
        const amountInput = document.createElement('input');
        amountInput.type = 'number';
        amountInput.name = `amounts[${digit}]`;
        amountInput.id = `amount_${digit}`;
        amountInput.placeholder = `Amount for ${digit}`;
        amountInput.value = '100'; // Set a default value or retrieve the existing value
        amountInput.classList.add('form-control', 'mt-2');
        amountInput.onchange = updateTotalAmount;
        amountInputsDiv.appendChild(amountInput);
        });

        updateTotalAmount(); // Update the total amount to reflect changes
    }


    function checkBetAmount(inputElement, num) {
        // Replace the problematic line with the following code
        const digits = document.querySelectorAll('.digit');
        let digitElement = null;

        for (let i = 0; i < digits.length; i++) {
        if (digits[i].textContent.includes(num)) {
            digitElement = digits[i];
            break;
        }
        }

        // Ensure that the digitElement was found before proceeding
        if (!digitElement) {
        console.error('Could not find the digit element for', num);
        return;
        }

        // Continue with the rest of your function as before
        const remainingAmount = Number(digitElement.querySelector('small').innerText.split(' ')[1]);

        // Check if the entered bet amount exceeds the remaining amount
        if (Number(inputElement.value) > remainingAmount) {
        Swal.fire({
            icon: 'error',
            title: 'Bet Limit Exceeded',
            text: `You can only bet up to ${remainingAmount} for the digit ${num}.`
        });
        inputElement.value = ""; // Reset the input value
        }
    }

    function setAmountForAllDigits(amount) {
        const inputs = document.querySelectorAll('input[name^="amounts["]');
        inputs.forEach(input => {
        input.value = amount;
        });
        updateTotalAmount(); // Update the total amount after setting the new amounts
    }

  // Event listener for the amount input field
  document.getElementById('all_amount').addEventListener('input', function() {
    const amount = this.value; // Get the current value of the input field
    setAmountForAllDigits(amount); // Set this amount for all digit inputs
  });
  // New function to calculate and display the total amount
  function updateTotalAmount() {
    let total = 0;
    const inputs = document.querySelectorAll('input[name^="amounts["]');
    inputs.forEach(input => {
      total += Number(input.value);
    });

    // Get the user's current balance from the data attribute
    const userBalanceSpan = document.getElementById('userBalance');
    let userBalance = Number(userBalanceSpan.getAttribute('data-balance'));

    // Check if user balance is less than total amount
    if (userBalance < total) {
      //alert('Your balance is not enough to play two digit.');
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Your balance is not enough to play two digit. - သင်၏လက်ကျန်ငွေ မလုံလောက်ပါ - ကျေးဇူးပြု၍ ငွေဖြည့်ပါ။',
        footer: `<a href=
         "{{ url('user/wallet-deposite') }}" style="background-color: #007BFF; color: #FFFFFF; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Fill Balance - ငွေဖြည့်သွင်းရန် နိုပ်ပါ </a>`
      });
      return; // Exit the function to prevent further changes
    }
    // Decrease the user balance by the total
    userBalance -= total;

    // Update the displayed balance and the data attribute
    userBalanceSpan.textContent = userBalance;
    userBalanceSpan.setAttribute('data-balance', userBalance);

    document.getElementById('totalAmount').value = total;
  }

</script>
<script>
  function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
      color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
  }

  document.querySelectorAll('.digit.disabled').forEach(el => {
    el.style.backgroundColor = getRandomColor();
  });
</script>
@endsection
