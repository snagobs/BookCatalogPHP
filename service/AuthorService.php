<?php
include __DIR__ . '/BaseDbService.php';

class AuthorService extends BaseDbService
{
    public function findById($id)
    {
        $result = $this->newConnection()->query("SELECT * FROM author WHERE id =$id");

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $this->closeConnection();

        $author = new Author();
        $author->setId($data[0]['id']);
        $author->setName($data[0]['name']);

        return $author;
    }

    public function getAll()
    {
        $result = $this->newConnection()->query("SELECT * FROM author");

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $this->closeConnection();

        return $data;
    }

    public function save(Author $author)
    {
        $this->newConnection()->query("INSERT INTO author SET name ='{$author->getName()}'");
        $this->closeConnection();
    }

    public function update(Author $author)
    {
        $this->newConnection()->query("UPDATE author SET name = '{$author->getName()}' WHERE id={$author->getId()}");
        $this->closeConnection();
    }

    public function delete(Author $author)
    {
        $this->newConnection()->query("DELETE FROM author WHERE id={$author->getId()}");
        $this->closeConnection();
    }
}