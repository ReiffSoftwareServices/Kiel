function changeScaffold(){
	if (Number.isNaN(parseInt(document.getElementById("ScaffoldNumber").value))) {
			document.getElementById("subScaffold").value = ""
	} else {
	document.getElementById("subScaffold").value = Math.floor(document.getElementById("ScaffoldNumber").value).toString(10).concat(".1")
	}
}

function changeMeasurement(){
	var inputLValue = document.getElementById("inputL").value
	var inputBValue = document.getElementById("inputB").value
	var inputHValue = document.getElementById("inputH").value
	if (isNaN(inputLValue) || isNaN(inputBValue) || isNaN(inputHValue) || inputLValue==""||inputBValue=="" ||inputHValue=="") {
		document.getElementById("labelMeasurement").innerHTML = "Maße des Gerüstes eingeben in m."
	} else {
		document.getElementById("labelMeasurement").innerHTML = "Kubatur: " + inputLValue*inputBValue*inputHValue + " qm"
	}
	
}