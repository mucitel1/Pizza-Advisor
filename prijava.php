<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pizza Advisor | Maribor</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<header>
		<img src="images/2000x200.png" width="100%" height="auto" alt="Replace with pizza"/>
    </header>
<div class="container" align="center">
	<nav>
    	<a href="index.php" class="btn btn-default" role="button">Domov</a>
      <a href="naj_pizze.php" class="btn btn-default" role="button">Naj Pizzarije</a>
      <a href="oceni.php" class="btn btn-default" role="button">Oceni</a>
      <a href="prijava.php" class="btn btn-info" role="button">Prijavi se</a>
    </nav>
  <div class="content">
  	<div class="row">
    	<div class="col-xs-5 col-lg-2 col-md-5">
  			<h2 align="left">Prijavi se</h2>
            
        </div>
        
        <!-- Seach disabled...
        <div class="col-xs-3 col-lg-10" align="right">
  			
            <form>
        		<input type="search" class="text" placeholder="Vnesite ime pizzarije...">
    			<input align="right" class="btn btn-info" type="submit" value="Išči!">
    		</form>!-->
        </div>
        
        <!--Start login!-->
        
        <div class="col-xs-12 col-sm-6 col-lg-3 col-md-4">
        <form data-toggle="validator" role="form">
          <div class="form-group">
            <label for="username">Uporabniško ime:</label>
            <input type="username" pattern="^[A-Za-z]{2,}$" maxlength="25" class="form-control" placeholder="uporabniško ime" id="username" data-error="Vnesete lahko samo črke in številke!" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <div class="help-block with-errors"></div>
          </div>
          <div class="form-group"> <!--Password min char = 6-->
            <label for="password">Geslo:</label>
            <input type="password" data-minlength="6" maxlength="255" class="form-control" id="password" placeholder="geslo" data-error="Vnesite vsaj 6 znakov!" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <div class="help-block with-errors"></div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" id="zapomni">Zapomni si me!</input>
              </label>
          <div class="form-group">
          <button type="submit" class="btn btn-primary">Prijava!</button>
          </div>
        </form>



        <!--

        <div class="form-group">
        <label for="Username">Uporabniško ime</label><br>
        <input type="text" placeholder="uporabniško ime" id="Username">
        </div>
        <div class="form-group">
        <label for="Password">Geslo</label><br>
        <input type="password" id="Password" placeholder="geslo"/>
        <br>
        <br>
        <label>
        	<input type="checkbox">  Zapomni si me!
        </label>
        <br>
        <button type="submit" class="btn btn-default">Prijava!</button>
        </div>
        </form>

        -->
        <!--End login!-->
        <a href="registracija.php">Registriraj se!</a>
        <p></p>
     </div>
  </div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Pizza Advisor | Maribor. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
<script src="js/validator.js"></script>
</div>
</body>
</html>
