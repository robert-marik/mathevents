#!/usr/bin/env python
# -*- coding: utf-8 -*-

import yaml
import pyphen
dic = pyphen.Pyphen(lang='cs_CZ')

stream = open("data.yaml", "r")
docs = yaml.load_all(stream)
for doc in docs:
    print "------------------------------"
    for k,v in doc.items():
        print k, "->", v
    if 'lang' in doc:
        print "Anglicky"
    else:
        print "rozdelena slova -> ",dic.inserted(doc["text"]).replace('- ',' ').replace('-.','.').replace('(-','(').replace(' -',' ')
    print "\n",

