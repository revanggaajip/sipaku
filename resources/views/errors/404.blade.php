
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>404 &mdash; {{config('app.name')}}</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/admin/css/components.css')}}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="page-error">
          <div class="page-inner">
            <h1>404</h1>
            <div class="page-description">
              Halaman yang anda cari tidak tersedia
            </div>
            <div class="page-search">
              {{-- <form>
                <div class="form-group floating-addon floating-addon-not-append">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-search"></i>
                      </div>
                    </div>
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-lg">
                        Search
                      </button>
                    </div>
                  </div>
                </div>
              </form> --}}
              <div class="mt-3">
                <a href="{{route('admin.dashboard')}}">Kembali</a>
              </div>
            </div>
          </div>
        </div>
        <div class="simple-footer mt-5">
          Copyright &copy; {{config('app.name')}}
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/popper/popper.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/vendor/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{asset('assets/vendor/moment/moment.min.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{asset('assets/admin/js/stisla.js')}}"></script>
  <script src="{{asset('assets/admin/js/scripts.js')}}"></script>
  <script src="{{asset('assets/admin/js/custom.js')}}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
