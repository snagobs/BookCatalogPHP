<?php include __DIR__ . '/../_header.php' ?>

	<h1><?php echo $book->getTitle() ?></h1>

	<small>
		Authors:
		<?php foreach ($book->getAuthors() as $author): ?>
			<?php echo $author['name'] ?>,
		<?php endforeach ?>
	</small>

	<br>

	<small>
		Genres:
		<?php foreach ($book->getGenres() as $genre): ?>
			<?php echo $genre['name'] ?>,
		<?php endforeach ?>
	</small>

	<p><?php echo nl2br($book->getDescription()) ?></p>


	<h2>Buy book</h2>
	<form method="post" action="index.php?controller=book&action=buy">
		<input type="hidden" name="book_id" value="<?php echo $book->getId() ?>">
		<table>
			<tr>
				<td>Your Email address</td>
				<td>
					<input type="text" name="email" required>
				</td>
			</tr>
			<tr>
				<td>Your name</td>
				<td>
					<input type="text" name="name" required>
				</td>
			</tr>
			<tr>
				<td>Count books</td>
				<td>
					<input type="number" name="qty" required>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit">Buy</button>
				</td>
			</tr>
		</table>
	</form>


<?php include __DIR__ . '/../_footer.php' ?>