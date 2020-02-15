<?php include __DIR__ . '/../_header.php' ?>

<h1>Add new book</h1>

<form method="post">
	<table>
		<tr>
			<td>Title</td>
			<td>
				<input type="text" name="title" size="100" required>
			</td>
		</tr>
		<tr>
			<td>Price</td>
			<td>
				<input type="number" min="0" max="1000" step="0.1" size="4"  name="price" required>
			</td>
		</tr>
		<tr>
			<td>Description</td>
			<td>
				<textarea name="description" required></textarea>
			</td>
		</tr>
		<tr>
		<tr>
			<td>Authors</td>
			<td>
				<select name="authors[]" multiple>
					<?php foreach ($authors as $author): ?>
						<option value="<?php echo $author['id'] ?>">
							<?php echo $author['name'] ?>
						</option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Genres</td>
			<td>
				<select name="genres[]" multiple>
					<?php foreach ($genres as $genre): ?>
						<option value="<?php echo $genre['id'] ?>">
							<?php echo $genre['name'] ?>
						</option>
					<?php endforeach ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit">Add</button>
			</td>
		</tr>
	</table>
</form>
<?php include __DIR__ . '/../_footer.php' ?>
