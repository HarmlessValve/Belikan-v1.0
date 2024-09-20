<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="page-wrapper" id="main-wrapper" style="background-image: url('bg-admin.png'); background-size: cover;">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="logo.png" width="180" alt="">
                </a>
                <form action="{{ route('actionlogin') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label">
                      <h5>Email</h5>
                    </label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">
                      <h5>Password</h5>
                    </label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                  <button type="submit" class="btn btn-danger w-100 py-8 fs-4 mb-3 rounded-2">
                    <h4>Masuk</h4>
                  </button>
                  <a href="{{ route('admin.signup') }}" class="btn btn-danger w-100 py-8 fs-4 mb-2 rounded-2">
                    <h4>Daftar</h4>
                  </a>
                </form>
                @if (Session::has('error'))
                <div class="alert alert-danger mt-3">{{ Session::get('error') }}</div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>