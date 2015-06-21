<?php
$sdeleni_cz="Úspěšný závěr školního roku a letního semestru všem uživatelům MAWu. Pěkné prázdniny a nashle v září.";
$sdeleni_en="Nice summer 2015 to all MAW users. Have a nice holidays.";


$sdeleniCZ=array();
$sdeleniEN=array();

array_push($sdeleniCZ,"<a href='https://www.youtube.com/watch?v=dlkTFEz8Lz0' class='fancybox-media'><img class='miniimg' src='days/franz_trinks.jpg'>19. &shy;červ&shy;na&shy; 1852 &shy;se &shy;na&shy;ro&shy;di&shy;l Fran&shy;z Trinks, &shy;vy&shy;ni&shy;ka&shy;jí&shy;cí &shy;ně&shy;mec&shy;ký in&shy;že&shy;ný&shy;r, &shy;kon&shy;struk&shy;té&shy;r &shy;kal&shy;ku&shy;la&shy;ček Brun&shy;svi&shy;ga&shy;. S&shy;tej&shy;ný &shy;de&shy;n o 229 le&shy;t d&shy;ří&shy;ve &shy;se &shy;na&shy;ro&shy;di&shy;l Blai&shy;se &shy;Pas&shy;ca&shy;l, &shy;vy&shy;ná&shy;lez&shy;ce jed&shy;no&shy;ho &shy;z &shy;prv&shy;ních &shy;di&shy;gi&shy;tál&shy;ních &shy;po&shy;čí&shy;ta&shy;cích stro&shy;jů, &shy;Pas&shy;ca&shy;li&shy;ny.</a>.");

array_push($sdeleniCZ,"<a href='http://www.zive.cz/clanky/alan-turing-genius-ktery-matematicky-stvoril-pocitac/sc-3-a-177926/default.aspx'  class='fancybox-media'> <img class='miniimg' src='days/turing.jpg'>23. &shy;červ&shy;na&shy; 1912 &shy;se &shy;na&shy;ro&shy;di&shy;l A&shy;la&shy;n Tu&shy;rin&shy;g</a&shy;>. &shy;Ten&shy;to &shy;ma&shy;te&shy;ma&shy;ti&shy;k &shy;při&shy;spě&shy;l roz&shy;ho&shy;du&shy;jí&shy;cí mě&shy;rou&shy; &shy;k &shy;pro&shy;lo&shy;me&shy;ní &shy;ně&shy;mec&shy;kých &shy;ši&shy;fer bě&shy;hem dru&shy;hé&shy; svě&shy;to&shy;vé&shy; &shy;vál&shy;ky.");

array_push($sdeleniCZ,"<a href='https://www.youtube.com/watch?v=elah3i_WiFI' class='fancybox-media'> <img class='miniimg' src='public/mathevents/hawking.jpg'>28. &shy;červ&shy;na&shy; 2009 &shy;se o&shy;de&shy;hrál Ha&shy;w&shy;kin&shy;gův &shy;ve&shy;čí&shy;rek &shy;pro&shy; &shy;ces&shy;to&shy;va&shy;te&shy;le &shy;ča&shy;sem. &shy;Po&shy;zván&shy;ky&shy; by&shy;ly&shy; &shy;zve&shy;řej&shy;ně&shy;ny&shy; a&shy;ž &shy;po u&shy;kon&shy;če&shy;ní &shy;ve&shy;čír&shy;ku&shy;. I &shy;pře&shy;s &shy;bo&shy;ha&shy;té&shy; ob&shy;čer&shy;stve&shy;ní &shy;ni&shy;kdo &shy;ne&shy;pří&shy;šel...");

array_push($sdeleniCZ,"<a href='https://cs.wikipedia.org/wiki/Gottfried_Wilhelm_Leibniz'> <img class='miniimg' src='public/mathevents/leibniz.jpg'>1. &shy;čer&shy;ven&shy;ce 1646 &shy;se &shy;na&shy;ro&shy;di&shy;l &shy;Gottf&shy;ried Wi&shy;l&shy&shy;;hel&shy;m Leib&shy;ni&shy;z, ob&shy;je&shy;vi&shy;tel a&shy; tvůr&shy;ce &shy;di&shy;fe&shy;ren&shy;ci&shy;ál&shy;ní&shy;ho a&shy; in&shy;te&shy;grál&shy;ní&shy;ho &shy;počtu&shy; (&shy;sou&shy;čas&shy;ně s &shy;New&shy;to&shy;nem, a&shy;le &shy;kaž&shy;dý &shy;ne&shy;zá&shy;visle &shy;na&shy; dru&shy;hém).");


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
