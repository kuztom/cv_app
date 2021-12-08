<?php

namespace App\Repositories;

use App\Models\Collections\SchoolsCollection;
use App\Models\School;
use PDO;

class MysqlDataRepository implements DataRepository
{
    private PDO $connection;

    public function __construct()
    {
        $host = getenv('DB_HOST');
        $db = getenv('DB_DATABASE');
        $user = getenv('DB_USERNAME');
        $pass = getenv('DB_PASSWORD');

        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";
        try {
            $this->connection = new \PDO($dsn, $user, $pass);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

    }

    public function all()
    {
        $sql = "SELECT * FROM education";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);

//        $collection = new SchoolsCollection();   //blade won't recognise collection object, but works fine with arrays
//
//        foreach ($schools as $school){
//            $collection->add(new School(
//                $school['id'],
//                $school['school'],
//            ));
//        }
    }

    public function unique()
    {
        $sql = "SELECT DISTINCT(school) FROM education";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function oneSpecific()
    {
        $sql = "SELECT * FROM education WHERE school = 'RTU'";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countSpecific(string $name)
    {
        $sql = "SELECT COUNT(*) FROM education WHERE school = '$name'";
        $statement = $this->connection->query($sql);
        return $statement->fetchColumn();
    }

    public function join()
    {
        $sql = "SELECT * FROM education JOIN skills ON education.user_id = skills.user_id";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function joinUserSkills()
    {
        $sql = "SELECT users.name, users.surname, skills.title, skills.additional_information
                FROM users
                INNER JOIN skills
                ON users.id = skills.user_id
                ORDER BY users.name";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


}
