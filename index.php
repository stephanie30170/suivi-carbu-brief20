<?php include ("head.php"); ?>
<body>

  <header>
    <h1>Suivi-Carbu</h1>
  
  </header>

  <main>
  <h2>Page d'accueil</h2>
    
    <?php

      if (isset($_COOKIE["plein"])) {

        echo "<table>"
            ."<thead>"
            ."<tr>"
            ."<th>Date</th>"
            ."<th>Prix/L</th>"
            ."<th>Conso</th>"
            ."</tr>"
            ."</thead>"
            ."<tbody>";

        foreach ($_COOKIE["plein"] as $key => $value) {
          list($datePlein, $prixLitre, $moyenneLitresAuCent) = explode("|", $value);

          echo "<tr>"
          ."<td>$datePlein</td>"
          ."<td>$prixLitre</td>"
          ."<td>$moyenneLitresAuCent</td>"
          ."</tr>";

        }

        echo "</tbody>"
            ."</table>";

      } else {

        echo "<p>Ajouter un plein pour commencer</p>";

      }

    ?>

    <a class="btn" href="ajout--formulaire.php">ajouter</a>

  </main>

</body>
</html>