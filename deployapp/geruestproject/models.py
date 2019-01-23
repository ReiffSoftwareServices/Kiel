from django.db import models
from datetime import date
from django import utils
import random, string
import numpy as np

class Client(models.Model):
    #Company
    Company_Name   = models.CharField(max_length = 50, blank = True, verbose_name = 'Firma')
    Company_Email = models.EmailField(max_length = 254, blank= True, verbose_name = 'Firma Email')
    Company_Phone = models.CharField(max_length = 20, blank = True, verbose_name = 'Telefon Firma')
    Company_PostalCode = models.CharField(max_length = 6, blank = True, verbose_name = 'Postleitzahl')
    Company_City = models.CharField(max_length = 20, blank = True, verbose_name = 'Stadt')
    Company_Street = models.CharField(max_length = 20, blank = True, verbose_name = 'Strasse')

    #Company Contact
    Contact_LastName = models.CharField(max_length = 50, blank = True,  verbose_name = 'Nachname')
    Contact_FirstName = models.CharField(max_length = 50, blank = True, verbose_name = 'Vorname')
    Contact_Email = models.EmailField(max_length =254, blank = True, verbose_name = 'Email Ansprechpartner')
    Contact_Phone = models.CharField(max_length = 20, blank = True, verbose_name = 'Telefon Ansprechpartner')

    class Meta:
        verbose_name_plural = 'Firmen'

    def __str__(self):
        return  '{}'.format(self.Company_Name)



class Inventar(models.Model):
	Leistungsposition = models.DecimalField(max_digits = 7, decimal_places = 2, blank = True, null = True, verbose_name= 'LV Positionsnummer')
	Name = models.CharField(max_length = 50, verbose_name= 'LV Positionsname')
	Einheit= models.CharField(max_length= 50, verbose_name= 'Einheit')
	Beschreibung = models.TextField(blank = True, verbose_name = 'Beschreibung')
	Preis = models.DecimalField(max_digits = 7, decimal_places = 2, blank = True, null = True, verbose_name= 'Preis') ## Not sure whether they can be zero!

	# Miete
	Einheit_Miete= models.CharField(max_length= 50, verbose_name= 'Einheit Miete')
	Beschreibung_Miete= models.CharField(max_length= 50, verbose_name= 'Beschreibung Miete')
	Preis_Miete= models.DecimalField(max_digits= 7, decimal_places= 2, blank= True, null= True, verbose_name= 'Preis Miete')


	class Meta:
		verbose_name_plural = 'Leistungsverzeichnis'

	def __str__(self):
		return '{}'.format(self.Name)


class Projekt(models.Model):

    ''' Table just for creating the project name '''

    Project_Name= models.CharField(max_length= 50, primary_key= True, verbose_name= 'Projekt Name')

    class Meta:
        verbose_name_plural= 'Projekte'

    def __str__(self):
        return '{}'.format(self.Project_Name)


class Geruestbuch(models.Model):
	Projekt = models.ForeignKey(Projekt, on_delete= 'PROTECT', verbose_name= 'Projekt')
	Geruestbezeichner = models.CharField(max_length= 50, blank= True, verbose_name = 'Gerüstbezeichner')
	Status = models.CharField(max_length= 50, blank= True, null = True, verbose_name = 'Status')
	Anforderer = models.CharField(max_length= 50, blank= True, verbose_name = 'PU-Manager')
	Firma = models.ForeignKey(Client, on_delete= 'PROTECT', verbose_name = 'Firma')
	Ansprechpartner = models.CharField(max_length= 50, blank= True, verbose_name = 'Ansprechpartner')
	AnlageEquipment = models.CharField(max_length= 50, blank= True, verbose_name = 'Anlage / Equipment')
	Ebene = models.CharField(max_length= 50, blank= True, verbose_name = 'Ebene')
	Oertlichkeit = models.CharField(max_length= 50, blank= True, verbose_name = 'Örtlichkeit')
	Grund = models.CharField(max_length= 50, blank= True, verbose_name = 'Grund')
	L = models.DecimalField(max_digits= 12, decimal_places= 2, blank= True, null = True, verbose_name = 'Länge')
	B = models.DecimalField(max_digits= 12, decimal_places= 2, blank= True, null = True, verbose_name = 'Breite')
	H = models.DecimalField(max_digits= 12, decimal_places= 2, blank= True, null = True, verbose_name = 'Höhe')
	Anmeldedatum = models.DateField(default = date.today(), verbose_name= 'Anmeldedatum')
	Nutzungsbeginn = models.CharField(max_length= 50, blank= True, verbose_name= 'Nutzungsbeginn')
	Abmelder = models.CharField(max_length= 50, blank= True, verbose_name = 'Abmelder')
	Abmeldedatum = models.CharField(max_length= 10, blank= True, null = True, verbose_name = 'Abmeldedatum')
	
	class Meta:
		verbose_name_plural= 'Gerüste'

	def __str__(self):
		return '{}'.format(self.Geruestbezeichner)



	





class Equipments(models.Model):

    '''
    Equipment per Geruestnummer
    '''

    Geruestnummer= models.ForeignKey(Geruestbuch, on_delete= 'SET_NULL', verbose_name= 'Geruestnummer')
    Equipment= models.ForeignKey(Inventar, on_delete= 'SET_NULL', verbose_name= 'Inventar')

    #Metrics
    Laenge= models.DecimalField(max_digits= 7, decimal_places= 2, blank= True, null= True, verbose_name= 'Laenge')
    Breite= models.DecimalField(max_digits= 7, decimal_places= 2, blank= True, null= True, verbose_name= 'Breite')
    Hoehe= models.DecimalField(max_digits= 7, decimal_places= 2, blank= True, null= True, verbose_name= 'Hoehe')
    Stueck= models.DecimalField(max_digits= 7, decimal_places= 2, blank= True, null= True, verbose_name= 'Stueck')
    Stunde= models.DecimalField(max_digits= 7, decimal_places= 2, blank= True, null= True, verbose_name= 'Stunde')


    class Meta:
        verbose_name_plural= 'Equipment'


# Don't delete!



    # def save(self, *args, **kwargs):
    #     #print('Verbucht')
    #     Inventory.objects.filter(Item = 1.10).update(Amount = F('Amount') - self.Project_Amount)
    #
    #     super(Project, self).save(*args, **kwargs)




    ### This works
    # @property
    # def In_Stock(self):
    #    a = Inventory.objects.get(Item = 1.10) # However, if put here something like Item = self.Item, does not work.
    #    return a







