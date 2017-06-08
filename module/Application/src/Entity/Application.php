<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 17.29.3
 * Time: 20:30
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Application\Repository\ApplicationRepository")
 * @ORM\Table(name="application", indexes={
 *      @ORM\Index(name="application_idx", columns={"name"}),
 * })
 *
 */
class Application
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", nullable=false)
     */
    private $name;


    public function __toString()
    {
        return is_string($this->name) ? $this->name : 'Empty name';
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
