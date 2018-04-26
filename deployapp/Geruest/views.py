from django.http import HttpResponse
from django.shortcuts import render

def index(request):
	return render(request, 'interface/index.php', {'wert': 'Eigener Text'})
	
	
	def design(request):
		return render(request, 'interface/index.php', {'wert': 'Eigener Text'})