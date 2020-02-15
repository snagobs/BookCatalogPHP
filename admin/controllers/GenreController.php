<?php

require __DIR__ . '/../models/Genre.php';
require __DIR__ . '/../../service/GenreService.php';

class GenreController extends Validate
{

    public function listAction()
    {

        $genreModel = new GenreService();
        $genres = $genreModel->getAll();

        include __DIR__ . '/../views/genre/list.php';
    }

    public function addAction()
    {
        if ($_POST) {

            $genre = new Genre();
            $genre->setName($this->validateName($_POST['name']));
            $genreModel = new GenreService();
            $genreModel->save($genre);

            header("Location: index.php?controller=genre&action=list");
            exit;
        }

        include __DIR__ . '/../views/genre/add.php';
    }

    public function editAction()
    {
        $id = intval($_GET['id']);
        if($id) {
            $genreModel = new GenreService();
            $genre = $genreModel->findById($id);

            if ($_POST) {
                $genre->setName($this->validateName($_POST['name']));
                $genreModel->update($genre);

                header("Location: index.php?controller=genre&action=list");
                exit;
            }
        }

        include __DIR__ . '/../views/genre/edit.php';
    }

    public function deleteAction()
    {
        $id = intval($_GET['id']);
        if ($id) {

            $genreModel = new GenreService();
            $genre = $genreModel->findById($id);
            $genreModel->delete($genre);

            header("Location: index.php?controller=genre&action=list");
            exit;
        }
    }
}