<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departamento
 */
class Departamento
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $iddepartamento;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Departamento
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Get iddepartamento
     *
     * @return integer 
     */
    public function getIddepartamento()
    {
        return $this->iddepartamento;
    }
    
    public function getId()
    {
        return $this->iddepartamento;
    }
    
    public function __toString()
    {
        return $this->getNombre();
    }
}
