<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
		<h5 class="card-title">Gerüst-Umbau</h5>
		<h6 class="card-subtitle mb-2 text-muted">Umbau eines bestehendes Gerüstes.</h6>
		<p class="card-text">
			<form action="{% url 'save_umbau' %}" method="post">
				{% csrf_token %}
				<div class="form-group">
					<select class="form-control" id="UmbauScaffoldNumber" placeholder="Firma Name" name="UmbauScaffoldNumber" onchange="changeScaffold()"><option>Gerüstnummer auswählen...</option>
					{% for g in geruestnummer_liste %}
					<option>{{ g.Geruestbezeichner }}</option>
					{% endfor %}
					</select>
					<small id="emailHelp" class="form-text text-muted">Gerüst welches umgebaut werden soll.</small>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="UmbauSubScaffold" name="UmbauSubScaffold" aria-describedby="emailHelp" placeholder="Bitte Hauptgerüst auswählen." readonly>
					<small id="emailHelp" class="form-text text-muted">Erweiterungsnummer.</small>
				</div>
				<div class="form-group">
					<div class="btn-group btn-group-toggle" data-toggle="buttons">
					  <label class="btn btn-secondary active">
						<input type="radio" name="options" id="option1" autocomplete="off" checked>Mit Material
					  </label>
					  <label class="btn btn-secondary">
						<input type="radio" name="options" id="option2" autocomplete="off">Ohne Material
					  </label>				  
					</div>
					<small id="emailHelp" class="form-text text-muted">Mit oder ohne Material.</small>
				</div>
				
				
				<div class="form-group">
					<button type="submit" class="btn btn-secondary">Umbau anmelden</button>
				</div>
			  
			</form>	
		</p>
	  </div>
	</div>
</div>