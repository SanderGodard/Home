<?php
  $title = "Sander Godard | Kontakt meg";
  include "../Elements/head.php";

?>

<body>

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
              <img src="../Images/GitHub.jpg" alt="Github">
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
              <img src="../Images/LinkedIn.jpg" alt="LinkedId">
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

        <a title="Gå til Facebook" href="https://www.facebook.com/profile.php?id=100009451169486">
          <img src="../Images/Facebook.png" alt="Facebook">
        </a>

        <a title="Gå til Instagram" href="https://www.instagram.com/sandergodard/">
          <img src="../Images/Instagram.png" alt="Insta">
        </a>

        <a title="Gå til GitHub" href="https://github.com/SanderGodard">
          <img src="../Images/GitHubAlt.png" alt="GitHub">
        </a>

        <a title="Gå til LinkedIn" href="https://www.linkedin.com/in/sander-godard-0631bb174/">
          <img src="../Images/LinkedInAlt.png" alt="LinkedIn">
        </a>

      </div>
    </div>

    <i class="Eller">Eller</i>
    <div class="Banner">
      <div class="Body">
        <br>
        <b>Hvis du vil ha raskere svar kan du trykke her</b>
        <a target="_blank" href="mailto:sander@godard.no"><span class="Material">mail</span> Send E-post</a>

        <a href="javascript:void(0)" onclick="SMSfunc()" id="SMS"><span class="Material">message</span> Send SMS</a><br>

        <!--
          <a href="javascript:void(0)" onclick="document.getElementById('TelefonNr').style.display = 'Block'" id="RightBtn"><span class="Material">message</span> Send SMS</a><br>

          <i id="TelefonNr">+47 901 89 461</i>
        -->
      </div>
    </div>


  </main>
  <footer>
    <div class="Body">
      <a onclick="topFunction()" title="Gå øverst på siden" class="Topp"><span class="Material">keyboard_arrow_up</span>Tilbake til toppen</a>
      <div class="RightFooter">
        <h1>Sander Godard</h1>
        <p>Aspirerende Front-end</p>
        <p>Webutvikler</p>
      </div>
      <div class="LeftFooter">
        Kontaktinformasjon:<br>
        <a href="callto:90189461">+47 901 89 461</a><br>
        <a href="mailto:sander@godard.no">sander@godard.no</a>
      </div>
      <!--
        <span>
          &copy; 2018 - 2019 Sander Godard
        </span>
      -->
    </div>
  </footer>
</body>

</html>
