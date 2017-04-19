<!DOCTYPEhtml>
<html>
<head>
  <meta charset="utf-8"/>
  <link type="text/css" rel="stylesheet" href="style.css"/>
</head>
<body>
  <p><?php
    //exo 1 part 2
    $age = 15;
    if ($age > 17) {
      echo "Vous êtes majeur";
    }
    else {
      echo "Vous êtes mineur";
    }
    ?>
  </p>
  <p><?php
  // exo part 2
    $age2 = 8;
    $genre = "femme";
      if ($age2 > 17 AND $genre == "homme") {
        echo "Vous êtes un homme et vous êtes majeur";
      }
      elseif ($age2 < 18 AND $genre == "homme") {
        echo "Vous êtes un homme et vous êtes mineur";
      }
      elseif ($age2 > 17 AND $genre == "femme") {
        echo "Vous êtes une femme et vous êtes majeure";
      }
      elseif ($age2 < 18 AND $genre == "femme") {
        echo "Vous êtes une femme et vous êtes mineure";
      }
   ?>
 </p>
 <p><?php
    //exo 3 part 2
    $sexe = "femme";
      if ($sexe =="femme") {
        echo "C'est une développeuse.";
      }
      else {
        echo "C'est un développeur.";
      }
   ?>
</p>
<p><?php
// exo 4 part 2
$myAge = 17;
  if ($myAge >= 18) {
    echo "Tu es majeur";
  }
  else {
    echo "Tu n'es pas majeur";
  }
  ?>
</p>
</body>
</html>
