<script>

$("#inscription").click(function(){
	var username = $("#email").val();
    var password = $("#password").val();
    var random = parseInt(Math.random() * 10000000000);
		
	//AJAX pour envoyer valeur dans base de données
	var xhr;
	try { 
		xhr = new XMLHttpRequest(); 
	}
	catch (e) {
		xhr = new ActiveXObject(Microsoft.XMLHTTP);
	}  
	xhr.onreadystatechange = function () {
	if (xhr.readyState == 4)
		if (xhr.status == 200){
			//alert('ok');
			console.log(xhr.responseText);	
		}
		//document.getElementById("mydiv").innerHTML=xhr.responseText;
		else
			alert(xhr.status);
		}

		xhr.open('POST', 'modele/inscription.php', true);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send('username=' + username + '&password=' + password +'&random=' + random);
});

$("#connexion").click(function(){
	var username = $("#email").val();
    var password = $("#password").val();
		
	//AJAX pour envoyer valeur dans base de données
	var xhr;
	try { 
		xhr = new XMLHttpRequest(); 
	}
	catch (e) {
		xhr = new ActiveXObject(Microsoft.XMLHTTP);
	}  
	xhr.onreadystatechange = function () {
	if (xhr.readyState == 4)
		if (xhr.status == 200){
			if(xhr.responseText == 1){
				document.location.href="profil.php";
			}
			else {
				alert('erreur authentification');
			}
				
		}
		//document.getElementById("mydiv").innerHTML=xhr.responseText;
		else
			alert(xhr.status);
		}

		xhr.open('POST', 'modele/connexion.php', true);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send('username=' + username + '&password=' + password);
});

</script>