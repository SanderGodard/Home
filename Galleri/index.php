<?php
  $title = "Sander Godard | Galleri";
  include "../Elements/head.php";
?>

<body class="diamond">

  <?php
    $active = "Galleri";
    include "../Elements/nav.php";
    include "../Elements/mobilenav.php";
  ?>

  <main>

    <div id="GalleriModal" class="modal">

      <div class="modal-content">
        <span class="close" onclick="ModalOff()">&times;</span>
        <div class="LeftSide">

          <img src="../Images/Placeholder.png" alt="Modal Image" id="ModalImage">
          <div class="title">
            <h4 id="ModalTitle">Title</h4>
            <p id="ModalSubheader">put span here</p>
          </div>
        </div>
        <br>
        <div class="RightSide">

          <div class="info">
            <h5>Om prosjektet</h5><br>
            <p id="ModalInfo">put p here</p>
          </div>
          <div class="Button"><a href="#" target="_blank" class="ModalButton" id="ModalLink">Til nettsiden</a></div>
        </div>
      </div>

    </div>

    <!-- <div class="Background Line"></div>
    <div class="Background Triangle"></div>
    <div class="Background TriangleBottom"></div> -->

    <div class="Body">

      <h2>Galleri</h2>
      <a href="../#Next">
        <b class="Back" title="Gå tilbake">keyboard_backspace</b>
      </a>

      <p class="GalleriInfo">
        Her kan du se på prosjektene jeg har jobbet med før. Jeg liker å jobbe med alt fra enkle nettsider til webapplikasjoner.<br>
        Jeg designer, koder, tester og forbedrer alt du kan se på en nettside
      </p>
      <input type="text" name="Search" id="Search" placeholder="Søk..." onkeyup="SearchFunction()" maxlength="20" autofocus>
    </div>

    <div class="GalleriFlex" id="SearchList">

      <?php
        include "../Elements/projects.php";

        for ($i=0; $i < count($projects); $i++) {
          $name = $projects[$i]["name"];
          $link = $projects[$i]["link"];
          $short = $projects[$i]["short"];
          $long = $projects[$i]["long"];
          $partName = str_replace(" ", "", $name);
          // $partName = explode(" ", $name);
          // $partName = $partName[0];

          echo "<a class='Project' href='javascript:void(0)' id='$partName' onclick='ModalOn(" . '"' . $partName . '"' . ")'>
            <img src='./Images/$partName.png' alt='$name'>
            <div>
              <h3>$name</h3>
              <span>$short</span>
            </div>
            <!-- For the modal -->
            <p>$long</p>
            <i data-link='$link'>Hidden link</i>
          </a>";
        }
      ?>

    </div>

    <div class="air"></div>

  </main>
  <?php
    include "../Elements/footer.php";
  ?>
</body>

</html>
