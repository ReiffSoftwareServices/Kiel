from django.contrib import admin

# Register your models here.

from .models import Client, Inventory, Project, Billing

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


admin.site.register(Inventory)



class ProjectAdmin(admin.ModelAdmin):

    list_display = ('Project', 'Project_Description','Date_ProjectEntry', 'Date_SignOff', 'Mietwochen', 'Preis','Status')
    #list_filter = ('Status', )


admin.site.register(Project, ProjectAdmin)

admin.site.register(Billing)
