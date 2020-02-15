<?php include __DIR__ . '/../_header.php' ?>

<h1>Edit author</h1>

<form method="post" action="index.php?controller=author&action=edit&id=<?php echo $author->getId() ?>">
    <input type="text" name="name" value="<?php echo $author->getName() ?>">
    <button type="submit">Save</button>
</form>

<?php include __DIR__ . '/../_footer.php' ?>