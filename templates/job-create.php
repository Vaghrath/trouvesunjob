<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Create Job Listing</h2>
	<form method="post" action="create.php">
		<div class="form-group">
			<label>Companie</label>
			<input type="text" class="form-control" name="company">
		</div>
		<div class="form-group">
			<label>Categorie</label>
			<select class="form-control" name="category">
				<option value="0">Choose Category</option>
        		<?php foreach($categories as $category): ?>
        			<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        		<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Titre du Poste</label>
			<input type="text" class="form-control" name="job_title">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"></textarea>
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="location">
		</div>
		<div class="form-group">
			<label>Salaire</label>
			<input type="text" class="form-control" name="salary">
		</div>
		<div class="form-group">
			<label>Contacter l'utilisateur</label>
			<input type="text" class="form-control" name="contact_user">
		</div>
		<div class="form-group">
			<label>Contacter par Email</label>
			<input type="text" class="form-control" name="contact_email">
		</div>
		<input type="submit" class="btn btn-default" value="Soumettre" name="submit">
	</form>
<?php include 'inc/footer.php'; ?>