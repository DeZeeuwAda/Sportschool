<!DOCTYPE html>
  <html>
    <head> 

      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
  body {
  font-family: "Sofia", sans-serif;
  }
    </style>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
<style>
  body {
    font-family: "Audiowide", sans-serif;
  }
</style>

<title>Fit4You</title>
 
  <link rel="stylesheet" type="text/css" href="../styling/style.css" />
</head>


<body>
<header>
    <div class="Navwrap">
      <nav>
        <a href="sportschool.php">Home</a>
        <a href="leden.php">Leden</a>
      </nav>
  </div>

  <div class="img">
    <img src="../images/header.png" alt="header" />
    <div class="aanmelden">
  
  <h1>Registratieformulier Fit4You<h1>
<p>Vul onderstaande informatie in<p>
   </div>
</div>


  </header>
<hr>

<div class=formulier>



<form method="POST">
      <select name=manvrouw value=manvrouw>
      <option value=dhr>Dhr</option>
      <option value=mvr>Mvr</option>
</select>

    <p>
      <h3>Voornaam</h3>
      <input type="text" name="Voornaam" autofocus required>
      <?php
    // if(empty($_POST['Voornaam']))
    // {echo '<p class="error"> Vul uw voornaam in voordat u verder gaat </p>';}
    ?>
    </p>

    <p>
          <h3>Achternaam</h3>
          <input type="text" name="Achternaam" required>
        <?php
    // if(empty($_POST['Achternaam']))
    // {echo '<p class="error"> Vul uw voornaam in voordat u verder gaat </p>';}
        ?>
    </p>

    <p>
    <h3>Adres</h3>
    <input type="text" name="Adres" required>
    <?php
    // if(empty($_POST['Adres']))
    // {echo '<p class="error"> Vul uw adres in voordat u verder gaat </p>';}
    ?>
    </p>

    <p>
    <h3>Postcode</h3>
    <input type="text" name="Postcode" placeholder="1234 AB" required>

    <?php
    // if(empty($_POST['postcode']))
    // {echo '<p class="error"> Vul uw postcode in voordat u verder gaat </p>';}
    ?>
    </p>

    <P>
    <h3>Woonplaats</h3>
    <input type="text"  name="Woonplaats" required>
    <?php
    // if(empty($_POST['woonplaats']))
    // {echo '<p class="error"> Vul uw woonplaats in voordat u verder gaat </p>';}
    ?>
    </P>

    <P>
    <h3>Geboortedatum</h3>
    <input type="date" name="Geboortedatum" required>
    <?php
    // if(empty($_POST['geboortedatum']))
    // {echo '<p class="error"> Vul uw geboortedatum in voordat u verder gaat </p>';}
    ?>
    </p>

    <p>
    <h3> Geschatte aantal trainingsdagen per maand</h3>
    <input type="number" name="Trainingsdagen" placeholder=14 required>
    <?php
    // if(empty($_POST['trainingsdagen']))
    // {echo '<p class="error"> Vul uw geschatte aantal trainingsdagen in voordat u verder gaat </p>';}



    ?>
    </p>

    <br>
    <br>

    <h3>Voltooi registratie</h3>

   <div class=versturen>
    <button type="submit" name="versturen" class="versturen">
      <span class="material-symbols-outlined"> send
      </span>
    </button>         
   </div>

    

  
    
</div>

<div class=icons>

    <input type=radio id=r2 name=Planning />
    <label for=2
    ><img
      src="../images/notebook-svgrepo-com.svg"
      width=50px
      class=radioimg
    /></label>

    <input type=radio id=r3 name=Reps />
    <label for=3
    ><img
      src="../images/weight-lifting-svgrepo-com.svg"
      width=50px
      class=radioimg
    /></label>

    <input type=radio id=r4 name=YourWeight/>
    <label for=4
    ><img
      src="../images/weight-svgrepo-com.svg"
      width=50px
      class=radioimg
    /></label>
  </div>




<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>130</h3>
      <p>Huidige leden</p>
    </div>
  

  
    <div class="card">
      <p><i class="fa fa-check"></i></p>
      <h3>51</h3>
      <p>Wedstrijden</p>
    </div>
  

 
    <div class="card">
      <p><i class="fa fa-smile-o"></i></p>
      <h3>2200kg+</h3>
      <p>Aan bruikbare gewichten</p>
    </div>
  

    <div class="card">
      <p><i class="fa fa-coffee"></i></p>
      <h3>1 dag(en)</h3>
      <p>zonder ongelukken</p>
    </div>
  </div>

</div>


   

</form>
<hr>
<footer>
<p>  &copy;2022 Fit4You, One workout a day keeps tiny arms away</p>
</footer>

<?php
  require("../backend/LedenController.php");

  // Array aangemaakt zodat alle values worden opgeslagen

  
//controleren of de button verstuur bestaat en gevuld is
   if(isset($_POST["versturen"])){

    //controleren of alle gegevens ingevuld zijn
    if(empty($_POST["Voornaam"]) ||
    empty($_POST["Achternaam"]) ||
    empty($_POST["Adres"]) ||
    empty($_POST["Postcode"]) ||
    empty($_POST["Woonplaats"]) ||
    empty($_POST["Geboortedatum"]) ||
    empty($_POST["Trainingsdagen"])) {
      
      // Echo geeft de melding dat nog niet alle gegevens zijn ingevuld
    echo "Vul alle gegevens in";
      
    
    // else geeft aan dat als alle gegevens wel ingevuld zijn, dan geeft de echo aan dat alles ingevuld is
    } else {
      $lc = new LedenController();
      $lc -> AddMember ($_POST["Voornaam"],
      $_POST["Achternaam"],
      $_POST["Adres"],
      $_POST["Postcode"],
      $_POST["Woonplaats"],
      $_POST["Geboortedatum"],
      $_POST["Trainingsdagen"]);
   } 
  }
   
   ?>
</body>

</html>
