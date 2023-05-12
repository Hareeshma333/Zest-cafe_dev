<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Zest cafe</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./styl.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container right-panel-active">
	<!-- Sign Up -->
	<div class="container__form container--signup">
		<form action="signlink.php" method="post" class="form" >
			<h2 class="form__title">Sign Up</h2>
			<input type="text" placeholder="Name" class="input" id="name" name="name" required />
			<input type="email" placeholder="E-mail" class="input" id="email" name="email" required />
			<input type="password" placeholder="Password" class="input" id="password" name="password" required />
			<input type="submit" value="Create Account" name="fsubmit" class="btn">
		</form>

	
	</div>

	<!-- Sign In -->
	<div class="container__form container--signin">
		<form action="sign in.php" method="post"class="form" >
			<h2 class="form__title">Sign In</h2>
			<input type="email" name="email"  placeholder="E-mail" class="input" />
			<input type="password" placeholder="Password" name="password" class="input" />
			<a href="#" class="link">Not a member?</a>
			<input class="btn" type="submit" value="Sign In">
		</form>
	</div>

	<!-- Overlay -->
	<div class="container__overlay">
		<div class="overlay">
			<div class="overlay__panel overlay--left">
				<button class="btn" id="signIn">SIGN IN</button>
			</div>
			<div class="overlay__panel overlay--right">
				<button class="btn" id="signUp">SIGN UP</button>
			</div>
		</div>
	</div>
</div>
<!-- partial -->
  <script  src="./scrip.js"></script>

</body>
</html>