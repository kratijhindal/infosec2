function ajax{
	if(window.XMLHttpRequest){
		//google chrome,mozila opera and other
	new XMLHttpRequest();//XMLHttpRequest retrive data from server
	}else{
		//with internet explorer
		new ActiveXObject('Microsoft.XMLHTTP');
	}
	
	xml.onreadystatechange = function()
	{
		if(xml.readyState == 200 && xml.Status == 4){
			document.getElementById('display').innerHTML = xml.responseText;
		}
	}	
	
	xml.open('GET','shakil.php',true);
	xml.send();
	
	
	
	
	
	
}//iwxnx enaomx