<div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
  <ul class="navbar-nav">
    <li class="nav-item mb-2 mt-0">
      <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
        <img src="{{ Auth::user()->profile }}" class="avatar">
        <span class="nav-link-text ms-2 ps-1">{{ Auth::user()->name }}</span>
      </a>
      <div class="collapse" id="ProfileNav">
        <ul class="nav ">
          @can('user_access')
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('admin.profiles.index') }}">
              <span class="sidenav-mini-icon"> MP </span>
              <span class="sidenav-normal  ms-3  ps-1"> My Profile </span>
            </a>
          </li>
          @endcan
          {{-- <li class="nav-item">
            <a class="nav-link text-white " href="../../pages/pages/profile/teams.html">
              <span class="sidenav-mini-icon"> T </span>
              <span class="sidenav-normal  ms-3  ps-1"> Teams </span>
            </a>
          {{-- <li class="nav-item">
            <a class="nav-link text-white " href="../../pages/pages/account/settings.html">
              <span class="sidenav-mini-icon"> S </span>
              <span class="sidenav-normal  ms-3  ps-1"> Settings </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white " href="../../pages/authentication/signin/basic.html">
              <span class="sidenav-mini-icon"> L </span>
              <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
            </a>
          </li> --}}
        </ul>
      </div>
    </li>
    <hr class="horizontal light mt-0">
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link text-white " aria-controls="dashboardsExamples" role="button" aria-expanded="false">
        <i class="material-icons-round opacity-10">dashboard</i>
        <span class="nav-link-text ms-2 ps-1">Dashboards</span>
      </a>
      <div class="collapse " id="dashboardsExamples">
        <ul class="nav ">
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.banners.index') }}">
              <span class="sidenav-mini-icon"> B </span>
              <span class="sidenav-normal  ms-2  ps-1"> Banner </span>
            </a>
          </li>
          @endcan
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.promotions.index') }}">
              <span class="sidenav-mini-icon"> P </span>
              <span class="sidenav-normal  ms-2  ps-1"> Promotions </span>
            </a>
          </li>
          {{-- <li class="nav-item ">
            <a class="nav-link text-white " href="../../pages/dashboards/discover.html">
              <span class="sidenav-mini-icon"> D </span>
              <span class="sidenav-normal  ms-2  ps-1"> Discover </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="../../pages/dashboards/sales.html">
              <span class="sidenav-mini-icon"> S </span>
              <span class="sidenav-normal  ms-2  ps-1"> Sales </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="../../pages/dashboards/automotive.html">
              <span class="sidenav-mini-icon"> A </span>
              <span class="sidenav-normal  ms-2  ps-1"> Automotive </span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link text-white " href="../../pages/dashboards/smart-home.html">
              <span class="sidenav-mini-icon"> S </span>
              <span class="sidenav-normal  ms-2  ps-1"> Smart Home </span>
            </a>
          </li> --}}
        </ul>
      </div>
    </li>
    <li class="nav-item mt-3">
      <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">UserManagement</h6>
    </li>
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white active" aria-controls="pagesExamples" role="button" aria-expanded="false">
        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">manage_accounts</i>
        <span class="nav-link-text ms-2 ps-1">UserManagement</span>
      </a>
      <div class="collapse  show " id="pagesExamples">
        <ul class="nav ">
          <li class="nav-item ">
            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#profileExample">
              <span class="sidenav-mini-icon"> UM </span>
              <span class="sidenav-normal  ms-2  ps-1"> UserManagement <b class="caret"></b></span>
            </a>
            <div class="collapse " id="profileExample">
              <ul class="nav nav-sm flex-column">
                {{-- @can('user_access')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.permissions.index')}}">
                    <span class="sidenav-mini-icon"> P </span>
                    <span class="sidenav-normal  ms-2  ps-1"> Permissions </span>
                  </a>
                </li>
                @endcan --}}
                {{-- @can('user_access')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.roles.index') }}">
                    <span class="sidenav-mini-icon"> U R </span>
                    <span class="sidenav-normal  ms-2  ps-1"> User's Roles </span>
                  </a>
                </li> 
                @endcan --}}
                @can('user_access')
                <li class="nav-item">
                  <a class="nav-link text-white " href="{{ route('admin.users.index')}}">
                    <span class="sidenav-mini-icon"> U </span>
                    <span class="sidenav-normal  ms-2  ps-1"> ထိုးသားများထိန်းချုပ်ရန် </span>
                  </a>
                </li>
                @endcan
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item ">
      <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
       <span class="sidenav-mini-icon"> U </span>
       <span class="sidenav-normal  ms-2  ps-1"> Users <b class="caret"></b></span>
      </a>
      <div class="collapse " id="usersExample">
       <ul class="nav nav-sm flex-column">
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/users/reports.html">
          <span class="sidenav-mini-icon"> R </span>
          <span class="sidenav-normal  ms-2  ps-1"> Reports </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/users/new-user.html">
          <span class="sidenav-mini-icon"> N </span>
          <span class="sidenav-normal  ms-2  ps-1"> New User </span>
         </a>
        </li>
       </ul>
      </div>
     </li> -->
          <!-- <li class="nav-item ">
      <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#accountExample">
       <span class="sidenav-mini-icon"> A </span>
       <span class="sidenav-normal  ms-2  ps-1"> Account <b class="caret"></b></span>
      </a>
      <div class="collapse " id="accountExample">
       <ul class="nav nav-sm flex-column">
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/account/settings.html">
          <span class="sidenav-mini-icon"> S </span>
          <span class="sidenav-normal  ms-2  ps-1"> Settings </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/account/billing.html">
          <span class="sidenav-mini-icon"> B </span>
          <span class="sidenav-normal  ms-2  ps-1"> Billing </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/account/invoice.html">
          <span class="sidenav-mini-icon"> I </span>
          <span class="sidenav-normal  ms-2  ps-1"> Invoice </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/account/security.html">
          <span class="sidenav-mini-icon"> S </span>
          <span class="sidenav-normal  ms-2  ps-1"> Security </span>
         </a>
        </li>
       </ul>
      </div>
     </li>
     <li class="nav-item ">
      <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#projectsExample">
       <span class="sidenav-mini-icon"> P </span>
       <span class="sidenav-normal  ms-2  ps-1"> Projects <b class="caret"></b></span>
      </a>
      <div class="collapse " id="projectsExample">
       <ul class="nav nav-sm flex-column">
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/projects/general.html">
          <span class="sidenav-mini-icon"> G </span>
          <span class="sidenav-normal  ms-2  ps-1"> General </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/projects/timeline.html">
          <span class="sidenav-mini-icon"> T </span>
          <span class="sidenav-normal  ms-2  ps-1"> Timeline </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/projects/new-project.html">
          <span class="sidenav-mini-icon"> N </span>
          <span class="sidenav-normal  ms-2  ps-1"> New Project </span>
         </a>
        </li>
       </ul>
      </div>
     </li>
     <li class="nav-item ">
      <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#vrExamples">
       <span class="sidenav-mini-icon"> V </span>
       <span class="sidenav-normal  ms-2  ps-1"> Virtual Reality <b class="caret"></b></span>
      </a>
      <div class="collapse " id="vrExamples">
       <ul class="nav nav-sm flex-column">
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/vr/vr-default.html">
          <span class="sidenav-mini-icon"> V </span>
          <span class="sidenav-normal  ms-2  ps-1"> VR Default </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/pages/vr/vr-info.html">
          <span class="sidenav-mini-icon"> V </span>
          <span class="sidenav-normal  ms-2  ps-1"> VR Info </span>
         </a>
        </li>
       </ul>
      </div>
     </li>
     <li class="nav-item ">
      <a class="nav-link text-white " href="../../pages/pages/pricing-page.html">
       <span class="sidenav-mini-icon"> P </span>
       <span class="sidenav-normal  ms-2  ps-1"> Pricing Page </span>
      </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link text-white " href="../../pages/pages/rtl-page.html">
       <span class="sidenav-mini-icon"> R </span>
       <span class="sidenav-normal  ms-2  ps-1"> RTL </span>
      </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link text-white " href="../../pages/pages/widgets.html">
       <span class="sidenav-mini-icon"> W </span>
       <span class="sidenav-normal  ms-2  ps-1"> Widgets </span>
      </a>
     </li>
     <li class="nav-item active">
      <a class="nav-link text-white active" href="../../pages/pages/charts.html">
       <span class="sidenav-mini-icon"> C </span>
       <span class="sidenav-normal  ms-2  ps-1"> Charts </span>
      </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link text-white " href="../../pages/pages/sweet-alerts.html">
       <span class="sidenav-mini-icon"> S </span>
       <span class="sidenav-normal  ms-2  ps-1"> Sweet Alerts </span>
      </a>
     </li>
     <li class="nav-item ">
      <a class="nav-link text-white " href="../../pages/pages/notifications.html">
       <span class="sidenav-mini-icon"> N </span>
       <span class="sidenav-normal  ms-2  ps-1"> Notifications </span>
      </a>
     </li> -->
        </ul>
      </div>
    </li>
    {{-- lottery --}}
    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white " aria-controls="applicationsExamples" role="button" aria-expanded="false">
        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i>
        <span class="nav-link-text ms-2 ps-1">2D Management</span>
      </a>
      <div class="collapse " id="applicationsExamples">
        <ul class="nav ">
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.two-d-users-index')}}">
              <span class="sidenav-mini-icon"> 2D | U </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D ထိုးသားများ </span>
            </a>
          </li>
          @endcan
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.twod-records.index')}}">
              <span class="sidenav-mini-icon"> 2D | H </span>
              <span class="sidenav-normal  ms-2  ps-1"> တလအတွင်းထိုးထားသောစာရင်း </span>
            </a>
          </li>
          @endcan
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.tow-d-win-number.index') }}">
              <span class="sidenav-mini-icon"> K </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D ပေါက်ဂဏန်းထဲ့ရန် </span>
            </a>
          </li>
          @endcan
          {{-- @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ url('admin/get-two-d-early-morning-number') }}">
              <span class="sidenav-mini-icon"> MS </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D (9:30) MorningSession </span>
            </a>
          </li>
          @endcan --}}
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.tow-d-morning-number.index') }}">
              <span class="sidenav-mini-icon"> MS </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D (12:1) MorningSession </span>
            </a>
          </li>
          @endcan
          {{-- @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ url('admin/two-d-early-morning-winner') }}">
              <span class="sidenav-mini-icon"> EMW </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D (9:30) MorningWinner </span>
            </a>
          </li>
          @endcan --}}
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.morningWinner') }}">
              <span class="sidenav-mini-icon"> MW </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D (12:) MorningWinner </span>
            </a>
          </li>
          @endcan
          {{-- @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ url('admin/get-two-d-early-evening-number') }}">
              <span class="sidenav-mini-icon"> ES </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D (2:30) EveningSession </span>
            </a>
          </li>
          @endcan --}}
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.eveningNumber') }}">
              <span class="sidenav-mini-icon"> ES </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D (4:30) EveningSession </span>
            </a>
          </li>
          @endcan
          {{-- @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ url('admin/two-d-early-evening-winner') }}">
              <span class="sidenav-mini-icon"> EW </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D (2:30) EveningWinner </span>
            </a>
          </li>
          @endcan --}}
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.eveningWinner') }}">
              <span class="sidenav-mini-icon"> EW </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D (4:30) EveningWinner </span>
            </a>
          </li>
          @endcan
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.fill-balance-replies.index') }}">
              <span class="sidenav-mini-icon"> V </span>
              <span class="sidenav-normal  ms-2  ps-1"> ငွေးသွင်းစာရင်း </span>
            </a>
          </li>
          @endcan
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.withdrawViewGet') }}">
              <span class="sidenav-mini-icon"> BW </span>
              <span class="sidenav-normal  ms-2  ps-1"> ငွေထုတ်စာရင်း </span>
            </a>
          </li>
          @endcan
          @can('user_access')
           <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.CloseTwoD') }}">
              <span class="sidenav-mini-icon"> C </span>
              <span class="sidenav-normal  ms-2  ps-1"> 2D ပိတ်ရန် </span>
            </a>
          </li>
          @endcan
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.SessionResetIndex') }}">
              <span class="sidenav-mini-icon"> S </span>
              <span class="sidenav-normal  ms-2  ps-1"> SessionReset</span>
            </a>
          </li>
          @endcan
          @can('user_access')
          <li class="nav-item ">
            <a class="nav-link text-white " href="{{ route('admin.two-d-play-noti') }}">
              <span class="sidenav-mini-icon"> N </span>
              <span class="sidenav-normal  ms-2  ps-1"> Notifications</span>
            </a>
          </li>
          @endcan
        </ul>
      </div>
    </li>
    {{-- end lottery --}}

    {{-- 2d over amount limit --}}

<li class="nav-item">
   <a data-bs-toggle="collapse" href="#ecommerceExamplesOver" class="nav-link text-white " aria-controls="ecommerceExamplesOver"
    role="button" aria-expanded="false">
    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">shopping_basket</i>
    <span class="nav-link-text ms-2 ps-1">2D OverLimit</span>
   </a>
   <div class="collapse " id="ecommerceExamplesOver">
    <ul class="nav ">
     <li class="nav-item ">
      <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
       <span class="sidenav-mini-icon"> P </span>
       <span class="sidenav-normal  ms-2  ps-1"> 2D Over AmountLimit <b class="caret"></b></span>
      </a>
      <div class="collapse " id="productsExample">
       <ul class="nav nav-sm flex-column">
        {{-- <li class="nav-item">
         <a class="nav-link text-white " href="{{ url('admin/get-two-d-early-morning-number-over-amount-limit')}}">
          <span class="sidenav-mini-icon"> 2D </span>
          <span class="sidenav-normal  ms-2  ps-1"> 9:30 OverLimit </span>
         </a>
        </li> --}}
        <li class="nav-item">
         <a class="nav-link text-white " href="{{ url('admin/get-two-d-morning-number-over-amount-limit') }}">
          <span class="sidenav-mini-icon"> 2D </span>
          <span class="sidenav-normal  ms-2  ps-1"> 12:1 OverLimit </span>
         </a>
        </li>
        {{-- <li class="nav-item">
         <a class="nav-link text-white " href="{{ url('admin/get-two-d-early-evening-number-over-amount-limit')}}">
          <span class="sidenav-mini-icon"> 2D </span>
          <span class="sidenav-normal  ms-2  ps-1"> 2 : OverLimit </span>
         </a>
        </li> --}}
        <li class="nav-item">
         <a class="nav-link text-white " href="{{ url('admin/get-two-d-evening-number-over-amount-limit') }}">
          <span class="sidenav-mini-icon"> 2D </span>
          <span class="sidenav-normal  ms-2  ps-1">4:30 OverLimit </span>
         </a>
        </li>
       </ul>
      </div>
     </li>
     {{-- <li class="nav-item ">
      <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#ordersExample">
       <span class="sidenav-mini-icon"> O </span>
       <span class="sidenav-normal  ms-2  ps-1"> Orders <b class="caret"></b></span>
      </a>
      <div class="collapse " id="ordersExample">
       <ul class="nav nav-sm flex-column">
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/ecommerce/orders/list.html">
          <span class="sidenav-mini-icon"> O </span>
          <span class="sidenav-normal  ms-2  ps-1"> Order List </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/ecommerce/orders/details.html">
          <span class="sidenav-mini-icon"> O </span>
          <span class="sidenav-normal  ms-2  ps-1"> Order Details </span>
         </a>
        </li>
       </ul>
      </div>
     </li>
     <li class="nav-item ">
      <a class="nav-link text-white " href="../../pages/ecommerce/referral.html">
       <span class="sidenav-mini-icon"> R </span>
       <span class="sidenav-normal  ms-2  ps-1"> Referral </span>
      </a>
     </li> --}}
    </ul>
   </div>
  </li>
    {{-- 2d over amount limit --}}

  <li class="nav-item">
   <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-white " aria-controls="ecommerceExamples"
    role="button" aria-expanded="false">
    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">shopping_basket</i>
    <span class="nav-link-text ms-2 ps-1">3D</span>
   </a>
   <div class="collapse " id="ecommerceExamples">
    <ul class="nav ">
     <li class="nav-item ">
      <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
       <span class="sidenav-mini-icon"> P </span>
       <span class="sidenav-normal  ms-2  ps-1"> ThreeDManagement <b class="caret"></b></span>
      </a>
      <div class="collapse " id="productsExample">
       <ul class="nav nav-sm flex-column">
        <li class="nav-item">
         <a class="nav-link text-white " href="{{ url('admin/three-d-history')}}">
          <span class="sidenav-mini-icon"> 3D H </span>
          <span class="sidenav-normal  ms-2  ps-1"> 3D ထိုးထားသောစာရင်း </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="{{ url('admin/threed-lotteries-match-time') }}">
          <span class="sidenav-mini-icon"> OD </span>
          <span class="sidenav-normal  ms-2  ps-1"> 3D ဖွင့်ရက် </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="{{ url('/admin/three-d-prize-number-create') }}">
          <span class="sidenav-mini-icon"> 3D </span>
          <span class="sidenav-normal  ms-2  ps-1"> 3D ပေါက်ဂဏန်းထဲ့ရန် </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="{{ url('/admin/three-d-list-index') }}">
          <span class="sidenav-mini-icon"> 3D </span>
          <span class="sidenav-normal  ms-2  ps-1">  3D တပါတ်အတွင်းထိုးထားသောစာရင်း </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="{{ url('/admin/three-d-winner') }}">
          <span class="sidenav-mini-icon"> 3D </span>
          <span class="sidenav-normal  ms-2  ps-1">  3D ပေါက်သူများစာရင်း </span>
         </a>
        </li>
       </ul>
      </div>
     </li>
     {{-- <li class="nav-item ">
      <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#ordersExample">
       <span class="sidenav-mini-icon"> O </span>
       <span class="sidenav-normal  ms-2  ps-1"> Orders <b class="caret"></b></span>
      </a>
      <div class="collapse " id="ordersExample">
       <ul class="nav nav-sm flex-column">
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/ecommerce/orders/list.html">
          <span class="sidenav-mini-icon"> O </span>
          <span class="sidenav-normal  ms-2  ps-1"> Order List </span>
         </a>
        </li>
        <li class="nav-item">
         <a class="nav-link text-white " href="../../pages/ecommerce/orders/details.html">
          <span class="sidenav-mini-icon"> O </span>
          <span class="sidenav-normal  ms-2  ps-1"> Order Details </span>
         </a>
        </li>
       </ul>
      </div>
     </li>
     <li class="nav-item ">
      <a class="nav-link text-white " href="../../pages/ecommerce/referral.html">
       <span class="sidenav-mini-icon"> R </span>
       <span class="sidenav-normal  ms-2  ps-1"> Referral </span>
      </a>
     </li> --}}
    </ul>
   </div>
  </li>

    <li class="nav-item">
      <a data-bs-toggle="collapse" href="#authExamples" class="nav-link text-white " aria-controls="authExamples" role="button" aria-expanded="false">
        <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">content_paste</i>
        <span class="nav-link-text ms-2 ps-1">Authentication</span>
      </a>
      <div class="collapse " id="authExamples">
        <ul class="nav ">
          <li class="nav-item ">
            <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#signinExample">
              <span class="sidenav-mini-icon"> S </span>
              <span class="sidenav-normal  ms-2  ps-1"> Account Logout <b class="caret"></b></span>
            </a>
            <div class="collapse " id="signinExample">
              <ul class="nav nav-sm flex-column">

                <li class="nav-item">
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-white">
                    <span class="sidenav-mini-icon"> L </span>
                    <span class="sidenav-normal ms-2 ps-1">Logout</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>

                </li>


              </ul>
            </div>
          </li>

        </ul>
      </div>
