<?php
  if (isset($navclass) || isset($active)) {
    if (isset($active) == false) {
      $active = "";
    }
    switch ($active) {
      case 'Galleri':
        $gclass = "class='$navclass NavActive'";
        $oclass = "class='$navclass'";
        $kclass = "class='$navclass'";
        break;

      case 'OmMeg':
        $gclass = "class='$navclass'";
        $oclass = "class='$navclass NavActive'";
        $kclass = "class='$navclass'";
        break;

      case 'Kontakt':
        $gclass = "class='$navclass'";
        $oclass = "class='$navclass'";
        $kclass = "class='$navclass NavActive'";
        break;

      default:
        $gclass = "class='$navclass'";
        $oclass = "class='$navclass'";
        $kclass = "class='$navclass'";
        break;
    }

    echo "<a href='Galleri' target='_self' $gclass>Galleri</a>
    <a href='Om-meg' target='_self' $oclass>Om meg</a>
    <a href='Kontakt' target='_self' $kclass>Kontakt</a>";

  } else {

    echo "<a href='Galleri' target='_self'>Galleri</a>
    <a href='Om-meg' target='_self'>Om meg</a>
    <a href='Kontakt' target='_self'>Kontakt</a>";

  }
?>
