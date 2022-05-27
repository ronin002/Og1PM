<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="HTML5 Example Page">
  <link href="{{ URL::asset('/home/css/login.css')}}" rel="stylesheet">
</head>
<body>
  <div class="limiter">
		<div class="container-login100"  style="padding-top:0px;">
			<div class="wrap-login100" style="padding-top:0px;">
				<form class="login100-form validate-form">
					<a href="/" class="logo d-flex align-items-center">
						<img src="{{ URL::asset('/home/img/og1_logo_v2.png')}}"
							width="50"
							height="50"
						alt="">
						<h4 style="font-weight:bold; padding-left: 10px;"> <span style="color:red;">Og</span><span>Hum</span></h4>
					</a>
					<br />
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email" id="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Name">
						<input class="input100" type="text" name="name" id="name">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass1" id="pass1">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Re type">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass2" id="pass2">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn" id="divErros" style="display:hide;" >
						<div class="wrap-login100-form-btn">
							<p id="hErros" style="color:red;"></p>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" onclick="EfetuarLogin();">
								Sign Up
							</button>
						</div>
					</div>


					<div class="text-center p-t-115">
						<span class="txt1">
							Already an account?
						</span>

						<a class="txt2" href="{{ route('login')}}">
							Sign In
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">

	function EfetuarLogin(){


		//const socket = new WebSocket('ws://localhost:8080')

		let vEmail = $('#email').val(); //document.getElementById("email").value;
		console.log('URL:' +  '@Url.Action("CreateUser", "Login")');
		//alert('oi' +vEmail);

		let vNome = document.getElementById("name").value;
		let vPass1 = document.getElementById("pass1").value;
		let vPass2 = document.getElementById("pass2").value;

        if (vPass1 != vPass2) {
            alert('Passwords dont match ');
            return;
		}


        ValidatePassword();

		var jsonData = JSON.stringify({ Email: vEmail,
					Name: vNome,
					Password: vPass1
		});
        //console.log(jsonData);
        alert(jsonData);

		$.ajax({
			type: "POST",
            traditional: true,
            async: false,
            cache: false,
			headers: {
				'Accept': 'application/json',
				'Content-Type': 'application/json'
			},
			url: '@Url.Action("CreateUser", "User")', //  '/Login/CreateUser/', // 'Url.Action("CreateUser", "Login")',
			dataType:"json",
			data: jsonData,
			data: jsonData,
			error: function(returnval) {
				alert(returnval);
                let erros = JSON.stringify(returnval);
                console.log('Error:' + returnval );
				console.log('erros:' + erros );

				$('#hErros').html(erros);
				$('#divErros').show();
			},
			success: function (result) {
				alert(result);
				console.log('Result:' +  JSON.stringify(result));
				//setTimeout( function() { top.location.href="view.php" }, 3000 );
			}
		})


	}

function ValidatePassword() {

	$("#pass1").each(function () {
        var validated =  true;
        var sErrors = 'Password most be at least ';
        if (this.value.length < 8) {
            validated = false;
			sErrors += '8 characters\n'
		}

        if (!/\d/.test(this.value)) {
            validated = false;
			sErrors += ' | one number\n'
		}

        if (!/[a-z]/.test(this.value)) {
            validated = false;
			sErrors += ' | one character lowercase\n'
		}

        if (!/[A-Z]/.test(this.value)) {
            validated = false;
			sErrors += ' | one character uppercase\n'
		}
  //      if (/[^0-9a-zA-Z]/.test(this.value)) {
  //          validated = false;
		//	sErrors = 'Password most be at least numeros characters\n'
		//}

        console.log(validated)
        //alert(validated);
        if (!validated) {
            $('#hErros').html(sErrors);
            $('#divErros').show();
        }

        if (!validated) return;

        return validated;
        //$('#divErros').text(validated ? "pass" : "fail");
        // use DOM traversal to select the correct div for this input above
    });
}
</script>
