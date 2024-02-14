<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KL 2D|3D</title>
    <link rel="stylesheet" href="{{ asset('user_app/assets/css/style.css') }}" />
    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="icon" href="{{ asset('user_app/assets/images/kl_logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Inline+One&family=Inter&family=Poppins:wght@300;400;500&family=Rubik+Mono+One&display=swap" rel="stylesheet">

    <!-- Material Css -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/material-icons@1.13.12/iconfont/material-icons.min.css"
    />

    @yield('style')

    <!-- font awesome  -->
    <script src="https://kit.fontawesome.com/b829c5162c.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container-fluid">
       <!-- nav section -->
        <div class="row">
            <div class="col-lg-4 col-md-4 offset-lg-4 offset-md-4 navs fixed-top">
            <div class="px-1 py-2" style="height: 70px;">


                @include('frontend.layouts.navbar')

            </div>
            </div>
        </div>
        <!-- nav section -->

        <!-- content section -->
        @yield('content')

        <!-- content section -->

        <!-- footer section -->

        <!-- footer section -->

      </div>
    </div>


  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
  ></script>
  <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  @yield('script')
  @if (Session::has('error'))
  <script>
      Toastify({
          text:"{{Session::get('error')}}",
          className:"text-white",
          style: {
              background: "#ff0000",
          },
          position:'center'
      }).showToast();
  </script>
@endif
@if (Session::has('success'))
  <script>
      Toastify({
          text:"{{Session::get('success')}}",
          className:"text-white",
          style: {
              background: "#38d100",
          },
          position:'center'
      }).showToast();
  </script>
@endif
<script>
  function goBack() {
    window.history.back();
  }

  function refreshPage() {
    location.reload();
  }
</script>
</html>
