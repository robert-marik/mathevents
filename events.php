<?php
$sdeleni_cz="Úspěšný závěr školního roku a letního semestru všem uživatelům MAWu. Pěkné prázdniny a nashle v září.";
$sdeleni_en="Nice summer 2015 to all MAW users. Have a nice holidays.";


$sdeleniCZ=array();
$sdeleniEN=array();

array_push($sdeleniCZ,"<a href='https://www.youtube.com/watch?v=dlkTFEz8Lz0' class='fancybox-media'><img class='miniimg' src='days/franz_trinks.jpg'>19. června 1852 se narodil Franz Trinks, vynikající německý inženýr, konstruktér kalkulaček Brunsviga.</a> Stejný den o 229 let dříve se narodil Blaise Pascal, vználezce jednoho z prvních digitálních počítacích strojů, <a href='https://www.youtube.com/watch?v=3h71HAJWnVU' class='fancybox-media'>Pascaliny</a>.");
array_push($sdeleniCZ,"<a href='http://www.zive.cz/clanky/alan-turing-genius-ktery-matematicky-stvoril-pocitac/sc-3-a-177926/default.aspx'  class='fancybox-media'> <img class='miniimg' src='days/turing.jpg'>23. června 1912 se narodil Alan Turing</a>. Tento matematik přispěl rozhodující měrou k prolomení německých šifer během druhé světové války.");
array_push($sdeleniCZ,"<a href='https://www.youtube.com/watch?v=elah3i_WiFI' class='fancybox-media'> <img class='miniimg' src='public/mathevents/hawking.jpg'>28. června 2009 se odehrál Hawkingův večírek pro cestovatele časem. Pozvánky byly zveřejněny až po ukončení večírku. I přes bohaté občerstvení nikdo nepříšel...");
array_push($sdeleniCZ,"<a href='https://cs.wikipedia.org/wiki/Gottfried_Wilhelm_Leibniz'> <img class='miniimg' src='public/mathevents/leibniz.jpg'>1. července 1646 se narodil Gottfried Wilhelm Leibniz, objevitel a tvůrce diferenciálního a integrálního počtu (současně s Newtonem, ale každý nezávisle na druhém).");


array_push($sdeleniEN,"<small><a href='https://www.youtube.com/watch?v=dlkTFEz8Lz0'  class='fancybox-media'><img class='miniimg' src='days/franz_trinks.jpg'>Franz Trinks, born June 19, 1852. He was an outstanding German engineer, leader of the developement of Brunsviga calculators.</a> Blais Pascal, inventor of the computing machine <a href='https://www.youtube.com/watch?v=3h71HAJWnVU' class='fancybox-media'>Pascaline</a> was born on the same day, 229 years before Trinks.</small>");

array_push($sdeleniEN,"<small><a href='http://www.bbc.co.uk/timelines/z8bgr82'><img  class='miniimg' src='days/turing.jpg'>Alan Turing, born June 23 1912</a>, father of the modern computing science. Can a machine think?</small>");

array_push($sdeleniEN,"<a href='https://www.youtube.com/watch?v=elah3i_WiFI' class='fancybox-media'> <img class='miniimg' src='public/mathevents/hawking.jpg'>On June 28, 2009, Stephen Hawking hosted a party for <b>future time travelers</b>.  He didn’t tell anyone about his plans until after it was over.");

array_push($sdeleniEN,"<a href='https://en.wikipedia.org/?title=Gottfried_Wilhelm_Leibniz'> <img class='miniimg' src='public/mathevents/leibniz.jpg'>G. W. Leibniz born on July 1, 1646 - a German mathematician who developed the present day notation for the differential and integral calculus though he never thought of the derivative as a limit. His philosophy is also important and he invented an early calculating machine.");



shuffle($sdeleniCZ);
$sdeleni_czB="<small>".$sdeleniCZ[0]."</small>";
$sdeleni_czC="<small>".$sdeleniCZ[2]."</small>";

shuffle($sdeleniEN);
$sdeleni_enB="<small>".$sdeleniEN[0]."</small>";
$sdeleni_enC="<small>".$sdeleniEN[2]."</small>";

?>
