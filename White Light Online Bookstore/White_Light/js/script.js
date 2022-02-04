function enableButton(){
	if(document.getElementById("set").checked){
		document.getElementById("confirm").disabled=false;
	}
	else{
		document.getElementById("confirm").disabled=true;
	}
}