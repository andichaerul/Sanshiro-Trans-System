<style type="text/css">
	.form-login {position: fixed;left: 30%;
		right: 30%;
		background: #F44336;
		top: 20%;text-align: center;padding: 20px;color: white;font-family: fantasy;border-radius: 5px;}

.headtitle {
    font-size: 30px;
    padding: 5px;
    padding-bottom: 12px;
    border-bottom-style: solid;
    border-bottom-width: 1px;
    margin-bottom: 20px;
}

.label {
    text-align: left;
    font-size: 20px;
}

.input-login {width: 100%;text-align: left;margin-bottom: 25px;}

input.form-in {
    width: 100%;
    height: 40px;
    border: none;
    border-radius: 5px;
    font-size: 20px;
    text-align: center;
}

input.btn-log {
    width: 100%;
    padding: 12px;
    font-size: 20px;
    background: #251f1de3;
    border: none;
    color: white;
    border-radius: 6px;
}


body {
    background: #9e9e9e45;
}
</style>
<!DOCTYPE html>
<html>
<head>
	<title>Sanshiro Trans System</title>
</head>
<body>
	
<div class="form-login">
	<div class="headtitle">System Sanshiro Trans</div>
	<form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">		
	<div class="label">Username</div>
	<div class="input-login"><input type="text" class="form-in" name="username"></div>
	<div class="label">Password</div>
	<div class="input-login"><input type="password" class="form-in" name="password"></div>
	<div class="btn-masuk"><input type="submit" class="btn-log" value="Login"></div>
	</form>
</div>
</body>
</html>