#!/usr/bin/env python
# -*- coding: utf-8 -*-

import yaml
import pyphen
dic = pyphen.Pyphen(lang='cs_CZ')

import re
#regday = re.compile('.*\.')
#regmonth = re.compile('\..*\.')

import time
currentday = int(time.strftime("%m"))*31+int(time.strftime("%d"))

mylist = []
mysecondlist = []

stream = open("data.yaml", "r")
docs = yaml.load_all(stream)
for doc in docs:
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
        mujtext=doc["text"].replace('---','&emdash;')
        rozdelena_slova=dic.inserted(mujtext).replace('- ',' ').replace('-.','.').replace('(-','(').replace(' -',' ').replace('quo-t;','quot;').replace('-','&shy;').replace('&em&shy;da&shy;sh;',' &mdash; ')
        optclass='normal'
        if u'zemřel' in doc["text"]:
            optclass='sad'
        if u'sebevraždu' in doc["text"]:
            optclass='sad'
        retezec="<div class='nohref %s'><a href='%s' class='fancybox-media'><img class='miniimg' src='public/mathevents/%s'>%s</a>.</div>"%(optclass,doc["zdroj"],doc["obrazek"],rozdelena_slova)
        mylist.append(( int(mesic)*31+int(den),doc["datum"],doc["jmeno"],retezec))


smylist=sorted(mylist, key=lambda polozka: polozka[0])

f = open('events_all.php','w')
f.write("<style>.sad{background-color:lightgray;} .nohref a {color:black;} .miniimg {margin-bottom:5px;}</style>\n<?php\n\n$sdeleniCZ=array();\n\n ")
for i in smylist:
    mysecondlist.append((i[1], i[2]))
    f.write("array_push($sdeleniCZ,\"%s\");"%i[3].encode('utf-8'))
    f.write("\n\n")
f.write("?>\n\n\n")
f.close

f = open('events_current.php','w')
count=0
f.write("<?php\n\n$sdeleniCZ=array();\n\n ")
for i in smylist:
    if i[0]<currentday+8 and currentday-5<i[0]:
        count = count+1
        f.write("array_push($sdeleniCZ,\"%s\");"%i[3].encode('utf-8'))
        f.write("\n\n")
f.write("?>\n\n\n")
f.close
print count," zaznamu"

#<style>.sad{background-color:lightgray;} .nohref a {color:black;} .miniimg {margin-bottom:5px;}</style>\n

if count<4:
    f = open('events_current.php','w')
    count=0
    f.write("<?php\n\n$sdeleniCZ=array();\n\n ")
    for i in smylist:
        if i[0]<currentday+14 and currentday-10<i[0]:
            count = count+1
            f.write("array_push($sdeleniCZ,\"%s\");"%i[3].encode('utf-8'))
            f.write("\n\n")
    f.write("?>\n\n\n")
    f.close
    print count," zaznamu ve druhem pruchode"



f = open('events_all.html','w')
f.write("<pre>\n")
for i in mysecondlist:
    f.write(("%s: %s\n\n"%(i[0], i[1])).encode('utf-8'))

f.write("</pre>\n")



f.close
    





