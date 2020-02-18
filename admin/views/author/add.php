<?php include __DIR__ . '/../_header.php' ?>

    <div class="container mb-3 mt-3">
        <h1>Add new author</h1>
        <form method="post">
            <br>
            <div class="row">
                <table class="table table-striped table-bordered mytable" style="width: 100%">
                    <tr>
                        <td style="text-align: center">Author name</td>
                        <td><input type="text" name="name" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-info float-left">Add new author</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

<?php include __DIR__ . '/../_footer.php' ?>