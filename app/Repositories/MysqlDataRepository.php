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
//        return $collection;
    }

    public function unique()
    {
        $sql = "SELECT DISTINCT(school) FROM education";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function oneSpecific(string $name)
    {
        $sql = "SELECT * FROM education WHERE school = '$name'";
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

    public function joinUsersSkills()
    {
        $sql = "SELECT users.name, users.surname, skills.title, skills.additional_information
                FROM users
                JOIN skills
                ON users.id = skills.user_id
                ORDER BY users.name";
        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // query tests

    public function groupSkills()
    {
        $sql = "SELECT user_id, COUNT(id)
                AS user_skills
                FROM skills
                GROUP BY user_id";

        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function joinUserToSchool()
    {
        $sql = "SELECT *
                FROM users
                JOIN education
                ON users.id = education.user_id";

        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countUserDegrees()
    {
        $sql = "SELECT users.id, users.name, users.surname, COUNT(education.degree) degrees
                FROM users
                LEFT JOIN education
                ON education.user_id = users.id
                GROUP BY users.id";

        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function userZipCode()
    {
        $sql = "SELECT users.id, users.name, users.surname
                FROM users
                WHERE users.zip_code = 'LV-4112'";

        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function userLanguage()
    {
        $sql = "SELECT users.name, users.surname, skills.additional_information language
                FROM users
                JOIN skills
                ON users.id = skills.user_id
                WHERE skills.additional_information = 'English'";

        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function userPhone()
    {
        $sql = "SELECT users.id, users.name, users.phone
                FROM users
                WHERE users.phone LIKE '282%'";

        $statement = $this->connection->query($sql);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}
