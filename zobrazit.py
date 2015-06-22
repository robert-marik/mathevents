#!/usr/bin/env python
# -*- coding: utf-8 -*-

import yaml
import pyphen
dic = pyphen.Pyphen(lang='cs_CZ')

import re
#regday = re.compile('.*\.')
#regmonth = re.compile('\..*\.')

mylist = []

stream = open("data.yaml", "r")
docs = yaml.load_all(stream)
for doc in docs:
    print "------------------------------"
#    for k,v in doc.items():
#        print k, "->", v
    datum=doc["datum"]
    matchObj = re.match( r'(.*)\.(.*)\.', datum, re.M|re.I)
    den=matchObj.group(1)
    mesic=matchObj.group(2)
#    den = regday.match(datum).group()
#    mesic = regmonth.match(datum).group()
    if 'lang' in doc:
        print "Anglicky"
    else:
        rozdelena_slova=dic.inserted(doc["text"]).replace('- ',' ').replace('-.','.').replace('(-','(').replace(' -',' ')
        optclass='normal'
        if u'zemřel' in doc["text"]:
            optclass='sad'
        retezec="<div class='%s'><a href='%s' class='fancybox-media'><img class='miniimg' src='public/mathevents/%s'>%s</a>.</div>"%(optclass,doc["zdroj"],doc["obrazek"],rozdelena_slova)
        mylist.append(( int(mesic)*31+int(den),doc["datum"],doc["jmeno"],retezec.replace('-','&shy;')))
    print "\n",


smylist=sorted(mylist, key=lambda polozka: polozka[0])

f = open('events_all.php','w')


f.write("<style>.sad{background-color:lightgray;}</style>\n<?php\n\n$sdeleniCZ=array();\n\n ")


for i in smylist:
    print i[1], i[2]
    f.write("array_push($sdeleniCZ,\"%s\");"%i[3].encode('utf-8'))
    f.write("\n\n")

f.write("?>")

f.close
    




