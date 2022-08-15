<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>	
<head>
<title>Levy Flat Registration Form Flat Responsive Widget Template  : w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Cofrestru Registration Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link href="css/retister_style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Marvel:400,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
	<h1>Levy Flat Registration Form</h1>
		<div class="registration">
			<h2>Registration Form</h2>				
					<form action="{{route('register-process')}}" method="POST">
                        @if (Session::has('success'))
                            <div class="arlert arlert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="arlert arlert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif
                        @csrf
						<div class="form-info">
                        <input type="text" class="text" value="User Name" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" >
						<input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
						<input type="text" class="text" name="fullname" value="Your Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" >
						<input type="text" class="text" name="email" value=" Adress" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Address';}" >
                        <input type="text" class="text" name="phone" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Adress';}" >
                        <input type="text" class="text" name="address" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" >
                        <input type="text" class="text" name="usertypeid" value="1" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '1';}" readonly >
                        </div>
					    <input type="submit" value="REGISTER">
					</form>
					<ul class="bottom-icons">
						<li><a href="#">Signup With</a></li>
						<li><a href="#" class="facebook"> </a></li>
						<li><a href="#" class="twitter"> </a></li>
						<li><a href="#" class="gp"> </a></li>
							<div class="clear"> </div>
					</ul>
							<div class="clear"> </div>
		</div>


</body>
</html>