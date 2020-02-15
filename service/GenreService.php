<?php


class GenreService extends BaseDbService
{
    public function findById($id)
    {
        $result = $this->newConnection()->query("SELECT * FROM genre WHERE id =$id");

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $this->closeConnection();

        $genre = new Genre();
        $genre->setId($data[0]['id']);
        $genre->setName($data[0]['name']);

        return $genre;
    }

    public function getAll()
    {
        $result = $this->newConnection()->query("SELECT * FROM genre");

        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $this->closeConnection();

        return $data;
    }

    public function save(Genre $genre)
    {
        $this->newConnection()->query("INSERT INTO genre SET name ='{$genre->getName()}'");
        $this->closeConnection();
    }

    public function update(Genre $genre)
    {
        $this->newConnection()->query("UPDATE genre SET name = '{$genre->getName()}' WHERE id={$genre->getId()}");
        $this->closeConnection();
    }

    public function delete(Genre $genre)
    {
        $this->newConnection()->query("DELETE FROM genre WHERE id={$genre->getId()}");
        $this->closeConnection();
    }
}