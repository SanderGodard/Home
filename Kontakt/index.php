<?php
  $title = "Sander Godard | Kontakt meg";
  include "../Elements/head.php";

?>

<body class="square">

  <?php
    $active = "Kontakt";
    include "../Elements/nav.php";
    include "../Elements/mobilenav.php";
  ?>

  <main>
    <div class="Body">

      <h2>Kontakt</h2>
      <?php
        include "../Elements/next.php";
      ?>

      <p>
        Du kan lett ta kontakt med meg på følgende steder:
      </p>
    </div>

    <div class="KontaktWidth">
      <table>
        <tr>
          <td>
            <a href="https://github.com/SanderGodard" target="_blank">
              <img src="./Images/GitHub.jpg" alt="Github">
            </a>
            <div>
              <h3>GitHub</h3>
              Her legger jeg ut alle prosjektene
              mine, og du kan se hva jeg gjør når
              gjennom hele prosessen.
            </div>
          </td>
          <td>
            <a href="https://www.linkedin.com/in/sander-godard-0631bb174/" target="_blank">
              <img src="./Images/LinkedIn.jpg" alt="LinkedId">
            </a>
            <div>
              <h3>LinkedIn</h3>
              Her kan du se litt om meg, hvis du vil
              vite mer utenom LinkedIn kan du gå <a href="../Om-meg" class="TekstLink">hit</a>.
            </div>
          </td>
        </tr>
      </table>


      <?php
        include "../Elements/medias.php";
      ?>
    </div>

    <i class="Eller">Eller</i>
    <?php
      include "../Elements/banner.php";
    ?>


  </main>
  <?php
    include "../Elements/footer.php";
  ?>
</body>

</html>
