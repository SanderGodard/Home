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
      <a href="../#Next">
        <b class="Back" title="Gå tilbake">keyboard_backspace</b>
      </a>

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


      <div class="Medias">

        <a title="Gå til Facebook" target="_blank" href="https://www.facebook.com/profile.php?id=100009451169486">
          <img src="./Images/Facebook.png" alt="Facebook">
        </a>

        <a title="Gå til Instagram" target="_blank" href="https://www.instagram.com/sandergodard/">
          <img src="./Images/Instagram.png" alt="Insta">
        </a>

        <a title="Gå til GitHub" target="_blank" href="https://github.com/SanderGodard">
          <img src="./Images/GitHubAlt.png" alt="GitHub">
        </a>

        <a title="Gå til LinkedIn" target="_blank" href="https://www.linkedin.com/in/sander-godard-0631bb174/">
          <img src="./Images/LinkedInAlt.png" alt="LinkedIn">
        </a>

      </div>
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
