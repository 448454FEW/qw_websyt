<!DOCTYPE html>
<html lang="en">
	<head>
		<script>
			var s = performance.now()
				
		</script>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>qw</title>
	<link type="text/css" href="css/bootstrap-rtl.min.css" rel="stylesheet">
	<link type="text/css" href="css/font-awesome.min.css" rel="stylesheet" />
	<link type="text/css" href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body dir="rtl">
	<div class="container">
		<div class="d-flex justify-content-center h-100">
			<div class="card">
				<div class="card-header">
					<h3>ورود</h3>
					<div class="d-flex justify-content-end social_icon">
						<span><i class="fab fa-facebook-square"></i></span>
						<span><i class="fab fa-google-plus-square"></i></span>
						<span><i class="fab fa-twitter-square"></i></span>
					</div>
				</div>
				<div class="card-body">
					<form action="" method="post">
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text input-icon"><i class="fas fa-user"></i></span>
							</div>
							<input name="user" type="text" class="form-control" id="txt-username" placeholder="نام کاربری">
						</div>
						<div class="input-group form-group">
							<div class="input-group-prepend">
								<span class="input-group-text input-icon"><i class="fas fa-key"></i></span>
							</div>
							<input id="typeinput" type="password" name="password" class="form-control" id="txt-password" placeholder="رمز عبور">
							<button type="button" id="qw" style="width: 35px; height: 40px; background-color: rgb(235, 235, 235); border: 2px  solid rgb(79, 141, 93); display: flex; justify-content: center; align-items: center; font-size: 140%;">
							<div><i class="bi bi-eye-slash"></i> </div>
							</button>
						</div>
						<div class="form-group">
							<input name="submit" type="submit" value="ورود" class="btn float-right login_btn">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		var e = performance.now()
		console.log((e-s)/1000)
	
		</script>
		<script>
			var moghat = true ; 
			var qw 		  =document.querySelector('#qw') ; 
			var typeinput =document.querySelector('#typeinput') ; 
		qw.addEventListener('click' , function(){
			if(moghat == true){
				 moghat = false ;
				 typeinput.type = 'text' ;

				return	qw.innerHTML = `<i class="bi bi-eye-fill"></i>`;

			}else{

				moghat = true ;
				typeinput.type = 'password' ;
				return qw.innerHTML = `<i class="bi bi-eye-slash"></i>` ; 
			}
		})
		</script>
 <?php include "backend.php" ; ?> 

</body><!-- This template has been downloaded from Webrubik.com -->
</html>
