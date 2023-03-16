<?php
session_start();
class LedenController

{ 
// Controleren of de variabele $_Session['leden'] al bestaat    
    function __construct(){    
        if(!isset($_SESSION["Leden"])){
            $_SESSION["Leden"] = array();
        }
    }

function AddMember($Voornaam, $Achternaam, $Adres, $Postcode, $Woonplaats, $Geboortedatum, $Trainingsdagen){ 
    $arr = array();
      $arr['voornaam'] = $Voornaam;
      $arr['achternaam'] = $Achternaam;
      $arr['adres'] = $Adres;   
      $arr['postcode'] = $Postcode;
      $arr['woonplaats'] = $Woonplaats;
      $arr['geboortedatum'] = $Geboortedatum;
      $arr['trainingsdagen'] = $Trainingsdagen;

      // Gegevens in Array zetten
      array_push($_SESSION["Leden"], $arr);

    }
    // Met een loop de sessie doorgaan om hem uit te lezen
    function SessionWalk(){
        foreach($_SESSION["Leden"] as $Leden){
            echo "<tr>";

            echo "<td>". $Leden['voornaam']. "</td>
            <td>". $Leden['achternaam']. "</td>
            <td>". $Leden['adres']. "</td>
            <td>". $Leden['postcode']. "</td>
            <td>". $Leden['woonplaats']. "</td>
            <td>". $Leden['geboortedatum']. "</td>
            <td>". $Leden['trainingsdagen']. "</td>";

            echo "</tr>";   
        }


    }



}

?>