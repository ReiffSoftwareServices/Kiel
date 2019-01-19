<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
		<h5 class="card-title">Gerüst-Anmeldung</h5>
		<h6 class="card-subtitle mb-2 text-muted">Anmeldung eines neuen Gerüstes.</h6>
		<p class="card-text">
			<form action="{% url 'save_anmeldung' %}" method="post">
				{% csrf_token %}
			  <div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Name der Person, welche das Gerüst anfordert." name="Anforderer">
				<small id="emailHelp" class="form-text text-muted">Anforderer</small>
			  </div>
			  <div class="form-group" >
				<input type="text" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Gerüstnummer" name="NeueGeruestnummer" value="{{ new_scaffold_number }}" readonly>
				<small id="emailHelp" class="form-text text-muted">Gerüstnummer</small>
			  </div>
			  <div class="form-group">
				<select class="form-control" id="exampleFormControlSelect1" placeholder="Firma Name" name="firmenauswahl">	
				{% for firma in firmen_list %}
				<option>{{ firma }}</option>
				{% endfor %}
				</select>
				<small id="emailHelp" class="form-text text-muted">Firma auswählen, welche das Gerüst anfordert.</small>
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmailX" aria-describedby="emailHelp" placeholder="Ansprechpartner" name="Ansprechpartner">
				<small id="emailHelp" class="form-text text-muted">Ansprechpartner für die Bestellung in der Firma.</small>
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmailX" aria-describedby="emailHelp" placeholder="Anlage/Equipment" name="AnlageEquipment">
				<small id="emailHelp" class="form-text text-muted">Anlagenarten wie xy.</small>
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmailX" aria-describedby="emailHelp" placeholder="Ebene" name="Ebene">
				<small id="emailHelp" class="form-text text-muted">Eben in m oder Ebenennummer eingeben.</small>
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmailX" aria-describedby="emailHelp" placeholder="Örtlichkeit" name="Oertlichkeit">
				<small id="emailHelp" class="form-text text-muted">Koordinaten wie beispielsweise A12.</small>
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" id="exampleInputEmailX" aria-describedby="emailHelp" placeholder="Grund" name="Grund">
				<small id="emailHelp" class="form-text text-muted">Kurze Begründung warum das Gerüst angefordert wird.</small>
			  </div>
			  <div class="form-group">
				
				<div class="input-group">
					<input type="text" class="form-control" placeholder="L" name="L" required>
					<input type="text" class="form-control" placeholder="B" name="B" required>
					<input type="text" class="form-control" placeholder="H" name="H" required>
				</div>
				<small id="emailHelp" class="form-text text-muted">Maße des Gerüstes.</small>
			  </div>
			  <div class="form-group">
				<div class="input-group">
						<input type="text" class="form-control" placeholder="{{ heute }}">
						<input type="text" class="form-control" placeholder="Nutzungsbeginn" name="Nutzungsbeginn">
				</div>
				<small id="emailHelp" class="form-text text-muted">Zeitrum in dem das Gerüst genutzt wird.</small>
			  </div>
			  <button type="submit" class="btn btn-secondary">Gerüst anmelden</button>
			</form>	
		</p>
	  </div>
	</div>
</div>