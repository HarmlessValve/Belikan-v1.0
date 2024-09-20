<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Signup</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" style="background-image: url('bg-admin.png'); background-size: cover;">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="logo.png" width="180" alt="Logo">
                </a>
                <!-- Form signup -->
                <form action="{{ route('admin.signup') }}" method="POST">
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">
                      <h5>Nama</h5>
                    </label>
                    <input type="text" class="form-control" id="name" name="nama" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">
                      <h5>Alamat Email</h5>
                    </label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">
                      <h5>Password</h5>
                    </label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                  <div class="mb-4">
                    <label for="password_confirmation" class="form-label">
                      <h5>Konfirmasi Password</h5>
                    </label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                  </div>
                  <button type="submit" class="btn btn-danger w-100 py-8 fs-4 mb-3 rounded-2">
                    <h4>Sign Up</h4>
                  </button>
                  <a href="{{ url('/admin-login') }}" class="btn btn-danger w-100 py-8 fs-4 mb-2 rounded-2">
                    <h4>Kembali</h4>
                  </a>
                </form
                  @if(Session::has('success'))
                  <div class="alert alert-success mt-3">{{ Session::get('success') }}
              </div>
              @endif
              @if ($errors->any())
              <div class="alert alert-danger mt-3">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>