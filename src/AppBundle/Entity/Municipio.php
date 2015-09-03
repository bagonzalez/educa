<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 */
class Municipio
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var integer
     */
    private $idmunicipio;

    /**
     * @var \AppBundle\Entity\Departamento
     */
    private $departamento;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Municipio
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
     * Get idmunicipio
     *
     * @return integer 
     */
    public function getIdmunicipio()
    {
        return $this->idmunicipio;
    }

    /**
     * Set departamento
     *
     * @param \AppBundle\Entity\Departamento $departamento
     * @return Municipio
     */
    public function setDepartamento(\AppBundle\Entity\Departamento $departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \AppBundle\Entity\Departamento 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
    
    public function __toString()
    {
        return $this->getNombre();
    }
}
