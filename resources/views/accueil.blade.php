<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-default nav">
 <div class="container-fluid">
   
   <div class="navbar-header">
     <a class="navbar-brand" href="#">Petites annonces</a>
   </div>
   <div class="text">
   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav navbar-right">
       <li><a href="#">Accueil</a></li>
       <li><a href="#">Déposer une annonce</a></li>
       <li><a href="#">Offres</a></li>
       <li><a href="#">Mes annonces</a></li>
       <li><a href="/inscription">Inscription</a></li>
       <li><a href="/admin">Connexion</a></li>
     </ul>
   </div>
   </div>
 </div>
</nav>

<form>
	<label for="recherche">Votre recherche</label>
	<input type="text" name="recherche" placeholder="Que rechercher vous?">
	<label for="Catégories">Catégories</label>
	<input type="text" name="Catégories" placeholder="Catégories">
	<label for="dep">Département/Région</label>
	<input type="text" name="dep" placeholder="Departement/Region">
	<label for="cp">Code Postal</label>
	<input type="number" name="cp" placeholder="Code Postal">
	<input type="submit" name="Rechercher" class="btn btn-success">
</form>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>