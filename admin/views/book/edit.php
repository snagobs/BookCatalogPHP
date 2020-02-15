<?php include __DIR__ . '/../_header.php' ?>

	<h1>Edit book</h1>

	<form method="post" action="index.php?controller=book&action=edit&id=<?php echo $book->getId() ?>">
		<table>
			<tr>
				<td>Title</td>
				<td>
					<input type="text" name="title" size="100" required value="<?php echo $book->getTitle() ?>">
				</td>
			</tr>
			<tr>
				<td>Price</td>
				<td>
					<input type="number" min="0" max="10000" step="0.1" size="4" name="price" required value="<?php echo $book->getPrice() ?>">
				</td>
			</tr>
			<tr>
				<td>Description</td>
				<td>
					<textarea name="description" required><?php echo $book->getDescription() ?></textarea>
				</td>
			</tr>
			<tr>
			<tr>
				<td>Authors</td>
				<td>
					<select name="authors[]" multiple>
						<?php foreach ($authors as $author): ?>
							<option value="<?php echo $author['id'] ?>"
							        <?php foreach($bookModel->getAuthors($book->getId()) as $bookAuthor): ?>
								        <?php if ($bookAuthor['id'] == $author['id']): ?>
									        selected="selected"
								        <?php endif ?>
									<?php endforeach ?>
								>
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
							<option value="<?php echo $genre['id'] ?>"
								<?php foreach($bookModel->getGenres($book->getId()) as $bookGenre): ?>
									<?php if ($bookGenre['id'] == $genre['id']): ?>
										selected="selected"
									<?php endif ?>
								<?php endforeach ?>
							>
								<?php echo $genre['name'] ?>
							</option>
						<?php endforeach ?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit">Save</button>
				</td>
			</tr>
		</table>
	</form>

<?php include __DIR__ . '/../_footer.php' ?>