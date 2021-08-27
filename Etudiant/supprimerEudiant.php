<!DOCTYPE html>
<html>
<head>
	<title>supprimer Etudiant</title>
	
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	
	<link rel="stylesheet" type="text/css" href="Css/main.css">
<!--===============================================================================================-->
    <meta name="robots" content="noindex, follow">
</head>
<body>

<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
                  supprimer Un Etudiant
				</span>

				<span class="contact100-form-title-2">
				   Veuillez remplir les champs suivants:
				</span>
			</div>

			<form class="contact100-form validate-form" action="supprimerEtud_action.php" method="post">
				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Code:</span>
					<input class="input100" type="number" name="code" placeholder="Enter le code">
					<span class="focus-input100"></span>
				</div>
               
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							reset
					</button>
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
   
   </body>
   </html>