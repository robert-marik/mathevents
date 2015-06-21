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
        print "rozdelena slova -> ",dic.inserted(doc["text"]).replace('- ',' ').replace('-.','.').replace('(-','(').replace(' -',' ')
        mylist.append(( int(mesic)*31+int(den),doc["datum"],doc["jmeno"]))
    print "\n",


smylist=sorted(mylist, key=lambda polozka: polozka[0])

for i in smylist:
    print i[1], i[2]
