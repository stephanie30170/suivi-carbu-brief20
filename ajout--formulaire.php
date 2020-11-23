<?php include ("head.php"); ?>
<body>

  <header>
    <h1>suivi-carbu</h1>
    <h2>ajout d'un plein</h2>
  </header>

  <main>
    <form action="ajout--traitement.php" method="post">
      
      <label for="prix-au-litre">Prix payé (au litre)</label>
      <input type="number" name="prix-au-litre" id="prix-au-litre" step="0.001">

      <label for="volume-plein">Volume total du plein (en litres)</label>
      <input type="number" name="volume-plein" id="volume-plein" step="0.01">

      <label for="kilometres-parcourus">Kilomètres parcourus (depuis le dernier plein)</label>
      <input type="number" name="kilometres-parcourus" id="kilometres-parcourus" step="0.01">

      <button>ajouter</button>

    </form>
  </main>
  
</body>
</html>