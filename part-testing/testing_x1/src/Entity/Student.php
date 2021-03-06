<?php
/**
 * about this file
 */
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * details for one student
 * @ORM\Entity(repositoryClass="App\Repository\StudentRepository")
 */
class Student
{
    /**
     * id - leave it to DB to look after this
     * @var integer
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * student's first name
     * @ORM\Column(type="string")
     * @var string
     */
    private $firstName;

    /**
     * student's surname
     * @ORM\Column(type="string")
     * @var string
     */
    private $surname;

    /**
     * getter
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * setter
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * getter
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * setter
     * @param mixed $surname
     */
    public function setSurname($surname): void
    {
        $this->surname = $surname;
    }

    /**
     * getter
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
