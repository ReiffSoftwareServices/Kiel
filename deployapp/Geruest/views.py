from django.http import HttpResponse
from django.shortcuts import render
from geruestproject.models import Geruestbuch, Client, Projekt
from django.db.models import Max
from datetime import date

def index(request):
# GERÜSTANMELDUNG #
	#Gerüstnummer ermitteln
	if Geruestbuch.objects.all().count() < 1:
		new_scaffold_number = 1
	else:
		new_scaffold_number = Geruestbuch.objects.all().aggregate(Max('Geruestnummer'))  #check
		new_scaffold_number = int(new_scaffold_number["Geruestnummer__max"] + 1)
	firmen_list = Client.objects.order_by('id')[:10]
	print(firmen_list)
	#Nutzungsbeginn
	heute = date.today().strftime('%d.%m.%Y')
# GERÜSTABMELDUNG #
	geruestnummer_liste = Geruestbuch.objects.order_by('id')[:20]
	print(geruestnummer_liste)
	return render(request, 'interface/index.php', {'new_scaffold_number': new_scaffold_number, 'firmen_list' : firmen_list, 'heute' : heute, 'geruestnummer_liste' : geruestnummer_liste})	
	def design(request):
		return render(request, 'interface/index.php', {'wert': 'Eigener Text'})
		
def test(request):
	#wert = request.POST['choice']
	wert = request.POST['input1']
	return render(request, 'interface/test.php', {'wert': wert})
	
def test_form(request):
	wert2 = "jo"
	return render(request, 'interface/test_form.php', {'wert': wert2})

def save_anmeldung(request):	
	e = Client.objects.get(Company_Name=request.POST['firmenauswahl'])
	p = Projekt.objects.get(Project_Name="Projekt 1")
	q = Geruestbuch(\
	Projekt=p, Anforderer = request.POST['Anforderer'], Geruestnummer = request.POST['NeueGeruestnummer'], Firma = e, Ansprechpartner = request.POST['Ansprechpartner'], AnlageEquipment = request.POST['AnlageEquipment'], Ebene = request.POST['Ebene'], Oertlichkeit = request.POST['Oertlichkeit'], Grund = request.POST['Grund'],L = request.POST['L'], B= request.POST['B'], H = request.POST['H'], Nutzungsbeginn = request.POST['Nutzungsbeginn'] )
	q.save()
	wert = request.POST['Anforderer']
	wert = 'Gerüst erfolgreich angemeldet'
	return render(request, 'interface/pages/success.php', {'wert': request.POST['firmenauswahl']})
	
def save_abmeldung(request):	
	e = Client.objects.get(Company_Name=request.POST['firmenauswahl'])
	print(e)

	p = Projekt.objects.get(Project_Name="Projekt 1")
	q = Geruestbuch(\
	Projekt=p, Anforderer = request.POST['Anforderer'], Geruestnummer = request.POST['NeueGeruestnummer'], Firma = e, Ansprechpartner = request.POST['Ansprechpartner'], AnlageEquipment = request.POST['AnlageEquipment'], Ebene = request.POST['Ebene'], Oertlichkeit = request.POST['Oertlichkeit'], Grund = request.POST['Grund'],L = request.POST['L'], B= request.POST['B'], H = request.POST['H'], Nutzungsbeginn = request.POST['Nutzungsbeginn'] )
	q.save()
	wert = request.POST['Anforderer']
	wert = 'Gerüst erfolgreich angemeldet'
	return render(request, 'interface/pages/success.php', {'wert': request.POST['firmenauswahl']})