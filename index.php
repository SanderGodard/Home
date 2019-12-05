<?php
  // https://www.youtube.com/watch?v=UPslzEo_gkM
  $title = "Sander Godard | Hjem";
  include "Elements/head.php";
?>

<body id="indexBody" class="triangle" onload="fixWidth()">

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

                echo "
                  <div class='Divider' id='CarouselSpacer'>.</div>
                  <a class='Project' href='Galleri/#$partName' id='$partName'>
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

    <div class="Body" style="margin-bottom: 30vh">


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


    <?php
      include "Elements/banner.php";
    ?>

  </main>
  <?php
  include "Elements/footer.php";
  ?>
</body>

</html>
