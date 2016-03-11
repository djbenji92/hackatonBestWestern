<aside>
<!-- seulement sur la page parent communité: -->
<div class="sidebar_parent_community">
	<h4>Rechercher un <span class="brand">groupe</span></h4>
	<form action="#" id="SEARCH_COMMUNITY" method="GET">
		<p>Qu'aimez-vous faire dans nos hôtels?</p>
		<p>
			<input type="text" name="search_com" id="search_com" placeholder="Ex: SPA, Sport...">
			<button type="submit" class="ion-search"></button>
		</p>
	</form>
</div>
<div class="sidebar_child_activity_add">
	<a href="create_community.php" class="button">Créer une communauté</a>
</div>


<!-- seulement sur la page parent hotels: -->
<div class="sidebar_parent_community">
	<h4>Rechercher un <span class="brand">hôtel</span></h4>
	<form action="#" id="SEARCH_COMMUNITY" method="GET">
		<p>
			<input type="text" name="search_com" id="search_com" placeholder="Saisissez une ville, un pays...">
			<button type="submit" class="ion-search"></button>
		</p>
	</form>
</div>

<!-- seulement sur la page d'une communauté: -->
<div class="sidebar_child_community_members">
	<h4>Membres de la <span class="brand">communauté</span></h4>
	<ul>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
		<li><a href="/user/" title="[User Name]"><img src="#"></a></li>
	</ul>
</div>

<!-- seulement sur la page enfant (la single, le permalink) activité: -->
<div class="sidebar_child_activity">
	<h4><span class="brand">Hotel</span> à proximité</h4>
	<a href="page_type_hotel.php">
		<img src="#" alt="Hôtel Saint George">
	</a>
	<p>
		<strong>Hôtel Saint-George</strong>
		<a href="page_type_hotel.php" class="button">Voir l'hôtel</a>
	</p>
</div>
<div class="sidebar_child_activity_add">
	<a href="share_xp.php" class="button">Partagez votre expérience</a>
	<a href="share_xp_image.php" class="button">Partagez une photo</a>
</div>


<!-- seulement sur la page ajouter une activité: -->
<div class="sidebar_child_activity">
	<h4>Activité</h4>
	<a href="page_type_activity.php">
		<img src="#" alt="Activité blablablbal">
	</a>
	<p>
		<strong>[Activity Name]</strong>
		<a href="page_type_hotel.php" class="button">Voir l'activité</a>
	</p>
</div>




<!--filtres actualité type:-->
<div class="sidebar_activity">
	<h4><span class="brand">Filtrer</span> les résultats par catégorie</h4>
	<p>
		<span class="switch_label">Voir seulement les acitivités disponible autour de moi</span>
		<span class="switch">
            <input id="cmn-toggle-1" class="cmn-toggle cmn-toggle-round" type="checkbox" checked>
            <label for="cmn-toggle-1"></label>
		</span>
	</p>
	<form action="#" method="GET" id="FILTER_RESULT">
        <ul>
        	<li>
	        	<label for="restauration">Restauration</label>
	        	<input type="checkbox" id="restauration" class="parent_toggle">
	        	<ol>
	        		<li>
			        	<label for="italien">Italien</label>
			        	<input type="checkbox" id="italien">
		        	</li>
	        		<li>
			        	<label for="francais">Français</label>
			        	<input type="checkbox" id="francais">
		        	</li>
	        		<li>
			        	<label for="libanais">Libanais</label>
			        	<input type="checkbox" id="libanais">
		        	</li>
	        		<li>
			        	<label for="japonais">Japonais</label>
			        	<input type="checkbox" id="japonais">
		        	</li>
	        		<li>
			        	<label for="chinois">Chinois</label>
			        	<input type="checkbox" id="chinois">
		        	</li>
	        		<li>
			        	<label for="marocain">Marocain</label>
			        	<input type="checkbox" id="marocain">
		        	</li>
	        		<li>
			        	<label for="mexicain">Mexicain</label>
			        	<input type="checkbox" id="mexicain">
		        	</li>
	        	</ol>
        	</li>
        	<li>
	        	<label for="sport">Sport</label>
	        	<input type="checkbox" id="sport" class="parent_toggle">
	        	<ol>
		        	<li>
			        	<label for="parcs">Parcs d'exercices</label>
			        	<input type="checkbox" id="parcs">
		        	</li>
		        	<li>
			        	<label for="salles">Salles de sport</label>
			        	<input type="checkbox" id="salles">
		        	</li>
	        		<li>
			        	<label for="autres">Autres sports</label>
			        	<input type="checkbox" id="autres">
		        	</li>
	        	</ol>
	        </li>
        	<li>
	        	<label for="shopping">Shopping</label>
	        	<input type="checkbox" id="shopping" class="parent_toggle">
	        	<ol>
	        		<li>
			        	<label for="mode">Mode et beauté</label>
			        	<input type="checkbox" id="mode">
		        	</li>
	        		<li>
			        	<label for="souvenirs">Souvenirs</label>
			        	<input type="checkbox" id="souvenirs">
		        	</li>
	        		<li>
			        	<label for="maison">Maison</label>
			        	<input type="checkbox" id="maison">
		        	</li>
	        	</ol>
	        </li>
        	<li>
	        	<label for="tourisme">Tourisme</label>
	        	<input type="checkbox" id="tourisme" class="parent_toggle">
	        	<ol>
	        		<li>
			        	<label for="musee">Musées</label>
			        	<input type="checkbox" id="musee">
		        	</li>
	        		<li>
			        	<label for="monuments">Monuments</label>
			        	<input type="checkbox" id="monuments">
		        	</li>
	        		<li>
			        	<label for="quartiers">Quartiers</label>
			        	<input type="checkbox" id="quartiers">
		        	</li>
	        		<li>
			        	<label for="cabarets">Cabarets</label>
			        	<input type="checkbox" id="cabarets">
		        	</li>
	        		<li>
			        	<label for="sorties">Sorties</label>
			        	<input type="checkbox" id="sorties">
		        	</li>
	        	</ol>
        	</li>
        	<li>
	        	<label for="nuit">La nuit</label>
	        	<input type="checkbox" id="nuit" class="parent_toggle">
	        	<ol>
	        		<li>
			        	<label for="restaurant">Restaurants</label>
			        	<input type="checkbox" id="restaurant">
		        	</li>
	        		<li>
			        	<label for="clubs">Clubs/boites de nuits</label>
			        	<input type="checkbox" id="clubs">
		        	</li>
	        		<li>
			        	<label for="visites">Visites</label>
			        	<input type="checkbox" id="visites">
		        	</li>
	        	</ol>
	        </li>
        </ul>
	</form>
</div>



<!-- seulement sur la page parente activité: -->
<a href="add_activity.php" class="button">Ajouter une activité</a>

<!--page hôtel type:-->

<div class="sidebar_hotel">
	<h4>Services</h4>
	<ul>
		<li class="toggle_links">
			<a href="#"><span class="ion-location active"></span> J'y ai séjourné</a>
		</li>
		<li class="toggle_links">
			<a href="#"><span class="ion-heart"></span> Ajouter aux hôtels favoris</a>
		</li>
		<li>
			<a href="http://book.bestwestern.com/bestwestern/selectRoom.do" target="_blank"><span class="ion-map"></span> Réserver un séjour</a>
		</li>
	</ul>
</div>

</aside>