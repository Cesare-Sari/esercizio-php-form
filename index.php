<?php  


  $nome = (isset($_POST['Nome'])) ?
  $_POST['Nome'] : '';

  print $nome; 

?>  






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>


 <div class="container">   
  <div class="rows">
   <div class="col-12"> 
    <form action="index.php" method="post">
      <div class="form-group">
        <label for="Nome">Nome</label>
        <input type="text" name="Nome" class="form-control" id="Nome" placeholder="inserisci Nome">
      </div>

      <div class="form-group">
        <label for="Cognome">Cognome</label>
        <input type="text" class="form-control" id="Cognome" placeholder="inserisci Cognome">
      </div>
     
      <div class="form-group">
        <label for="indirizzo">Indirizzo</label>
        <textarea class="form-control" id="indirizzo" rows="3" placeholder="inserisci indirizzo" ></textarea>
        <small id="indirizzoHelp" class="form-text text-muted" >il tuo indirizzo deve essere reale.</small>
      </div>


      <button type="submit" class="btn btn-primary">Invia</button>
    </form>
   </div>
  </div>
 </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js.map" ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>