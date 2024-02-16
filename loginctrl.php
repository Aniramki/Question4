
<?php

$interet = "";


if (isset($_GET['nom'], $_GET['age'], $_GET['marit']) && !empty($_GET['nom'] && $_GET['age'] && $_GET['marit'])) {
  if (isset($_GET['internet']) ?? NULL) {
    $internet = $_GET['internet']  . ", ";
    $internet1 = 1;
  } else {
    $internet1 = 0;
    $internet = "";
  }

  if (isset($_GET['micro']) ?? NULL) {
    $micro = $_GET['micro'] . ", ";
    $micro1 = 1;
  } else {
    $micro1 = 0;
    $micro = "";
  }

  if (isset($_GET['jeux'])) {
    $jeux = $_GET['jeux'];
    $jeux1 = 1;
  } else {
    $jeux1 = 0;
    $jeux = "";
  }


  $marit = $_GET['marit'];
  $interet = $internet . $micro . $jeux;
  $interet1 = $internet1 . "," . $micro1 . "," . $jeux1;


  $nom = $_GET['nom'];
  $age = $_GET['age'];
  $titre = "Une petite réponse";
  include("../Question4/header.php");
?>
<h1>Merci à vous, <?= $nom ?>.</h1>
  <p>Vous avez donc le bel âge de <span style="font-weight: bold;"><?= $age ?></span> ans, vous êtes <span style="font-weight: bold;"><?= $marit ?></span> et vous vous intéressez
    à <span style="font-weight: bold;"><?= $interet ?></span>.</p><br>
  <p>Je m'empresse d'envoyer la requête :</p>
  <p><span style="font-weight: bold;">insert into Matable values('<?= $nom ?>', <?= $age ?>, '<?= $marit ?>', <?= $interet1 ?>)</span><br> à notre base de données.
    
<?php
 
} else {
  
?>
  <h1><a href="index.html">Au menu...</a></h1>
<?php

  $titre = "ERREUR login";
  @include("../Question4/header.php");
  echo "Login ERROR";
}
?>
<?php
   
   
    include("../Question4/footer.php");
?>
