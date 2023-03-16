<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="../styling/style.css">
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

    <div id="Ledenlijst">
        <h2>Leden:</h2>

    <table>
        <tr>
            <th>Voornaam</th>
            <th>Achternaam</th>
            <th>Adres</th>
            <th>Postcode</th>
            <th>Woonplaats</th>
            <th>Geboortedatum</th>
            <th>Trainingsdagen</th>
        </tr>
    <tr>
        <?php
        require("../backend/LedenController.php");
            $lc = new LedenController();
            $lc -> SessionWalk(); 
        

        ?>

        

    </div>
    
</body>

</html>