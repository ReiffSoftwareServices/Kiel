<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
		<h5 class="card-title">Gerüst-Erweiterung</h5>
		<h6 class="card-subtitle mb-2 text-muted">Erweiterung eines Gerüstes.</h6>
		<p class="card-text">
			<form>
				<div class="form-group">
					<select class="form-control" id="ErweiterungScaffoldNumber" placeholder="Firma Name" onchange="changeScaffold()"><option>Gerüstnummer auswählen...</option>
						{% for g in geruestnummer_liste %}
						<option>{{ g.Geruestbezeichner }}</option>
						{% endfor %}
					</select>
					<small id="emailHelp" class="form-text text-muted">Gerüst welches abgemeldet werden soll.</small>
				</div>
			  <div class="form-group">
				<input type="text" class="form-control" id="ErweiterungSubScaffold" aria-describedby="emailHelp" placeholder="Bitte Hauptgerüst auswählen." readonly>
				<small id="emailHelp" class="form-text text-muted">Erweiterungsnummer.</small>
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Abmelder">
				<small id="emailHelp" class="form-text text-muted">Name der Person welche das Gerüst abmeldet.</small>
			  </div>
			  <button type="submit" class="btn btn-secondary" disabled>Gerüsterweiterung anmelden</button>
			</form>	
		</p>
	  </div>
	</div>
</div>