from django.db import models
from django.db.models import F

# Create your models here.

from django import utils
from datetime import date
import random, string
# Create your models here.


class Client(models.Model):

    #Company
    Client = models.AutoField(primary_key = True)
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
        verbose_name_plural = 'Kunden'

    def __str__(self):
        return  '{}. {}'.format(self.Client, self.Company_Name)




class Inventory(models.Model):

    Inventory = models.AutoField(primary_key = True)
    Inventory_Name = models.CharField(max_length = 50, verbose_name= 'Bauteil')
    Inventory_Description = models.TextField(blank = True, verbose_name = 'Beschreibung')
    Price = models.DecimalField(max_digits = 7, decimal_places = 2, blank = True, null = True, verbose_name= 'Preis')


    class Meta:
        verbose_name_plural = 'Lager'

    def __str__(self):
        return '{}'.format(self.Inventory_Name)






class Project(models.Model):

    Project = models.AutoField(primary_key = True)
    Project_Client = models.ForeignKey(Client, on_delete= 'SET_NULL', verbose_name = 'Firma')
    Project_Description = models.TextField(blank = True, verbose_name = 'Projekt Beschreibung')

    # Dates
    Date_ProjectEntry = models.DateField(default = date.today(), verbose_name= 'Eingangsdatum')
    Date_Construction = models.DateField(blank = True, null = True, verbose_name= 'Aufbaudatum')
    Date_Dismant = models.DateField(blank = True, null = True, verbose_name= 'Abbaudatum')
    Date_SignOff = models.DateField(blank = True, null = True, verbose_name= 'Abmeldedatum')



    Project_Item = models.ForeignKey(Inventory, on_delete=  'SET_NULL', default = '1', verbose_name= 'Bauteil', related_name= 'Project_Item')
    Project_Kupplung = models.ForeignKey(Inventory, on_delete= 'SET_NULL', default = 1, verbose_name= 'Kupplung', related_name= 'Project_Kupplung')
    Project_Amount = models.IntegerField(blank= True, null = True,  verbose_name= 'Menge')






    class Meta:
        verbose_name_plural = 'Projekte'

    def __str__(self):
        return '{}, {}'.format(self.Project, self.Project_Client)

    # Calculates the Price
    @property
    def Preis(self):
        if self.Project_Amount is not None:
            return Inventory.objects.filter(Inventory_Name = self.Project_Item).values_list('Price', flat =True)[0]



    # Calculates the week
    @property
    def Mietwochen(self):
        if self.Date_SignOff is not None:
            time_diff = (self.Date_SignOff - self.Date_ProjectEntry).days
            return int(round(time_diff/7))
        else:
            return None


    # Get status
    @property
    def Status(self):
        if (self.Date_SignOff is not None) and (self.Date_SignOff < date.today()):
            return 'Abgeschlossen'
        else:
            return 'Laufend'




class Billing(models.Model):


    # Get invoice_number
    def code_generator(size = 5, chars = string.digits):
        return ''.join(random.choice(chars) for _ in range(size))



    #invoice = models.AutoField(primary_key = True)
    invoice_number = models.IntegerField(primary_key = True, default = code_generator(), verbose_name = 'Rechnugsnummer')
    invoice_client = models.ForeignKey(Project, on_delete = 'SET_NULL', blank = False, verbose_name = 'Kunde')




    class Meta:
        verbose_name_plural = 'Rechnungen'

    def __str__(self):
        return '{}, {}'.format(self.invoice_number)


    # # Get invoice_number
    # import random, string
    # def code_generator(size = 7, chars = string.digits):
    #     return ''.join(random.choice(chars) for _ in range(size))


    # def save(self, *args, **kwargs):
    #     self.invoice_number = code_generator(size = 7, chars = string.digits)
    #     super(Billing, self).save(*args, **kwargs)



























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
