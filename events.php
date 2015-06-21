<?php
$sdeleni_cz="Úspěš&shy;ný zá&shy;věr škol&shy;ní&shy;ho ro&shy;ku a let&shy;ní&shy;ho se&shy;mestru všem uži&shy;va&shy;te&shy;lům MAWu. Pěk&shy;né prázd&shy;ni&shy;ny a na&shy;shle v zá&shy;ří";
$sdeleni_en="Nice summer 2015 to all MAW users. Have a nice holidays.";


$sdeleniCZ=array();
$sdeleniEN=array();

array_push($sdeleniCZ,"<a href='https://www.youtube.com/watch?v=dlkTFEz8Lz0' class='fancybox-media'><img class='miniimg' src='days/franz_trinks.jpg'>19. červ&shy;na 1852 se na&shy;ro&shy;di&shy;l Fran&shy;z Trinks, vy&shy;ni&shy;ka&shy;jí&shy;cí ně&shy;mec&shy;ký in&shy;že&shy;ný&shy;r, kon&shy;struk&shy;té&shy;r kal&shy;ku&shy;la&shy;ček Brun&shy;svi&shy;ga&shy;. S&shy;tej&shy;ný de&shy;n o 229 le&shy;t d&shy;ří&shy;ve se na&shy;ro&shy;di&shy;l Blai&shy;se Pas&shy;ca&shy;l, vy&shy;ná&shy;lez&shy;ce jed&shy;no&shy;ho z prv&shy;ních di&shy;gi&shy;tál&shy;ních po&shy;čí&shy;ta&shy;cích stro&shy;jů, Pas&shy;ca&shy;li&shy;ny.</a>.");

array_push($sdeleniCZ,"<a href='http://www.zive.cz/clanky/alan-turing-genius-ktery-matematicky-stvoril-pocitac/sc-3-a-177926/default.aspx'  class='fancybox-media'> <img class='miniimg' src='days/turing.jpg'>23. červ&shy;na 1912 se na&shy;ro&shy;di&shy;l A&shy;la&shy;n Tu&shy;rin&shy;g</a&shy;>. Ten&shy;to ma&shy;te&shy;ma&shy;ti&shy;k při&shy;spě&shy;l roz&shy;ho&shy;du&shy;jí&shy;cí mě&shy;rou k pro&shy;lo&shy;me&shy;ní ně&shy;mec&shy;kých ši&shy;fer bě&shy;hem dru&shy;hé svě&shy;to&shy;vé vál&shy;ky.");

array_push($sdeleniCZ,"<a href='https://www.youtube.com/watch?v=elah3i_WiFI' class='fancybox-media'> <img class='miniimg' src='public/mathevents/hawking.jpg'>28. červ&shy;na 2009 se o&shy;de&shy;hrál Ha&shy;w&shy;kin&shy;gův ve&shy;čí&shy;rek pro ces&shy;to&shy;va&shy;te&shy;le ča&shy;sem. Po&shy;zván&shy;ky by&shy;ly zve&shy;řej&shy;ně&shy;ny a&shy;ž po u&shy;kon&shy;če&shy;ní ve&shy;čír&shy;ku&shy;. I pře&shy;s bo&shy;ha&shy;té ob&shy;čer&shy;stve&shy;ní ni&shy;kdo ne&shy;pří&shy;šel...");

array_push($sdeleniCZ,"<a href='https://cs.wikipedia.org/wiki/Gottfried_Wilhelm_Leibniz'> <img class='miniimg' src='public/mathevents/leibniz.jpg'>1. čer&shy;ven&shy;ce 1646 se na&shy;ro&shy;di&shy;l Gottf&shy;ried Wil&shy;helm Leib&shy;ni&shy;z, ob&shy;je&shy;vi&shy;tel a tvůr&shy;ce di&shy;fe&shy;ren&shy;ci&shy;ál&shy;ní&shy;ho a in&shy;te&shy;grál&shy;ní&shy;ho počtu (a sou&shy;čas&shy;ně s New&shy;to&shy;nem, a&shy;le kaž&shy;dý ne&shy;zá&shy;visle na dru&shy;hém).");


array_push($sdeleniEN,"<a href='https://www.youtube.com/watch?v=dlkTFEz8Lz0'  class='fancybox-media'><img class='miniimg' src='days/franz_trinks.jpg'>Franz Trinks, born June 19, 1852. He was an outstanding German engineer, leader of the developement of Brunsviga calculators.</a> Blais Pascal, inventor of the computing machine <a href='https://www.youtube.com/watch?v=3h71HAJWnVU' class='fancybox-media'>Pascaline</a> was born on the same day, 229 years before Trinks.");

array_push($sdeleniEN,"<a href='http://www.bbc.co.uk/timelines/z8bgr82'><img  class='miniimg' src='days/turing.jpg'>Alan Turing, born June 23 1912</a>, father of the modern computing science. Can a machine think?");

array_push($sdeleniEN,"<a href='https://www.youtube.com/watch?v=elah3i_WiFI' class='fancybox-media'> <img class='miniimg' src='public/mathevents/hawking.jpg'>On June 28, 2009, Stephen Hawking hosted a party for <b>future time travelers</b>.  He didn’t tell anyone about his plans until after it was over.");

array_push($sdeleniEN,"<a href='https://en.wikipedia.org/?title=Gottfried_Wilhelm_Leibniz'> <img class='miniimg' src='public/mathevents/leibniz.jpg'>G. W. Leibniz born on July 1, 1646 - a German mathematician who developed the present day notation for the differential and integral calculus though he never thought of the derivative as a limit. His philosophy is also important and he invented an early calculating machine.");



shuffle($sdeleniCZ);
$sdeleni_czB="<small>".$sdeleniCZ[0]."</small>";
$sdeleni_czC="<small>".$sdeleniCZ[2]."</small>";

shuffle($sdeleniEN);
$sdeleni_enB="<small>".$sdeleniEN[0]."</small>";
$sdeleni_enC="<small>".$sdeleniEN[2]."</small>";

?>
