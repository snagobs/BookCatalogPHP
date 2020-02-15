<?php


class BookService extends BaseDbService
{
    public function findById($id)
    {
        $result = $this->newConnection()->query("SELECT * FROM book WHERE id = '$id'");

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $this->closeConnection();

        $book = new Book();
        $book->setId($data[0]['id']);
        $book->setTitle($data[0]['title']);
        $book->setPrice($data[0]['price']);
        $book->setDescription($data[0]['description']);
        $book->setAuthors($this->getAuthors($book->getId()));
        $book->setGenres($this->getGenres($book->getId()));

        return $book;
    }

    public function getAll()
    {
        $result = $this->newConnection()->query("SELECT * FROM book");

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $this->closeConnection();

        return $data;
    }

    public function getAuthors($bookId)
    {
        $conn = $this->newConnection();

        $result = $conn->query("SELECT author_id FROM author_book WHERE book_id=$bookId");

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $resultAuthors = $conn->query("SELECT * FROM author WHERE id=" . $row['author_id']);

            while ($rowAuthor = $resultAuthors->fetch_assoc()) {
                $data[] = $rowAuthor;
            }
        }
        $this->closeConnection();

        return $data;
    }

    public function getGenres($bookId)
    {
        $conn = $this->newConnection();

        $result = $conn->query("SELECT genre_id FROM genre_book WHERE book_id=$bookId");

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $resultGenres = $conn->query("SELECT * FROM genre WHERE id=" . $row['genre_id']);

            while ($rowGenre = $resultGenres->fetch_assoc()) {
                $data[] = $rowGenre;
            }
        }
        $this->closeConnection();

        return $data;
    }

    public function save(Book $book)
    {
        $conn = $this->newConnection();

        $conn->query("INSERT INTO book (title, price, description)
                        VALUES ('" . $conn->real_escape_string($book->getTitle()) . "',
                        '{$book->getPrice()}','" . $conn->real_escape_string($book->getDescription()) . "')");

        $bookId = $conn->insert_id;

        foreach ($book->getAuthors() as $authorId) {
            $conn->query("INSERT INTO author_book (author_id, book_id) VALUES ($authorId, $bookId)");
        }

        foreach ($book->getGenres() as $genreId) {
            $conn->query("INSERT INTO genre_book (genre_id, book_id) VALUES ($genreId, $bookId)");
        }

        $this->closeConnection();
    }

    public function update(Book $book)
    {
        $conn = $this->newConnection();
        $conn->query("UPDATE book SET title = '" . $conn->real_escape_string($book->getTitle()) . "',
        price =  '{$book->getPrice()}',description = '" . $conn->real_escape_string($book->getDescription()) . "'
        WHERE id = '{$book->getId()}' ");


        $conn->query("DELETE FROM author_book WHERE book_id='{$book->getId()}'");

        foreach ($book->getAuthors() as $authorId) {
            $conn->query("INSERT INTO author_book (author_id, book_id) VALUES ($authorId, {$book->getId()})");
        }

        $conn->query("DELETE FROM genre_book WHERE book_id='{$book->getId()}'");

        foreach ($book->getGenres() as $genreId) {
            $conn->query("INSERT INTO genre_book (genre_id, book_id) VALUES ($genreId, {$book->getId()})");
        }

        $this->closeConnection();
    }

    public function delete(Book $book)
    {
        $conn = $this->newConnection();

        $conn->query("DELETE FROM book WHERE id = {$book->getId()}");
        $conn->query("DELETE FROM author_book WHERE book_id={$book->getId()}");
        $conn->query("DELETE FROM genre_book WHERE book_id={$book->getId()}");

        $this->closeConnection();
    }

    public function findByAuthorAndGenre($authorId, $genreId)
    {
        $conn = $this->newConnection();

        if ($authorId && $genreId) {
            $result = $conn->query("SELECT * FROM book
			LEFT JOIN author_book ON author_book.book_id=book.id
			LEFT JOIN genre_book ON genre_book.book_id=book.id
			WHERE author_id=$authorId AND genre_id=$genreId");
        } else if ($authorId) {
            $result = $conn->query("SELECT * FROM book LEFT JOIN author_book ON author_book.book_id=book.id WHERE author_id=$authorId");
        } else if ($genreId) {
            $result = $conn->query("SELECT * FROM book LEFT JOIN genre_book ON genre_book.book_id=book.id WHERE genre_id=$genreId");
        } else {
            $result = $conn->query("SELECT * FROM book");
        }

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        $this->closeConnection();

        return $data;
    }
}