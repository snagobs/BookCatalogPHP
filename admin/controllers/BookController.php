<?php
require __DIR__ . '/../models/Book.php';
require __DIR__ . '/../../service/BookService.php';

class BookController extends Validate
{

    public function listAction()
    {
        $bookModel = new BookService();
        $books = $bookModel->getAll();

        foreach ($books as $i => $book) {
            $books[$i]['authors'] = $bookModel->getAuthors($book['id']);
            $books[$i]['genres'] = $bookModel->getGenres($book['id']);
        }

        include __DIR__ . '/../views/book/list.php';
    }

    public function addAction()
    {

        $authorModel = new AuthorService();
        $authors = $authorModel->getAll();
        $genreModel = new GenreService();
        $genres = $genreModel->getAll();

        if ($_POST) {
            $book = new Book();
            $book->setTitle($this->validateTitle($_POST['title']));
            $book->setDescription($this->validateDescription($_POST['description']));
            $book->setPrice($this->validatePrice($_POST['price']));
            $book->setAuthors($_POST['authors']);
            $book->setGenres($_POST['genres']);
            $bookModel = new BookService();
            $bookModel->save($book);

            header("Location: index.php?controller=book&action=list");
            exit;
        }

        include __DIR__ . '/../views/book/add.php';
    }

    public function editAction()
    {
        $id = intval($_GET['id']);
        if ($id) {
            $bookModel = new BookService();
            $book = $bookModel->findById($id);

            $authorModel = new AuthorService();
            $authors = $authorModel->getAll();

            $genreModel = new GenreService();
            $genres = $genreModel->getAll();

            if ($_POST) {

                $book->setTitle($this->validateTitle($_POST['title']));
                $book->setDescription($this->validateDescription($_POST['description']));
                $book->setPrice($this->validatePrice($_POST['price']));
                $book->setAuthors($_POST['authors']);
                $book->setGenres($_POST['genres']);

                $bookModel->update($book);

                header("Location: index.php?controller=book&action=list");
                exit;
            }
        }
        include __DIR__ . '/../views/book/edit.php';
    }

    public function deleteAction()
    {
        $id = intval($_GET['id']);
        if ($id) {

            $bookModel = new BookService();

            $book = $bookModel->findById($id);

            $bookModel->delete($book);

            header("Location: index.php?controller=book&action=list");
            exit;
        }
    }
}