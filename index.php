<?php
  // https://www.youtube.com/watch?v=UPslzEo_gkM
  $title = "Sander Godard | Hjem";
  include "Elements/head.php";
?>

<body id="indexBody" onload="fixWidth()">

  <?php
    $navclass = "";
    include "Elements/header.php";
    include "Elements/nav.php";
    include "Elements/mobilenav.php";
  ?>

  <main id="home">
<!--
    <div class="Background Line"></div>
    <div class="Background Triangle"></div>-->

    <div class="GalleriPart">
      <div class="Body">
        <h1><a href="Galleri">Galleri</a></h1>

        <div class="sliderattempt2">

          <span class="SideArrow Material" id="LeftArrow" onclick="Scroll('-')">keyboard_arrow_left</span>
          <div class="Slides" id="Slider">

            <?php
              include "Elements/projects.php";

              for ($i=0; $i < count($projects); $i++) {
                $name = $projects[$i]["name"];
                $link = $projects[$i]["link"];
                $short = $projects[$i]["short"];
                $long = $projects[$i]["long"];
                $partName = str_replace(" ", "", $name);
                // $partName = explode(" ", $name);
                // $partName = $partName[0];

                echo "<a class='Project' href='Galleri$partName' id='$partName'>
                  <img src='Images/$partName.png' alt='$name'>
                  <div>
                    <h3>$name</h3>
                    <span>$short</span>
                  </div>
                </a>";
              }
            ?>

            <div class="" id="CarouselSpacer">.</div>

          </div>

          <span class="SideArrow Material" id="RightArrow" onclick="Scroll('+')">keyboard_arrow_right</span>


        </div>


      </div>
      <a href="Galleri" class="ToBtn">Til galleri</a>
    </div>

    <div class="Body">


      <div class="TableOfThings White">
        <h1>Mitt fokus når jeg lager nettsider:</h1>
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
      <a href="Om-meg" class="ToBtn" style="display: block;">Mer om meg</a>

    </div>


    <div class="Banner" style="margin: 30vh 0 0">
      <div class="Body">
        <br>
        <b>Hvis du vil ta kontakt kan du trykke her</b>
        <a target="_blank" href="mailto:sander@godard.no"><span class="Material">mail</span> Send E-post</a>

        <a href="javascript:void(0)" onclick="SMSfunc()" id="SMS"><span class="Material">message</span> Send SMS</a><br>

        <!--
          <a href="javascript:void(0)" onclick="document.getElementById('TelefonNr').style.display = 'Block'" id="RightBtn"><span class="Material">message</span> Send SMS</a><br>

          <i id="TelefonNr">+47 901 89 461</i>
        -->
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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
