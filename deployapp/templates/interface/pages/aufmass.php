<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
		<h5 class="card-title">Aufma&szligkontrolle</h5>
		<h6 class="card-subtitle mb-2 text-muted">Kontrolle der Aufmaße.</h6>
		<p class="card-text">
			<form>
			  <div class="form-group">
				<select class="form-control" id="exampleFormControlSelect1" placeholder="Firma Name"><option>Gerüstnummer auswählen...</option>
				{% for g in geruestnummer_liste %}
				<option>{{ g.Geruestbezeichner }}</option>
				{% endfor %}
				</select>
				<small id="emailHelp" class="form-text text-muted">Gerüst für das die Aufmaßkontrolle erfolgt.</small>
			  </div>
			  <div class="form-group">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="L">
					<input type="text" class="form-control" placeholder="B">
					<input type="text" class="form-control" placeholder="H">
				</div>
				<small id="emailHelp" class="form-text text-muted"> Aufmaß des Hauptgerüstes.</small>
			  </div>
			  <div class="form-group">
				<div class="input-group">
					<select class="form-control" id="AufmassInventarDropdown1" placeholder="Leistungsposition..." onchange="changeInventar()">
						{% for inventar in leistungsverzeichnis %}
						<option>{{ inventar }}</option>
						{% endfor %}
					</select>
					<select class="form-control" id="AufmassInventarPreis1" placeholder="Preis" disabled>
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
				<small id="label1" class="form-text text-muted">Aufmaß 1 des Gerüstes</small>
			  </div>
			  <div class="form-group">
				<div class="input-group">
					<select class="form-control" id="AufmassInventarDropdown2" placeholder="Leistungsposition..." onchange="changeInventar()">
						{% for inventar in leistungsverzeichnis %}
						<option>{{ inventar }}</option>
						{% endfor %}
					</select>
					<select class="form-control" id="AufmassInventarPreis2" placeholder="Preis" disabled>
						{% for inventar in leistungsverzeichnis %}
						<option>{{ inventar.Preis }}</option>
						{% endfor %}
					</select>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="L" id="L2" onchange="updateMeasurementCalculation()">
					<input type="text" class="form-control" placeholder="B" id="B2" onchange="updateMeasurementCalculation()">
					<input type="text" class="form-control" placeholder="H" id="H2" onchange="updateMeasurementCalculation()">
					<input type="text" class="form-control" placeholder="Anzahl" id="n2" onchange="updateMeasurementCalculation()">
				</div>
				<small id="label2" class="form-text text-muted">Aufmaß 2 des Gerüstes</small>
			  </div>
			  <div class="form-group">
				<div class="input-group">
					<select class="form-control" id="AufmassInventarDropdown3" placeholder="Leistungsposition..." onchange="changeInventar()">
						{% for inventar in leistungsverzeichnis %}
						<option>{{ inventar }}</option>
						{% endfor %}
					</select>
					<select class="form-control" id="AufmassInventarPreis3" placeholder="Preis" disabled>
						{% for inventar in leistungsverzeichnis %}
						<option>{{ inventar.Preis }}</option>
						{% endfor %}
					</select>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="L" id="L3" onchange="updateMeasurementCalculation()">
					<input type="text" class="form-control" placeholder="B" id="B3" onchange="updateMeasurementCalculation()">
					<input type="text" class="form-control" placeholder="H" id="H3" onchange="updateMeasurementCalculation()">
					<input type="text" class="form-control" placeholder="Anzahl" id="n3" onchange="updateMeasurementCalculation()">
				</div>
				<small id="label3" class="form-text text-muted">Aufmaß 3 des Gerüstes</small>
			  </div>
			  
			  <button type="submit" class="btn btn-secondary" disabled>Speichern</button>
			</form>	
		</p>
	  </div>
	</div>
</div>