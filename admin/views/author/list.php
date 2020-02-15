<?php include __DIR__ . '/../_header.php' ?>

	<h1>Authors</h1>

	<a href="index.php?controller=author&action=add">Add new</a>

	<br>
	<br>

	<table>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td></td>
		</tr>
		<?php foreach ($authors as $author): ?>
			<tr>
				<td>
					<?php echo $author['id']?>
				</td>
				<td>
					<a href="index.php?controller=author&action=edit&id=<?php echo $author['id'] ?>">
						<?php echo $author['name'] ?>
					</a>
				</td>
				<td>
					<ul>
						<li>
							<a href="index.php?controller=author&action=edit&id=<?php echo $author['id'] ?>">
								Edit
							</a>
						</li>
						<li>
							<a href="index.php?controller=author&action=delete&id=<?php echo $author['id'] ?>"
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