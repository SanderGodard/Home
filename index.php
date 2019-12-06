<?php
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


      <?php
        include "Elements/fokus.php";
      ?>
      
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
