<script>
$("#envoyerCommentaire").click(function(){
	var id = $("#id").val();
	var user = $("#user").val();
	var commentaireActivite = $("#commentaireActivite").val();

	var annee   = now.getFullYear();
	var mois    = now.getMonth();
	var jour    = now.getDate();

	var date = jour + "/" + mois + "/" + annee;
		
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

		xhr.open('POST', 'modele/commentaireArticle.php', true);
		xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xhr.send('idActivite=' + idActivite + '&user=' + user +'&description=' + description + '&date=' + date);
});
</script>