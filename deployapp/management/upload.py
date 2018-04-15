### This file is used to upload files to the database ###

import csv, sys, os, django

path = 'C:/Users/hayerj/Desktop/Kiel/Geruest/'
sys.path.append(path)

os.environ['DJANGO_SETTINGS_MODULE'] = 'Geruest.settings'


django.setup() ## This needs to be loaded for module which are not in django. See instructions.

from geruestproject.models import Inventory, Client

with open('C:/Users/hayerj/Desktop/Kiel/Upload.csv') as f:
    reader = csv.reader(f, delimiter = ',')
    for row in reader:

        p = Inventory(Item_Id = row[0],
                    Name= row[1],
                    Price= row[2])
        p.save()
