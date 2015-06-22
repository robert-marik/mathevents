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
    mujtext=doc["text"].replace('---','&emdash;')
    rozdelena_slova=dic.inserted(mujtext).replace('- ',' ').replace('-.','.').replace('(-','(').replace(' -',' ').replace('quo-t;','quot;').replace('-','&shy;').replace('&em&shy;da&shy;sh;',' &mdash; ')
    optclass='normal'
    if u'zemřel' in doc["text"]:
        optclass='sad'
    if u'sebevraždu' in doc["text"]:
        optclass='sad'
    if 'obrazek' in doc:
        obrazek=doc["obrazek"]
    else:
        obrazek=doc["jmeno"].rsplit(None, 1)[-1].lower()+".jpg"
    retezec="<div class='nohref %s'><a href='%s' class='fancybox-media'><img class='miniimg' src='public/mathevents/%s'>%s</a></div>"%(optclass,doc["zdroj"],obrazek,rozdelena_slova)
    retezec_en=""
    zdroj_en=doc["zdroj"]
    if 'zdroj_en' in doc:
        zdroj_en=doc["zdroj_en"]
    if 'text_en' in doc:
        rozdelena_slova_en=doc["text_en"]
        retezec_en="<div class='nohref %s'><a href='%s' class='fancybox-media'><img class='miniimg' src='public/mathevents/%s'>%s</a></div>"%(optclass,zdroj_en,obrazek,rozdelena_slova_en)
    mylist.append(( int(mesic)*31+int(den),doc["datum"],doc["jmeno"],retezec,retezec_en))


smylist=sorted(mylist, key=lambda polozka: polozka[0])

f = open('events_all.php','w')
f.write("<style>.sad{background-color:lightgray;} .nohref a {color:black;} .miniimg {margin-bottom:5px;}</style>\n<?php\n\n$sdeleniCZ=array();\n\n$sdeleniEN=array();\n\n")
for i in smylist:
    mysecondlist.append((i[1], i[2], i[4]))
    f.write("array_push($sdeleniCZ,\"%s\");"%i[3].encode('utf-8'))
    f.write("\n")
    if i[4]!="":
        f.write("array_push($sdeleniEN,\"%s\");"%i[4].encode('utf-8'))
    f.write("\n\n")
f.write("?>\n\n\n")
f.close

f = open('events_current.php','w')
fh = open('events_current.html','w')
count=0
f.write("<?php\n\n$sdeleniCZ=array();\n\n$sdeleniEN=array();\n\n ")
fh.write("<div class='vyroci'>\n")
for i in smylist:
    if i[0]<currentday+8 and currentday-5<i[0]:
        count = count+1
        f.write("array_push($sdeleniCZ,\"%s\");"%i[3].encode('utf-8'))
        if i[4]!="":
            f.write("\n\n")
            f.write("array_push($sdeleniEN,\"%s\");"%i[4].encode('utf-8'))
        f.write("\n\n")
    if i[0]<currentday+5 and currentday-2<i[0]:
        fh.write("<div class=jednapolozka>%s</div>\n"%i[3].encode('utf-8').replace("public/mathevents","http://um.mendelu.cz/maw-html/public/mathevents"))
f.write("?>\n\n\n")
fh.write("</div>")
f.close
fh.close
print count," zaznamu"

#<style>.sad{background-color:lightgray;} .nohref a {color:black;} .miniimg {margin-bottom:5px;}</style>\n

if count<4:
    f = open('events_current.php','w')
    count=0
    f.write("<?php\n\n$sdeleniCZ=array();\n\n$sdeleniEN=array();\n\n ")
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
    if i[2]!="":
        iseng=", (ENG)"
    else:
        iseng=""
    f.write(("%s: %s%s\n\n"%(i[0], i[1], iseng)).encode('utf-8'))
f.write("</pre>\n")



f.close
    





