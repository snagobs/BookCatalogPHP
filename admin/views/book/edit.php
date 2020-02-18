<?php include __DIR__ . '/../_header.php' ?>

    <div class="container mt-3 mb-3">
        <form method="post" action="index.php?controller=book&action=edit&id=<?php echo $book->getId() ?>">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title text-info"> Edit Book </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8 offset-sm-2">

                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" placeholder="Title" class="form-control"
                                               value="<?php echo $book->getTitle() ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control" placeholder="Price" type="number" min="1"
                                               max="10000"
                                               step="0.01" name="price"
                                               value="<?php echo $book->getPrice() ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" style="text-align:left; white-space: normal;"
                                                  cols=1000 rows=10 placeholder="Description"
                                                  class="form-control"><?php echo $book->getDescription() ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Authors</label>
                                        <br>
                                        <select name="authors[]" multiple style="width: 100%;" size="5">
                                            <?php foreach ($authors as $author): ?>
                                                <option value="<?php echo $author['id'] ?>"
                                                    <?php foreach ($bookModel->getAuthors($book->getId()) as $bookAuthor): ?>
                                                        <?php if ($bookAuthor['id'] == $author['id']): ?>
                                                            selected="selected"
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                >
                                                    <?php echo $author['name'] ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Genres</label>
                                        <br>
                                        <select name="genres[]" multiple style="width: 100%;" size="5">
                                            <?php foreach ($genres as $genre): ?>
                                                <option value="<?php echo $genre['id'] ?>"
                                                    <?php foreach ($bookModel->getGenres($book->getId()) as $bookGenre): ?>
                                                        <?php if ($bookGenre['id'] == $genre['id']): ?>
                                                            selected="selected"
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                >
                                                    <?php echo $genre['name'] ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group" style="text-align: center">
                                        <button type="submit" class="btn btn-success" name="submit">
                                            Submit
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
<?php include __DIR__ . '/../_footer.php' ?>