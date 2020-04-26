from django.http import HttpResponse
from django.shortcuts import render
from geruestproject.models import Geruestbuch, Client, Projekt, Inventar
from django.db.models import Max
from datetime import date

def index(request):
# GERÜSTANMELDUNG #
	#Gerüstnummer ermitteln
	if Geruestbuch.objects.all().count() < 1:
		new_scaffold_number = 1
	else:
		new_scaffold_number = Geruestbuch.objects.all().aggregate(Max('Geruestbezeichner'))  #check
		tmp = new_scaffold_number["Geruestbezeichner__max"].split(".")
		tmp = tmp[0]
		print(tmp)
		new_scaffold_number = int(tmp) + 1
	firmen_list = Client.objects.order_by('id')[:100]
	print(firmen_list)
	#Nutzungsbeginn
	heute = date.today().strftime('%d.%m.%Y')
# GERÜSTABMELDUNG #
	geruestnummer_liste = Geruestbuch.objects.filter(Positionsart="Hauptgerüst").order_by('id')[:100]
	print(geruestnummer_liste)
# AUFMASSKONTROLLE #
	leistungsverzeichnis = Inventar.objects.order_by('id')[:200]
# DASHBOARD
	hourWidth = 12.5
	barHeight = 75/5
	dashboard_data = {
		'svgHeight': 300,
		'svgWidth': 100,
		'svgColorBg': 'white',
		'svgColorLine': 'blue',
		'axe': [
			{'x1': (1 - 1) * 100 / 8, 'x2': (1 - 1) * 100 / 8, 'y1': '100%', 'y2': '0%', 'color': 'red'},
			{'x1': (2 - 1) * 100 / 8, 'x2': (2 - 1) * 100 / 8, 'y1': '100%', 'y2': '0%', 'color': 'red'},
			{'x1': (3 - 1) * 100 / 8, 'x2': (3 - 1) * 100 / 8, 'y1': '100%', 'y2': '0%', 'color': 'red'},
			{'x1': (4 - 1) * 100 / 8, 'x2': (4 - 1) * 100 / 8, 'y1': '100%', 'y2': '0%', 'color': 'red'},
			{'x1': (5 - 1) * 100 / 8, 'x2': (5 - 1) * 100 / 8, 'y1': '100%', 'y2': '0%', 'color': 'red'},
			{'x1': (6 - 1) * 100 / 8, 'x2': (6 - 1) * 100 / 8, 'y1': '100%', 'y2': '0%', 'color': 'red'},
			{'x1': (7 - 1) * 100 / 8, 'x2': (7 - 1) * 100 / 8, 'y1': '100%', 'y2': '0%', 'color': 'red'},
			{'x1': (8 - 1) * 100 / 8, 'x2': (8 - 1) * 100 / 8, 'y1': '100%', 'y2': '0%', 'color': 'red'}
		],
		'dataTransformed': [
			{'x': hourWidth*2, 'y': '5%', 'width': '100', 'height': '100'},
			{'x': '5%', 'y': '5%', 'width': '100', 'height': '100'}
		]
	}
	return render(request, 'interface/index.php', {'new_scaffold_number': new_scaffold_number, 'firmen_list' : firmen_list, 'heute' : heute, 'geruestnummer_liste' : geruestnummer_liste, 'leistungsverzeichnis': leistungsverzeichnis, 'dashboard_data': dashboard_data})
	
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
	x = int(request.POST['NeueGeruestnummer'])
	print(x)
	q = Geruestbuch(\
	Projekt=p, Anforderer = request.POST['Anforderer'], Geruestbezeichner = x, Firma = e,Ansprechpartner = request.POST['Ansprechpartner'], AnlageEquipment = request.POST['AnlageEquipment'], Ebene = request.POST['Ebene'], Oertlichkeit = request.POST['Oertlichkeit'], Grund = request.POST['Grund'],L = request.POST['L'], B= request.POST['B'], H = request.POST['H'], Nutzungsbeginn = request.POST['Nutzungsbeginn'], Status = "Angemeldet", Positionsart ="Hauptgerüst" )
	q.save()
	wert = 'Gerüst erfolgreich angemeldet'
	return render(request, 'interface/pages/success.php', {'wert': wert})
	
	
def save_abmeldung(request):
	geruestnummer = request.POST['AbmeldungGeruestnummer']
	abmelder = request.POST['Abmelder']
	abmeldedatum = request.POST['Abmeldedatum']
	t = Geruestbuch.objects.get(Geruestbezeichner=geruestnummer)
	t.Abmeldedatum = abmeldedatum
	t.Abmelder = abmelder
	t.Status = "Abgemeldet"
	t.Positionsart ="Umbau"
	t.save()
	wert = 'Gerüst erfolgreich abgemeldet'
	return render(request, 'interface/pages/success.php', {'wert': wert})
	
def save_umbau(request):
	print("check")
	geruestnummer = request.POST['UmbauScaffoldNumber']
	erweiterung = request.POST['UmbauSubScaffold']	
	t = Geruestbuch.objects.get(Geruestbezeichner=geruestnummer)
	t.id = None
	t.Geruestbezeichner = erweiterung
	t.save()
	wert = 'Gerüstumbau erfolgreich angemeldet.'
	return render(request, 'interface/pages/success.php', {'wert': wert})
