<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{url('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{url('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                    @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" enctype="multipart/form-data" action="{{url('admin/cliente')}}">
                        @csrf
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre completo <span class="text-danger">*</span></th>
                                    <td><input type="text" name="full_name" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Correo Electronico <span class="text-danger">*</span></th>
                                    <td><input type="email" name="email" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Contraseña <span class="text-danger">*</span></th>
                                    <td><input type="password" name="password" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Celular <span class="text-danger">*</span></th>
                                    <td><input type="text" name="mobile" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Foto</th>
                                    <td><input type="file" name="photo"></td>
                                </tr>
                                <tr>
                                    <th>Dirección</th>
                                    <td><textarea name="address" class="form-control"></textarea></td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" class="btn btn-primary">
                                    </td>
                                </tr>
                            </thead>
                        </table>
                    </form>
                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{url('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{url('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>