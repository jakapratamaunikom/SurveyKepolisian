<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Halaman Login Sistem Survey Kepuasan Pelanggan</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets_login/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets_login/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets_login/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets_login/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body style="background-repeat: no-repeat;">

        <!-- Top content -->
        <div class="top-content">
        	
            <!-- <div class="inner-bg"> -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <!-- <h1><strong>Bootstrap</strong> -->
                            <h1> Sistem Informasi Survey Kepuasan Pelanggan</h1>
                            <!-- <div class="description"> -->
                            	<p>
	                            	Survey Kepuasan Pelanggan Terhadap Kepolisian pada Arus Mudik dan Arus Balik
	                            	<!-- Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like! -->
                            	</p>
                            <!-- </div> -->
                        </div>
                    </div>

                    <div class="row" >
                        <div class="col-sm-6 col-sm-offset-3 form-box" style="margin-top: px;">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>GET SOLUTION</h3>
                            		<p>Enter your username and password to log on:</p>

                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" id="form" action="proses-login.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Username</label>
			                        	<input type="text" name="username" placeholder="Username" class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password" class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn">Masuk</button>
                                    <!-- <center><button type="submit" class="btn-warning btn-sm" ><a href="" style="color: white;">Lupa Kata Sandi</a> </button></center> -->
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login">
                        	<h3>...or login with:</h3>
                        	<div class="social-login-buttons">
	                        	<a class="btn btn-link-1 btn-link-1-facebook" href="#">
	                        		<i class="fa fa-facebook"></i> Facebook
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-twitter" href="#">
	                        		<i class="fa fa-twitter"></i> Twitter
	                        	</a>
	                        	<a class="btn btn-link-1 btn-link-1-google-plus" href="#">
	                        		<i class="fa fa-google-plus"></i> Google Plus
	                        	</a>
                        	</div>
                        </div>
                    </div> -->
                </div>
            <!-- </div> -->
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!-- Validasi LOGIN -->
<!-- 
        <script src="../js/vendor.js"></script>
        <script src="../js/app.js"></script>
        <script src="../jquery-validation-1.15.0/dist/jquery.validate.js"></script>
        <script src="../jquery-validation-1.15.0/dist/localization/messages_id.js"></script>
         <script type="text/javascript">
            $(document).ready(function(){
                $("#form").validate({
                     rules: {
                            username: {
                                required: true
                            },
                            password: {
                                required: true
                            }
                        },

                        messages: {
                            username: {
                                required: "Nama pengguna tidak boleh kosong"
                            },
                            password: {
                                required: "Kata sandi tidak boleh kosong"
                            }
                        }

                });

          });
        </script>
        -->
        <!-- end of validasi LOGIN -->