<!--Author: Vamsi Mudunuri-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WKC | Login</title>
	<link rel="shortcut icon" href="/img/logo.png" />
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    <style>
        .vl {
          border-left: 3px solid #00529c;
          height: 50px;
          margin-top: 15px;
          margin-right: -7px;
          margin-left: 7px;
        }
        .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
        </style>
	<div class="limiter">
		{{-- <div id='loadingDiv'>
			<div style="z-index:999999999; height:100%; overflow:auto; width:100%; position:absolute; background-color: rgba(0, 0, 0, 0.8); display:block;">
		</div>
		<div style="z-index:9999999999; height:100%; overflow:auto; width:100%; position:absolute; vertical-align:middle;">
		  <h3 style="position:absolute; top:0; bottom:0; left:0; right:0; width:50%; height:30%; margin:auto; text-align:center; color:white;">Loading... Please wait.!</h3>
		</div> --}}
	  </div>
		<div class="container-login100">
			<div class="wrap-login100" style="margin-top:-50px;">
				<form class="login100-form" id="loginForm">
					@csrf
                    <span class="login100-form-title p-b-48" style="    margin-top: -15px;">
                        <div class="row">
                        <div class="col-sm-12" style="margin-top: -67px;
                        margin-bottom: -67px;"><img src="/images/wkc_logo.png" class="max-h-75px" alt="" style="height: 100%!important;"/></div>
                        </div>
					</span>

					<label style="margin-top: 14px; margin-bottom: 0px;font-size: 18px; color:#f04d23;">User ID</label>
					<div class="wrap-input100">
						<input class="input100" id="userName" type="text" class="form-control" name="userName" value="{{ old('userName') }}" autocomplete="" autofocus>
						{{-- <span class="focus-input100" data-placeholder="User Name"></span> --}}

					</div>

					<div class="wrap-input100" data-validate="Enter password" autocomplete="off">
					<label style="margin-bottom: 0px;font-size: 18px; color:#f04d23;">Password</label>
						<input class="input100" id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
						{{-- <span class="focus-input100" data-placeholder="Password"></span> --}}

					</div>


					{{-- <div class="icheck-primary">
						<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} checked style="margin-top: 6px; margin-left: 1px;">
						<label class="form-check-label" for="remember">
						  Remember Me
						</label>
					  </div> --}}


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="/dashboard/admin"  return false;" class="login100-form-btn"  style="background-color: #f04d23;">
								Login
                            </a>
						</div>
					</div>
					{{-- <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="/register" class="login100-form-btn" type="submit" style="color:white;">
								Register
							</a>
						</div>
					</div> --}}

					<div class="text-center p-t-30">
						{{-- @if (Route::has('password.request')) --}}
                        <a  id="myBtn" class="txt2" class="btn btn-link" href="#" style="color: #f04d23;font-size: 18px;">
                        </b>Register</b>
						</a></br>
						<a class="txt2" class="btn btn-link" href="#" style="font-size: 15px;margin-top:5px;">
							Forgot Password?
						</a>
						{{-- @endif --}}
					</div>
					{{-- <div class="text-center">
						<a href="/register" class="btn btn-link" type="submit" style="color:#3aa493;">
							Register
						</a>
					</div> --}}
				</form>

			</div>

		</div>
	</div>

    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class="container-login100">
			<div class="wrap-login100" style="margin-top:-50px;">
				<form class="login100-form" id="loginForm">
					@csrf
                    <label style="margin-top: 14px; margin-bottom: 0px;font-size: 18px; color:#f04d23;">Full Name</label>
					<div class="wrap-input100">
						<input class="input100" id="userName" type="text" class="form-control" name="userName" value="{{ old('userName') }}" autocomplete="" autofocus>
						{{-- <span class="focus-input100" data-placeholder="User Name"></span> --}}

					</div>
					<label style="margin-top: 14px; margin-bottom: 0px;font-size: 18px; color:#f04d23;">Email ID</label>
					<div class="wrap-input100">
						<input class="input100" id="userName" type="text" class="form-control" name="userName" value="{{ old('userName') }}" autocomplete="" autofocus>
						{{-- <span class="focus-input100" data-placeholder="User Name"></span> --}}

					</div>

					<div class="wrap-input100" data-validate="Enter password" autocomplete="off">
					<label style="margin-bottom: 0px;font-size: 18px; color:#f04d23;">Password</label>
						<input class="input100" id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
						{{-- <span class="focus-input100" data-placeholder="Password"></span> --}}

					</div>

					<div class="wrap-input100" data-validate="Enter password" autocomplete="off">
					<label style="margin-bottom: 0px;font-size: 18px; color:#f04d23;">Confirm Password</label>
						<input class="input100" id="password" type="password" class="form-control" name="password" required autocomplete="current-password">
						{{-- <span class="focus-input100" data-placeholder="Password"></span> --}}

					</div>



					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<a href="/approve_user" class="login100-form-btn"  style="background-color: #f04d23;">
								Register
                            </a>
						</div>
					</div>

				</form>

			</div>

		</div>
        </div>

    </div>

<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
      modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
<!--===============================================================================================-->
	<script src="/vendor/jquery/jquery-3.2.1.min.js"></script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/cjs/popper.min.js"></script>-->
	<script src="/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->

	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

<!--===============================================================================================-->
	<script src="/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->


<!--===============================================================================================-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">

// <!--===============================================================================================-->
	<script src="/js/main.js"></script>
	</script>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<script>

    // function login(){
    //     if(document.getElementById("password").value == "12345"){
    //         if(document.getElementById("userName").value == "admin" || document.getElementById("userName").value == "audit" || document.getElementById("userName").value == "receiver" ||document.getElementById("requester").value == "requester"){

    //             var jsonData = JSON.stringify({
    //             'access_token': document.getElementById("userName").value
    //             });
    //             $.ajax({
    //             url: '/session',
    //             type: "POST",
    //             data: jsonData,
    //             contentType: 'application/json',
    //             headers: {
    //                 'Content-Type': 'application/json',
    //                 'X-CSRF-TOKEN': "{{ csrf_token() }}"
    //             },
    //             success: function(response) {
    //                 var reUrl = "/dashboard/"+document.getElementById("userName").value;
    //                     window.location.href=reUrl;
    //             },
    //             error: function(xhr, textStatus, error) {
    //                 Swal.fire({
    //                     type: "error",
    //                     title: "ERROR",
    //                     text: xhr.responseJSON.error.message,
    //                     animation: "slide-from-top",
    //                     showConfirmButton: true
    //                 }).then(function() {
    //                     document.getElementById('submitButton')
    //                         .removeAttribute("disabled")
    //                 })
    //             }
    //             })



    //         } else {
    //             Swal.fire({
    //                 icon: "error",
    //                 title: "Try Again..",
    //                 text: "Wrong User Name / Password!"
    //             });
    //         }
    //     } else {
    //         Swal.fire({
    //                 icon: "error",
    //                 title: "Try Again..",
    //                 text: "Wrong User Name / Password!"
    //             });
    //     }


    // }
</script>
</body>
</html>
