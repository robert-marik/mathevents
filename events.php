<?php
$sdeleni_cz="Úspěš&shy;ný zá&shy;věr škol&shy;ní&shy;ho ro&shy;ku a let&shy;ní&shy;ho se&shy;mestru všem uži&shy;va&shy;te&shy;lům MAWu. Pěk&shy;né prázd&shy;ni&shy;ny a na&shy;shle v zá&shy;ří";
$sdeleni_en="Nice summer 2015 to all MAW users. Have a nice holidays.";


require_once("events_current.php");

shuffle($sdeleniCZ);
$sdeleni_czB="<small>".$sdeleniCZ[0]."</small>";
$sdeleni_czC="<small>".$sdeleniCZ[1]."</small>";

shuffle($sdeleniEN);
$sdeleni_enB="<small>".$sdeleniEN[0]."</small>";
$sdeleni_enC="<small>".$sdeleniEN[1]."</small>";

?>
