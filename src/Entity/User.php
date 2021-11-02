<?php
namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Validator as AcmeAssert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository", repositoryClass=UserRepository::class)
 * @ORM\Table(name="`user`")
 */
class User
{
    /**
     * @ORM\Column(type="string", length=255)
     * @AcmeAssert\FirstUpper()
     * @Assert\Length(min=2, max=50)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }
}
