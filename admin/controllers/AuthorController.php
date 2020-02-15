<?php

require __DIR__ . '/../models/Author.php';
require __DIR__ . '/../../service/AuthorService.php';
require __DIR__ . '/../../validate/Validate.php';


class AuthorController extends Validate
{

    public function listAction() {

        $authorModel = new AuthorService();
        $authors = $authorModel->getAll();

        include __DIR__ . '/../views/author/list.php';
    }

    public function addAction() {
        if ($_POST) {

            $author = new Author();
            $author->setName($this->validateName($_POST['name']));
            $authorModel = new AuthorService();
            $authorModel->save($author);

            header("Location: index.php?controller=author&action=list");

            exit;
            }
        include __DIR__ . '/../views/author/add.php';
        }


    public function editAction() {
        $id = intval($_GET['id']);
        if($id) {

            $authorModel = new AuthorService();
            $author = $authorModel->findById($id);


            if ($_POST) {
                $author->setName($this->validateName($_POST['name']));
                $authorModel->update($author);

                header("Location: index.php?controller=author&action=list");
                exit;
            }
        }
        include __DIR__ . '/../views/author/edit.php';
    }

    public function deleteAction()
    {
        $id = intval($_GET['id']);
        if ($id) {

            $authorModel = new AuthorService();

            $author = $authorModel->findById($id);

            $authorModel->delete($author);

            header("Location: index.php?controller=author&action=list");
            exit;
        }
    }
}