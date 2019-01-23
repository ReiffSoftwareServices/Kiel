from django.contrib import admin

# Register your models here.

from .models import Client, Inventar, Projekt, Geruestbuch, Equipments
class ClientAdmin(admin.ModelAdmin):

    list_display = ('Company_Name', 'Contact_LastName')
    fieldsets = (
                    ('Unternehmen', {
                                    'fields' : ('Company_Name', ('Company_City', 'Company_PostalCode', 'Company_Street'), ('Company_Email', 'Company_Phone'))}),
                    ('Ansprechpartner', {
                                    'fields' : (('Contact_LastName', 'Contact_FirstName'), ('Contact_Email', 'Contact_Phone'))})
                )
    search_fields = ('Company_Name', 'Contact_LastName')


admin.site.register(Client, ClientAdmin)



admin.site.register(Inventar)
admin.site.register(Projekt)



class EquipmentsInline(admin.TabularInline):
    model= Equipments

class GeruestbuchAdmin(admin.ModelAdmin):
    inlines= [
              EquipmentsInline,
              ]
    list_display= ('Geruestbezeichner', 'Status', 'Anforderer', 'Firma', 'Ansprechpartner', 'AnlageEquipment', 'Ebene', 'Oertlichkeit', 'Grund', 'Anmeldedatum', 'Nutzungsbeginn', 'Abmeldedatum', )
    raw_id_fields= ('Projekt', )
    list_filter= ('Projekt', )

admin.site.register(Geruestbuch, GeruestbuchAdmin)
