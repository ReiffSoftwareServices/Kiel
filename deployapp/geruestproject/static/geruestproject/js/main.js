function changeScaffold(){
	if (Number.isNaN(parseInt(document.getElementById("ErweiterungScaffoldNumber").value))) {
			document.getElementById("ErweiterungSubScaffold").value = "Bitte Hauptgerüst auswählen."
	} else {
	document.getElementById("ErweiterungSubScaffold").value = document.getElementById("ErweiterungScaffoldNumber").value.concat(".1")
	}
	
	if (Number.isNaN(parseInt(document.getElementById("UmbauScaffoldNumber").value))) {
		document.getElementById("UmbauSubScaffold").value = "Bitte Hauptgerüst auswählen."
	} else {
	document.getElementById("UmbauSubScaffold").value = document.getElementById("UmbauScaffoldNumber").value.concat(".1")
	}
	
}

function AufmassChangeScaffold(){
	if (Number.isNaN(parseInt(document.getElementById("AufmassScaffold").value))) {
		document.getElementById("AufmassL").selectedIndex = "L";
		document.getElementById("AufmassB").selectedIndex = "B";
		document.getElementById("AufmassH").selectedIndex = "H";		
	} else {
		document.getElementById("AufmassL").selectedIndex = document.getElementById("AufmassScaffold").selectedIndex;
		document.getElementById("AufmassB").selectedIndex = document.getElementById("AufmassScaffold").selectedIndex;
		document.getElementById("AufmassH").selectedIndex = document.getElementById("AufmassScaffold").selectedIndex;
	}
}

function changeInventar(){
	document.getElementById("AufmassInventarPreis1").selectedIndex = document.getElementById("AufmassInventarDropdown1").selectedIndex;
}

function updateMeasurementCalculation(){
	console.log("check")
	if (document.getElementById("AufmassInventarPreis1").selectedIndex == 1 || document.getElementById("AufmassInventarPreis1").selectedIndex == 2){
		value1 = document.getElementById("AufmassInventarPreis1").value
	} else if (document.getElementById("AufmassInventarPreis1").selectedIndex == 0){
		value1 = "Aufmaß des Gerüstes."
	}
	else {
		value1 = document.getElementById("L1").value * document.getElementById("B1").value * document.getElementById("H1").value * document.getElementById("n1").value * document.getElementById("AufmassInventarPreis1").value
	}		
	document.getElementById("label1").innerHTML = value1.toString().concat(" €")
}

function changeMeasurement(){
	var inputLValue = document.getElementById("inputL").value
	var inputBValue = document.getElementById("inputB").value
	var inputHValue = document.getElementById("inputH").value
	if (isNaN(inputLValue) || isNaN(inputBValue) || isNaN(inputHValue) || inputLValue==""||inputBValue=="" ||inputHValue=="") {
		document.getElementById("labelMeasurement").innerHTML = "Anmeldekubatur"
	} else {
		document.getElementById("labelMeasurement").innerHTML = "Anmeldekubatur ( " + Math.round(inputLValue*inputBValue*inputHValue*100, 2)/100 + "m<sup>3</sup> )"
	}
	
}