<?php
require __DIR__ . '/../models/Book.php';
require __DIR__ . '/../models/Author.php';
require __DIR__ . '/../models/Genre.php';
require __DIR__ . '/../service/AuthorService.php';
require __DIR__ . '/../service/BookService.php';
require __DIR__ . '/../service/GenreService.php';
require __DIR__ . '/../validate/Validate.php';

class BookController extends Validate
{

	public function searchAction()
	{
		$authorId = isset($_GET['author']) ? $_GET['author'] : '';
		$genreId = isset($_GET['genre']) ? $_GET['genre'] : '';

		$bookModel = new BookService();
		$books = $bookModel->findByAuthorAndGenre($authorId, $genreId);

		foreach ($books as $i => $book) {
			$books[$i]['authors'] = $bookModel->getAuthors($book['id']);
			$books[$i]['genres'] = $bookModel->getGenres($book['id']);
		}

		$authorModel = new AuthorService();
		$authors = $authorModel->getAll();

		$genreModel = new GenreService();
		$genres = $genreModel->getAll();

		include __DIR__ . '/../views/book/search.php';
	}

	public function detailAction()
	{
		$bookId = intval($_GET['id']);
		$bookModel = new BookService();
		$book = $bookModel->findById($bookId);

		include __DIR__ . '/../views/book/detail.php';
	}

	public function buyAction()
	{
		$bookId = intval($_POST['book_id']);
		$email = $this->validateEmail($_POST['email']);
		$name = $this->validateName($_POST['name']);
		$qty = intval($_POST['qty']);

		$bookModel = new BookService();
		$book = $bookModel->findById($bookId);

		mail("admin@localhost", "New order", strtr("
            Book #%bookId: %bookName \n
            Email %email \n
            Name %name \n
            Count %qty", array(
			'%bookId' => $bookId,
			'%bookName' => $book->getTitle(),
			'%email' => $email,
			'%name' => $name,
			'%qty' => $qty,
		)));

		include __DIR__ . '/../views/book/success.php';
	}

}