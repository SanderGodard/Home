<?php
if (isset($active)) {

  switch ($active) {
    case 'Galleri':
      $gclass = "class='active'";
      $oclass = "";
      $kclass = "";
      break;

    case 'OmMeg':
      $gclass = "";
      $oclass = "class='active'";
      $kclass = "";
      break;

      case 'Kontakt':
      $gclass = "";
      $oclass = "";
      $kclass = "class='active'";
      break;

    default:
      $gclass = "";
      $oclass = "";
      $kclass = "";
      break;
  }

echo "<div class='MobileNav' id='MobileNav'>
        <a href='Galleri' $gclass>Galleri</a>
        <a href='Om-meg' $oclass>Om meg</a>
        <a href='Kontakt' $kclass>Kontakt</a>
      </div>";
//<!-- Fiks active check -->
} else {
  echo "<div class='MobileNav' id='MobileNav'>
          <a href='Galleri'>Galleri</a>
          <a href='Om-meg'>Om meg</a>
          <a href='Kontakt'>Kontakt</a>
        </div>";
}

?>
