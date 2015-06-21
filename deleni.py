#! /usr/bin/python
# -*- coding: utf-8 -*-

import sys

text=u'19. června 1852 se narodil Franz Trinks, vynikající německý inženýr, konstruktér kalkulaček Brunsviga. Stejný den o 229 let dříve se narodil Blaise Pascal, vynálezce jednoho z prvních digitálních počítacích strojů, Pascaliny.'

text=u'23. června 1912 se narodil Alan Turing</a>. Tento matematik přispěl rozhodující měrou k prolomení německých šifer během druhé světové války.'

text=u'28. června 2009 se odehrál Hawkingův večírek pro cestovatele časem. Pozvánky byly zveřejněny až po ukončení večírku. I přes bohaté občerstvení nikdo nepříšel...'

text=u'1. července 1646 se narodil Gottfried Wilhelm Leibniz, objevitel a tvůrce diferenciálního a integrálního počtu (současně s Newtonem, ale každý nezávisle na druhém).'

text=u'Úspěšný závěr školního roku a letního semestru všem uživatelům MAWu. Pěkné prázdniny a nashle v září.'

import pyphen
dic = pyphen.Pyphen(lang='cs_CZ')

zpracovany=dic.inserted(text).replace('- ',' ').replace('-.','.').replace('(-','(').replace(' -',' ')

print ""

print zpracovany

print ""

print zpracovany.replace('-','&shy;')

print ""

