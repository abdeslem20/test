<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <title>TODO Installer</title>
</head>
<body>
 <!--  Beginning installation...<br>
 
    
   include("dbconnect.php");
 -->
  <div class="container">
    <form  action="Create" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Host</label>
        <input type="text" class="form-control" name="host" required  placeholder="Entrer le Host">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Nom de la base de donnée</label>
        <input type="text" class="form-control" name="db_name" required placeholder="Nom de la base de donnée">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Utilisateur</label>
        <input type="text" class="form-control" name="user" required placeholder="Utilisateur">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Mot de passe</label>
        <input type="password" class="form-control" name="password" required placeholder="Mot de passe">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">confirmer le mot de passe</label>
        <input type="password" class="form-control" required  placeholder="Confirmation du mot de passe">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>



    
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>