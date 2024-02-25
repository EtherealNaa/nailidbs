<!--
=========================================================
* Material Dashboard 2 - v3.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2021 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <title>
      RS Naili DBS | Administrator
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('template/backend-2/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('template/backend-2/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('template/backend-2/assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" /> --}}
  </head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-warning shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Login</h4>
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Naili Administrator</h4>
                  <div class="row mt-3">
                  </div>
                </div>
            </div>
            <div class="card-body">
                    @if (session()->has('success')) 
                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                      <span class="text-sm">{{ session('success') }}</span>
                      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif

                    @if (session()->has('loginError')) 
                    <div class="alert alert-danger alert-dismissible text-white" role="alert">
                      <span class="text-sm">{{ session('loginError') }}</span>
                      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    @endif
                <form role="form" class="text-start" action="/naili-administrator/login" method="post">
                    @csrf
                    <label class="form-label" for="username">Username</label>
                    @error('username')
                        <p class="text-danger form-label">{{ $message }}</p>
                    @enderror
                  <div class="input-group input-group-outline mb-1">
                    <input type="text" name="username" class="form-control" id="username" required value="{{ old('username') }}">
                  </div>
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-outline">
                    <input type="password" name="password" class="form-control" id="password" required>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-warning w-100 my-4 mb-2">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('template/backend-2/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('template/backend-2/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template/backend-2/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('template/backend-2/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('template/backend-2/assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
</body>

</html>