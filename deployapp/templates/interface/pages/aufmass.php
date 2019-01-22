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
				<option>{{ g.Geruestnummer }}</option>
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
				<select class="form-control" id="exampleFormControlSelect1" placeholder="Firma Name"><option>Position aus LV wählen...</option><option>m³ Raumgerüst 2 kN/m²   LK 3</option><option>m³ Raumgerüst 2 kN/m²  LK 3 Miete</option><option>m³ Raumgerüst 3 kN/m²   LK 4</option><option>...</option></select>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="L">
					<input type="text" class="form-control" placeholder="B">
					<input type="text" class="form-control" placeholder="H">
					<input type="text" class="form-control" placeholder="Anzahl">
				</div>
				<small id="emailHelp" class="form-text text-muted">Aufmaß 1 des Gerüstes</small>
			  </div>
			  <div class="form-group">
				<div class="input-group">
				<select class="form-control" id="exampleFormControlSelect1" placeholder="Leistungsposition...">
				{% for inventar in leistungsverzeichnis %}
				<option>{{ inventar }}</option>
				{% endfor %}
				</select>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="L">
					<input type="text" class="form-control" placeholder="B">
					<input type="text" class="form-control" placeholder="H">
					<input type="text" class="form-control" placeholder="Anzahl">
				</div>
				<small id="emailHelp" class="form-text text-muted">Aufmaß 2 des Gerüstes</small>
			  </div>
			  <div class="form-group">
				<div class="input-group">
				<select class="form-control" id="exampleFormControlSelect1" placeholder="Firma Name"><option>Position aus LV wählen...</option><option>m³ Raumgerüst 2 kN/m²   LK 3</option><option>m³ Raumgerüst 2 kN/m²  LK 3 Miete</option><option>m³ Raumgerüst 3 kN/m²   LK 4</option><option>...</option></select>
				</div>
				<div class="input-group">
					<input type="text" class="form-control" placeholder="L">
					<input type="text" class="form-control" placeholder="B">
					<input type="text" class="form-control" placeholder="H">
					<input type="text" class="form-control" placeholder="Anzahl">
				</div>
				<small id="emailHelp" class="form-text text-muted">Aufmaß 3 des Gerüstes</small>
			  </div>
			  
			  <button type="submit" class="btn btn-secondary">Speichern</button>
			</form>	
		</p>
	  </div>
	</div>
</div>