<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nivelescolar
 */
class Nivelescolar
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $seccion;

    /**
     * @var integer
     */
    private $turno;

    /**
     * @var integer
     */
    private $idnivelescolar;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $entidadeducativa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entidadeducativa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Nivelescolar
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
     * Set seccion
     *
     * @param string $seccion
     * @return Nivelescolar
     */
    public function setSeccion($seccion)
    {
        $this->seccion = $seccion;

        return $this;
    }

    /**
     * Get seccion
     *
     * @return string 
     */
    public function getSeccion()
    {
        return $this->seccion;
    }

    /**
     * Set turno
     *
     * @param integer $turno
     * @return Nivelescolar
     */
    public function setTurno($turno)
    {
        $this->turno = $turno;

        return $this;
    }

    /**
     * Get turno
     *
     * @return integer 
     */
    public function getTurno()
    {
        return $this->turno;
    }

    /**
     * Get idnivelescolar
     *
     * @return integer 
     */
    public function getIdnivelescolar()
    {
        return $this->idnivelescolar;
    }

    /**
     * Add entidadeducativa
     *
     * @param \AppBundle\Entity\Entidadeducativa $entidadeducativa
     * @return Nivelescolar
     */
    public function addEntidadeducativa(\AppBundle\Entity\Entidadeducativa $entidadeducativa)
    {
        $this->entidadeducativa[] = $entidadeducativa;

        return $this;
    }

    /**
     * Remove entidadeducativa
     *
     * @param \AppBundle\Entity\Entidadeducativa $entidadeducativa
     */
    public function removeEntidadeducativa(\AppBundle\Entity\Entidadeducativa $entidadeducativa)
    {
        $this->entidadeducativa->removeElement($entidadeducativa);
    }

    /**
     * Get entidadeducativa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntidadeducativa()
    {
        return $this->entidadeducativa;
    }
}
