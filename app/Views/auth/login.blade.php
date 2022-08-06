<!DOCTYPE html>
<html lang="en" class="coming-soon">

<head>
    <meta charset="utf-8">
    <title>SIM SEKOLAH</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="KaijuThemes">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'
        type='text/css'>
    <link type="text/css" href="{{ base_url }}assets/template/assets/plugins/iCheck/skins/minimal/blue.css"
        rel="stylesheet">
    <link type="text/css" href="{{ base_url }}assets/template/assets/fonts/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">
    <link type="text/css" href="{{ base_url }}assets/template/assets/fonts/themify-icons/themify-icons.css"
        rel="stylesheet"> <!-- Themify Icons -->
    <link type="text/css" href="{{ base_url }}assets/template/assets/css/styles.css" rel="stylesheet">

</head>

<body class="focused-form animated-content">


    <div class="container" id="login-form">
        <form class="form-horizontal" id="validate-form">
            <a href="#" class="login-logo">SIM SEKOLAH</a>
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h2>Login Form</h2>
                        </div>
                        <div class="panel-body">
                            <div class="form-group mb-md">
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ti ti-user"></i>
                                        </span>
                                        <input type="email" class="form-control" placeholder="Email" id="email"
                                            placeholder="At least 6 characters" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mb-md">
                                <div class="col-xs-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="ti ti-key"></i>
                                        </span>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            username = admin@admin.com <br>
                            password = Cimahi123

                            {{-- <div class="form-group mb-n">
                                <div class="col-xs-12">
                                    <a href="extras-forgotpassword.html" class="pull-left">Forgot password?</a>
                                    <div class="checkbox-inline icheck pull-right p-n">
                                        <label for="">
                                            <input type="checkbox"></input>
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="panel-footer">
                            <div class="clearfix">
                                {{-- <a href="extras-registration.html" class="btn btn-default pull-left">Register</a> --}}
                                <button type="submit" class="btn btn-primary pull-right">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <!-- Load site level scripts -->

    <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/jquery-1.10.2.min.js"></script> <!-- Load jQuery -->
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/jqueryui-1.10.3.min.js"></script> <!-- Load jQueryUI -->
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/bootstrap.min.js"></script> <!-- Load Bootstrap -->
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/enquire.min.js"></script> <!-- Load Enquire -->

    <script type="text/javascript" src="{{ base_url }}assets/template/assets/plugins/velocityjs/velocity.min.js">
    </script> <!-- Load Velocity for Animated Content -->
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/plugins/velocityjs/velocity.ui.min.js">
    </script>

    <script type="text/javascript" src="{{ base_url }}assets/template/assets/plugins/wijets/wijets.js"></script> <!-- Wijet -->

    <script type="text/javascript" src="{{ base_url }}assets/template/assets/plugins/codeprettifier/prettify.js">
    </script> <!-- Code Prettifier  -->
    <script type="text/javascript"
        src="{{ base_url }}assets/template/assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> <!-- Swith/Toggle Button -->

    <script type="text/javascript"
        src="{{ base_url }}assets/template/assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script> <!-- Bootstrap Tabdrop -->

    <script type="text/javascript"
        src="{{ base_url }}assets/template/assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->
    <script type="text/javascript" src="{{ base_url }}assets/template/assets/js/application.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- End loading site level scripts -->
    <!-- Load page level scripts-->
    <script>
        $('#validate-form').submit(ev => {
            ev.preventDefault()

            let email = $('#email').val()
            let password = $('#password').val()

            $.ajax({
                method: 'post',
                url: '{{ base_url }}doLogin',
                data: {
                    email: email,
                    password: password
                },
                success(data) {
                    data = JSON.parse(data)
                    if (data.status > 0) {
                        toastr.success(`Selamat datang ${data.data.name}`, 'Login Success')

                        setTimeout(() => {
                            location.href = '{{ base_url }}'
                        }, 1000);
                    } else {
                        toastr.warning(data.message, 'Login Failure')
                    }
                }
            })
        })
    </script>

    <!-- End loading page level scripts-->
</body>

</html>
