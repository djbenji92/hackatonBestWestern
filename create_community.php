<?php include 'includes/header.inc.php'; include 'includes/sidebar.inc.php';?>
<section id="group_add" class="with_sidebar">
<h2>Devenez social,</h2>
<h1>Créez votre communauté</h1>
<article>
<form id="CREATE_COMMUNITY" class="write_forms" action="#" method="POST">
	<input type="hidden" name="creation_date" value="[DATE]">
	<label for="COMMUNITY_NAME">Nom de votre communauté:</label>
	<input type="text" name="COMMUNITY_NAME" placeholder="Nom de votre communauté" id="COMMUNITY_NAME">
	<label>Description de la communauté:</label>
	<?php include 'includes/form.inc.php'; ?>
</form>
</article>
</section>
<?php include 'includes/footer.inc.php'; ?>