<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
	    <div class="row">
	        <div class="col-8">
	            <h5 class="card-title">Planung</h5>
                <h6 class="card-subtitle mb-2 text-muted">Planung der Gerüste.</h6>
	        </div>
	        <div class="col-4">
	            <div class="form-group">
                  <input type="text" class="form-control" placeholder="{{ heute }}" title="Anmeldedatum: Datum von heute" readonly>
                  <small id="emailHelp" class="form-text text-muted">Bestelldatum</small>
                </div>
            </div>
	    </div>

		<p class="card-text">
			<form>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="123456789">
                <small id="emailHelp" class="form-text text-muted">OT-Nummer (Gerüstnummer)</small>
              </div>
              <div class="form-group">
                <select id="inputState" class="form-control" placeholder="Unit">
                    <option value="" disabled selected class="selectionPlaceholder"></option>
                    <option>TAB</option>
                    <option>HFX</option>
                    <option>PDC</option>
                    <option>COK</option>
                    <option>FIN</option>
                    <option>neu...</option>
                  </select>
                <small id="emailHelp" class="form-text text-muted">Anlage</small>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jahr-Monat-Tag-UNIT-ROH-XXX">
                <small id="emailHelp" class="form-text text-muted">FEB-Nummer</small>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mitarbeiter ACM">
                <small id="emailHelp" class="form-text text-muted">PU-Manager (Ansprechpartner)</small>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">

                    <select id="inputState" class="form-control">
                      <option value="" disabled selected class="selectionPlaceholder"></option>
                      <option>Gerüst</option>
                      <option>Rollgerüst</option>
                      <option>Hängegerüst</option>
                      <option>Regie</option>
                      <option>Absturzsicherung</option>
                    </select>
                    <small id="emailHelp" class="form-text text-muted">Gerüstart</small>
                  </div>
                  <div class="form-group col-md-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                      <label class="form-check-label" for="inlineCheckbox4">Intern</label>
                    </div>
                   </div>
                   <div class="form-group col-md-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="option5">
                      <label class="form-check-label" for="inlineCheckbox5">Extern</label>
                    </div>
                  </div>
                  <div class="form-group col-md-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                      <label class="form-check-label" for="inlineCheckbox6">Rund</label>
                    </div>
                  </div>
                </div>

              <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
                <small id="emailHelp" class="form-text text-muted">Beschreibung</small>
              </div>
              <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Koordinaten, bspw. A12">
                  <small id="emailHelp" class="form-text text-muted">Örtlichkeit</small>
                </div>
              <div class="form-group">
				<div class="input-group">
					<input id="PLinputL" type="text" class="form-control" placeholder="L" name="L" required onchange="changeMeasurementPlanning()" title="Länge in qm">
					<input id="PLinputB" type="text" class="form-control" placeholder="B" name="B" required onchange="changeMeasurementPlanning()" title="Breite in qm">
					<input id="PLinputH" type="text" class="form-control" placeholder="H" name="H" required onchange="changeMeasurementPlanning()" title="Höhe in qm">
					<input type="text" class="form-control" placeholder="Stellhöhe">
				</div>
				<small id="PLlabelMeasurement" class="form-text text-muted">Anmeldekubatur.</small>
			  </div>
			  <div class="form-group">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kolonne xy">
                <small id="emailHelp" class="form-text text-muted">Kolonne</small>
              </div>
			  <div class="form-group">
				<div class="input-group">
						<input type="text" class="form-control" placeholder="Montage Start">
						<input type="text" class="form-control" placeholder="Uhrzeit">
				</div>
				<small id="emailHelp" class="form-text text-muted">Nutzungsbeginn</small>
			  </div>
			  <div class="form-check">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="option6">
                <label class="form-check-label text-muted" for="inlineCheckbox6">Gerüstnummer generieren</label>
              </div>
			        <button type="submit" class="btn btn-secondary">Speichern</button>
			</form>
		</p>
	  </div>
	</div>
</div>
