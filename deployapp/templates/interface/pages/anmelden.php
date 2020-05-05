<div class="container mt-4">
	<div class="card">
	  <div class="card-body">
			<form action="{% url 'save_anmeldung' %}" method="post">
			    <div class="row">
			        <div class="col-8">
                        <h5 class="card-title">Gerüst-Freigabe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Freigabe eines neuen Gerüstes.</h6>
                    </div>
                    <div class="col-4">
                        <div class="form-group" >
                            <input type="text" class="form-control" placeholder="{{ heute }}" title="Anmeldedatum: Datum von heute" readonly>
                            <small id="emailHelp" class="form-text text-muted">Freigabedatum</small>
                        </div>
                    </div>
			    </div>
			<p class="card-text">
				{% csrf_token %}			  
			  <div class="form-group" >
			    <div class="input-group">
			        <select id="inputState" class="form-control" placeholder="OT-Nummer">
                        <option value="OT-Nummer" disabled selected class="selectionPlaceholder"></option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                    <select id="inputState" class="form-control" placeholder="FEB-Nummer">
                        <option value="OT-Nummer" disabled selected class="selectionPlaceholder"></option>
                        <option>2020-01-20-UNIT-ROH-001</option>
                        <option>20-01-20-UNIT-ROH-002</option>
                        <option>20-03-11-UNIT-AAA-123</option>
                    </select>

				</div>
				<small id="emailHelp" class="form-text text-muted">OT-Nummer (Gerüstnummer) oder FEB-Nummer auswählen</small>
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


			  <button type="submit" class="btn btn-secondary">Gerüst anmelden</button>
			 </p>
			</form>	

	  </div>
	</div>
</div>
