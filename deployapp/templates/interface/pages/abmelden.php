<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
			<form action="{% url 'save_abmeldung' %}" method="post">
			<div class="row">
                <div class="col-8">
                    <h5 class="card-title">Gerüst-Abmeldung</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Abmeldung eines Gerüstes.</h6>
                </div>
                <div class="col-4">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="{{ heute }}" title="Anmeldedatum: Datum von heute" readonly>
                      <small id="emailHelp" class="form-text text-muted">Abmeldedatum</small>
                    </div>
                </div>
            </div>
            <p class="card-text">
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
			  <button type="submit" class="btn btn-secondary">Gerüst abmelden</button>
			</form>	
		</p>
	  </div>
	</div>
</div>
