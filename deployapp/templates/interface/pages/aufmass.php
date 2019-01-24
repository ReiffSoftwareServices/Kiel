<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
		<h5 class="card-title">Aufma&szligkontrolle</h5>
		<h6 class="card-subtitle mb-2 text-muted">Kontrolle der Aufmaße.</h6>
		<p class="card-text">
			<form>
			  <div class="form-group">
				<select class="form-control" id="AufmassScaffold" placeholder="Firma Name" onchange="AufmassChangeScaffold()"><option>Gerüstnummer auswählen...</option>
				{% for g in geruestnummer_liste %}
				<option>{{ g.Geruestbezeichner }}</option>
				{% endfor %}
				</select>
				<small id="emailHelp" class="form-text text-muted">Gerüst für das die Aufmaßkontrolle erfolgt.</small>
			  </div>
			  <div class="form-group">
				<div class="input-group">
					<select class="form-control" id="AufmassL" placeholder="L" disabled>
						<option>L</option>
						{% for g in geruestnummer_liste %}
						<option>{{ g.L }}</option>
						{% endfor %}
					</select>
					<select class="form-control" id="AufmassB" placeholder="B" disabled>
						<option>B</option>
						{% for g in geruestnummer_liste %}
						<option>{{ g.B }}</option>
						{% endfor %}
					</select>
					<select class="form-control" id="AufmassH" placeholder="H" disabled>
						<option>H</option>
						{% for g in geruestnummer_liste %}
						<option>{{ g.H }}</option>
						{% endfor %}
					</select>
				</div>
				<small id="emailHelp" class="form-text text-muted">Geplantes Aufmaß bei der Anmeldung.</small>
			  </div>
			  <div class="form-group">
				<div class="input-group">
					<select class="form-control" id="AufmassInventarDropdown1" placeholder="Leistungsposition..." onchange="changeInventar();updateMeasurementCalculation()">
						<option>Bitte Leistungsposition wählen...</option>
						{% for inventar in leistungsverzeichnis %}						
						<option>{{ inventar }}</option>
						{% endfor %}
					</select>
					<select class="form-control" id="AufmassInventarPreis1" placeholder="Preis" disabled>
						<option>Preis...</option>
						{% for inventar in leistungsverzeichnis %}						
						<option>{{ inventar.Preis }}</option>
						{% endfor %}
					</select>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="L" id="L1" onchange="updateMeasurementCalculation()">
					<input type="text" class="form-control" placeholder="B" id="B1" onchange="updateMeasurementCalculation()">
					<input type="text" class="form-control" placeholder="H" id="H1" onchange="updateMeasurementCalculation()">
					<input type="text" class="form-control" placeholder="Anzahl" id="n1" onchange="updateMeasurementCalculation()">
				</div>
				<small id="label1" class="form-text text-muted">Aufmaß des Gerüstes.</small>
			  </div>			  
			  <button type="submit" class="btn btn-secondary" disabled>Speichern</button>
			</form>	
		</p>
	  </div>
	</div>
</div>