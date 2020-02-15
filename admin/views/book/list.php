<?php include __DIR__ . '/../_header.php' ?>

	<h1>Books</h1>

	<a href="index.php?controller=book&action=add">Add new</a>
	<br><br>
	<table>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Description</th>
			<th>Authors</th>
			<th>Genres</th>
			<th>Price</th>
			<th></th>
		</tr>
		<?php foreach ($books as $book): ?>
			<tr>
				<td><?php echo $book['id'] ?></td>
				<td><?php echo $book['title'] ?></td>
				<td><?php echo $book['description'] ?></td>
				<td>
					<ul>
						<?php foreach ($book['authors'] as $author): ?>
							<li><?php echo $author['name'] ?></li>
						<?php endforeach ?>
					</ul>
				</td>
				<td>
					<ul>
						<?php foreach ($book['genres'] as $genre): ?>
							<li><?php echo $genre['name'] ?></li>
						<?php endforeach ?>
					</ul>
				</td>
				<td><?php echo $book['price'] ?></td>
				<td>
					<ul>
						<li>
							<a href="index.php?controller=book&action=edit&id=<?php echo $book['id'] ?>">
								Edit
							</a>
						</li>
						<li>
							<a href="index.php?controller=book&action=delete&id=<?php echo $book['id'] ?>"
							   onclick="return confirmDelete()">
								Delete
							</a>
						</li>
					</ul>
				</td>
			</tr>
		<?php endforeach ?>
	</table>
<?php include __DIR__ . '/../_footer.php' ?>