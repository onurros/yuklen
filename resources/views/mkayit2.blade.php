<!doctype html>
<html lang="en">

<head>
	<title>Login 08</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">

			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="fa fa-user-o"></span>
						</div>
						<h3 class="text-center mb-4">Adres Bilgileri</h3>
						
						<form method="post" action="musteriKayitPost2" class="login-form">
						@csrf
							<div class="form-group">

								<input type="text" class="form-control rounded-left" name="telefon" placeholder="Telefon No" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control rounded-left"  name="il" placeholder="İl" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control rounded-left" name="ilce" placeholder="İlçe" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control rounded-left" name="posta_kodu" placeholder="Posta Kodu" required>
							</div>
							<div class="form-group">

								<input type="text" class="form-control rounded-left" name="adres" placeholder="Adres" required>
							</div>
							<input type="hidden" class="form-control rounded-left" name="adi" value="{{$adi}}" required>
							<input type="hidden" class="form-control rounded-left" name="soyadi" value="{{$soyadi}}" required>
							<input type="hidden" class="form-control rounded-left" name="e_posta" value="{{$e_posta}}" required>  
							<input type="hidden" class="form-control rounded-left" name="sifre" value="{{$sifre}}" required>  
							<div class="form-group">
								<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Kayıt Ol</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>