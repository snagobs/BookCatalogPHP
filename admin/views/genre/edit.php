<?php include __DIR__ . '/../_header.php' ?>

    <h1>Edit genre</h1>

    <form method="post" action="index.php?controller=genre&action=edit&id=<?php echo $genre->getId() ?>">
        <input type="text" name="name" value="<?php echo $genre->getName() ?>">
        <button type="submit">Save</button>
    </form>

<?php include __DIR__ . '/../_footer.php' ?>