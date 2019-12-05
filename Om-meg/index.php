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
      <h2 class="White">Om meg</h2>
      <a href="./#Next">
        <b class="Back White" title="Gå tilbake">keyboard_backspace</b>
      </a>


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
          <div class="Medias">

            <a title="Gå til Facebook" href="https://www.facebook.com/profile.php?id=100009451169486">
              <img src="./Images/Facebook.png" alt="Facebook">
            </a>

            <a title="Gå til Instagram" href="https://www.instagram.com/sandergodard/">
              <img src="./Images/Instagram.png" alt="Insta">
            </a>

            <a title="Gå til GitHub" href="https://github.com/SanderGodard">
              <img src="./Images/GitHubAlt.png" alt="GitHub">
            </a>

            <a title="Gå til LinkedIn" href="https://www.linkedin.com/in/sander-godard-0631bb174/">
              <img src="./Images/LinkedInAlt.png" alt="LinkedIn">
            </a>

          </div>
        </div>
      </div>

      <div class="TableOfThings White">
        <h1>Hva jeg setter fokus på når jeg lager nettsider</h1>
        <table>
          <td>
            <h5>devices</h5>
            <p>
              At siden skal kunne brukes på
              alle type skjermer er viktig Og er
              nødvendig på sider nå om dagen
            </p>
          </td>
          <td>
            <h5>developer_mode</h5>
            <p>
              Og siden mesteparten av
              nettsider åpnes på telefon lager
              jeg egne design-planer for det
            </p>
          </td>
          <td>
            <h5>wallpaper</h5>
            <p>
              At nettsiden er pen er nesten like
              viktig som at den er funksjonell,
              jeg jobber for at alle skal bli tilfreds
            </p>
          </td>
          <td>
            <h5>style</h5>
            <p>
              Jeg er veldig opptatt av "material"
              design, og at sidene ser, og føles
              moderne
            </p>
          </td>
          <td>
            <h5>update</h5>
            <p>
              At sidene holder seg oppdaterte
              med de nyeste funksjonene, og
              er bra tilpasset nettleseren
            </p>
          </td>
          <td>
            <h5>forum</h5>
            <p>
              Kommunikasjon, at vi holder
              samtalen oppe, og at du kan følge
              hele prosessen til nettsiden.
            </p>
          </td>
        </table>

      </div>

    </div>
  </main>
  <?php
    include "../Elements/footer.php";
  ?>
</body>

</html>
