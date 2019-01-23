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

function changeInventar(){
	document.getElementById("AufmassInventarPreis1").selectedIndex = document.getElementById("AufmassInventarDropdown1").selectedIndex;
	document.getElementById("AufmassInventarPreis2").selectedIndex = document.getElementById("AufmassInventarDropdown2").selectedIndex;
	document.getElementById("AufmassInventarPreis3").selectedIndex = document.getElementById("AufmassInventarDropdown3").selectedIndex;
}
function updateMeasurementCalculation(){
	console.log("check")
	
	var value1 = document.getElementById("L1").value * document.getElementById("B1").value * document.getElementById("H1").value * document.getElementById("n1").value * document.getElementById("AufmassInventarPreis1").value
	var value2 = document.getElementById("L2").value * document.getElementById("B2").value * document.getElementById("H2").value * document.getElementById("n2").value * document.getElementById("AufmassInventarPreis2").value
	var value3 = document.getElementById("L3").value * document.getElementById("B3").value * document.getElementById("H3").value * document.getElementById("n3").value * document.getElementById("AufmassInventarPreis3").value
	document.getElementById("label1").innerHTML = value1.toString().concat(" €")
	document.getElementById("label2").innerHTML = value2.toString().concat(" €")
	document.getElementById("label3").innerHTML = value3.toString().concat(" €")
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