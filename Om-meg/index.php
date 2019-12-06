<?php
  $title = "Sander Godard | Om meg";
  include "../Elements/head.php";

?>

<body class="stripes">

  <?php
    $active = "OmMeg";
    include "../Elements/nav.php";
    include "../Elements/mobilenav.php";
  ?>

  <main id="Om">

    <div class="Body">
      <h2><span class="White">Om meg</span></h2>
      <?php
        include "../Elements/next.php";
      ?>


      <div class="OmContent">
        <div class="White">
          Jeg er Sander, jeg er 17 år gammel og går på Gjøvik Videregående.
          Jeg designer, koder, tester og forbedrer alt du kan se på en nettside.<br>
          Her kan du lese litt mer om meg, du finner også mye mer på sosiale medier
        </div>
      </div>

      <div class="OmFlex">
        <img src="./Images/Sander5.jpg" alt="Placeholder">
        <div class="White">
          <h1>Bakgrunn</h1>
          Siden jeg gikk på barneskole har jeg alltid visst at jeg ville jobbe med PC, teknologi, og gjerne noe UI liknende, som folk kan se.<br>
          Dette har ført meg til frontend arbeid, som å designe og lage nettsider.<br>
          <p>Sosiale medier:</p>
          <?php
            include "../Elements/medias.php";
          ?>
        </div>
      </div>

      <?php
        include "../Elements/fokus.php";
      ?>

    </div>
  </main>
  <?php
    include "../Elements/footer.php";
  ?>
</body>

</html>
