<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
<body style="background-color: rgba(255, 255, 255, 0.2);">
	<nav class="navbar justify-content-lg-center">
        <h3 class="text-primary">Register and Login Form</h3>
		<hr style="border-bottom:1px dotted #ccc;"/>
	</nav>
	<div class="container ml-5 mt-5">
		<div style="display: flex;">
            <div class="col-md-5">
                <div class="alert alert-info">Have'nt had an Account? Register here...</div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" maxlength="12" name="password" class="form-control" required="required"/>
                    </div>
                    <br />
                    <center><button name="register" class="btn btn-primary">Register</button></center>
                </form>
                <br />
                <?php include 'register.php'?>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
            <div class="alert alert-info">You have an Account ?</div>
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" required="required"/>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required="required"/>
                    </div>
                    <br />
                    <center><button name="login" class="btn btn-primary">Login</button></center>
                </form>
                <br />
                <?php include 'login.php'?>
            </div>
        </div>
	</div>
</body>
</html>