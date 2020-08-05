<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url();?>assets/assets/images/favicon.png">
    <title>Organic Roots | Login</title>
    <!-- Custom CSS -->
    <link href="<?=base_url();?>assets/dist/css/style.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/dist/css/custom.css" rel="stylesheet">
    <!-- <script src="<?=base_url();?>assets/jQuery/jquery-2.2.3.min.js"></script> -->
    <script src="<?=base_url();?>assets/jquery/lib/jquery.js"></script>
    <script src="<?=base_url();?>assets/plugins/jQueryUI/jquery-ui.js"></script> 
    <script src="<?=base_url();?>assets/plugins/validate/jquery.validate.js"></script>
    <link href="<?=base_url();?>assets/plugins/jQueryUI/jquery-ui.css" rel="Stylesheet"></link>

    
    

</head>

<body>
    <div class="overlay"></div>
    <div class="main-wrapper" >
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="<?=base_url()?>assets/assets/images/logo.png" alt="logo" /></span>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal m-t-20" id="login-form" action="javascript:;" method="post">
                        <div class="row p-b-30">
                            
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert"  style="display: none;"  >
                                    <?=@$_SESSION['error_msg'];?>
                                </div>
                                <div class="alert alert-success" role="alert" style="display: none;"></div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="email" class="form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username">

                                </div>
                                <span class="username-error error"></span>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1"  name="password">
                                </div>
                                <span class="password-error error"></span>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Lost password?</button>
                                        <button class="btn btn-success float-right" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="recoverform">
                    <div class="alert alert-success" role="alert" style="display: none;">
                    </div>
                    <div class="alert alert-danger" role="alert" style="display: none;">
                    </div>
                    <div class="text-center">
                        <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                    </div>

                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" action="javascript:;" id="forgot-form">
                            <!-- email -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" name="email">
                            </div>
                            <span class="email-error error"></span>
                            <!-- pwd -->
                            <div class="row m-t-20 p-t-20 border-top border-secondary">
                                <div class="col-12">
                                    <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                                    <button class="btn btn-info float-right" type="submit" name="action">Recover</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <!-- <script src="<?=base_url();?>assets/jquery/lib/jquery.js"></script> -->
    <!-- <script src="<?=base_url();?>assets/jquery/dist/jquery.validate.js"></script> -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url();?>assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?=base_url();?>assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){
        
        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            

            $('#login-form').validate({ // initialize the plugin
                rules: {
                    username: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    username: {
                        required: "Username is required",
                        
                    },
                    password: {
                        required: "Password is required",
                        
                    }
                },
                errorPlacement: function(error, element) {
                  var name = element.attr("name");
                  
                  if (name =='username') {
                      $('.username-error').append(error)
                  } else if( name =='password') {
                    $('.password-error').append(error);
                  }
                },
                submitHandler: function(form,e) {
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: 'login',
                        data: $('#login-form').serialize(),
                        dataType: "json",
                        success: function(result) {
                            console.log(result);
                            if(result.status == 'success'){
                                $('.alert-success').html(result.message);
                                $('.alert-success').show();
                                $('.alert-danger').hide();
                                // console.log(result.redirect_ulr);
                                window.location.href=result.redirect_ulr;
                            }else if(result.status == 'error'){
                                $('.alert-danger').html(result.message);
                                $('.alert-danger').show();
                                $('.alert-success').hide();
                            }
                        },
                        error : function(error) {
                           console.log(error.responseJSON);
                           var result=error.responseJSON;
                           if(result.status == 'success'){
                                $('.alert-success').html(result.message);
                                $('.alert-success').show();
                                $('.alert-danger').hide();
                                // console.log(result.redirect_ulr);
                                window.location.href=result.redirect_ulr;
                            }else if(result.status == 'error'){
                                $('.alert-danger').html(result.message);
                                $('.alert-danger').show();
                                $('.alert-success').hide();
                            } 
                        }
                    });
                    return false;
                }
            });
            $('#forgot-form').validate({ // initialize the plugin
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    
                },
                messages: {
                    email: {
                        required: "Email is required",
                        
                    }
                   
                },
                errorPlacement: function(error, element) {
                  var name = element.attr("name");
                  
                  if (name =='email') {
                      $('.email-error').append(error)
                  } 
                },
                submitHandler: function(form,e) {
                    e.preventDefault();
                    $.ajax({
                        type: 'POST',
                        url: 'forgot-password',
                        dataType: "json",
                        data: $('#forgot-form').serialize(),
                        beforeSend: function() {
                            $("body").addClass("loading");
                        },
                        success: function(result) {
                            $("body").removeClass("loading");
                            if(result.status=='success'){
                                $('.alert-success').html(result.message);
                                $('.alert-success').show();
                                $('.alert-danger').hide();
                                
                                setTimeout(function(){ 
                                location.reload();
                                 }, 3000);
                            }else{
                                $('.alert-danger').html(result.message);
                                $('.alert-danger').show();
                                $('.alert-success').hide();
                                $('.loader').hide();
                                //alert(result.message);
                            }
                        },
                        error : function(error) {
                            $("body").removeClass("loading");
                             var result=error.responseJSON;
                            if(result.status=='success'){
                                $('.alert-success').html(result.message);
                                $('.alert-success').show();
                                $('.alert-danger').hide();
                                $('.loader').hide();
                                setTimeout(function(){ 
                                location.reload();
                                 }, 3000);
                            }else{
                                $('.alert-danger').html(result.message);
                                $('.alert-danger').show();
                                $('.alert-success').hide();
                                $('.loader').hide();
                                //alert(result.message);
                            }
                        }
                    });
                    return false;
                }
            });

        });
    </script>

</body>

</html>