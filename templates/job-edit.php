<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Edition du Contenu</h2>
	<form method="post" action="edit.php?id=<?php echo $job->id; ?>">
		<div class="form-group">
			<label>Companie</label>
			<input type="text" class="form-control" name="company" value="<?php echo $job->company; ?>">
		</div>
		<div class="form-group">
			<label>Categorie</label>
			<select class="form-control" name="category">
				<option value="0">Choisies une Catégorie</option>
        		<?php foreach($categories as $category): ?>
        			<?php if($job->category_id == $category->id) : ?>
        				<option value="<?php echo $category->id; ?>" selected><?php echo $category->name; ?></option>
				<?php else : ?>
					<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
				<?php endif; ?>
        		<?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Poste</label>
			<input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title; ?>">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea class="form-control" name="description"><?php echo $job->description; ?></textarea>
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="location" value="<?php echo $job->location; ?>">
		</div>
		<div class="form-group">
			<label>Salaire</label>
			<input type="text" class="form-control" name="salary" value="<?php echo $job->salary; ?>">
		</div>
		<div class="form-group">
			<label>Contacter l'utilisateur</label>
			<input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user; ?>">
		</div>
		<div class="form-group">
			<label>Contacter par Email</label>
			<input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email; ?>">
		</div>
		<input type="submit" class="btn btn-default" value="Soumettre" name="submit">
	</form>
<?php include 'inc/footer.php'; ?>