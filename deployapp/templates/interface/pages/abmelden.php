<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
		<h5 class="card-title">Gerüst-Abmeldung</h5>
		<h6 class="card-subtitle mb-2 text-muted">Abmeldung eines Gerüstes.</h6>
		<p class="card-text">
			<form action="{% url 'save_abmeldung' %}" method="post">
			{% csrf_token %}	
			  <div class="form-group">
				<select class="form-control" id="AbmeldungGeruestnummer" placeholder="Firma" Name="AbmeldungGeruestnummer"><option>Gerüstnummer auswählen...</option>
				{% for g in geruestnummer_liste %}
				<option>{{ g.Geruestbezeichner }}</option>
				{% endfor %}
				</select>
				<small id="emailHelp" class="form-text text-muted">Gerüst welches abgemeldet werden soll.</small>
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" Name="Abmelder" aria-describedby="emailHelp" placeholder="Abmelder">
				<small id="emailHelp" class="form-text text-muted">Name der Person welche das Gerüst abmeldet.</small>
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" Name="Abmeldedatum" aria-describedby="emailHelp" value="{{ heute }}" title="Abmeldedatum: Datum von heute." readonly>
				<small id="emailHelp" class="form-text text-muted">Datum zu welchem das Gerüst abgemeldet wird.</small>
			  </div>
			  <button type="submit" class="btn btn-secondary">Gerüst abmelden</button>
			</form>	
		</p>
	  </div>
	</div>
</div>