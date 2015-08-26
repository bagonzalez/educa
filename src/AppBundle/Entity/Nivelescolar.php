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
    private $idnivelescolar;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $entidadeducativaentidadeducativa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entidadeducativaentidadeducativa = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get idnivelescolar
     *
     * @return integer 
     */
    public function getIdnivelescolar()
    {
        return $this->idnivelescolar;
    }

    /**
     * Add entidadeducativaentidadeducativa
     *
     * @param \AppBundle\Entity\Entidadeducativa $entidadeducativaentidadeducativa
     * @return Nivelescolar
     */
    public function addEntidadeducativaentidadeducativa(\AppBundle\Entity\Entidadeducativa $entidadeducativaentidadeducativa)
    {
        $this->entidadeducativaentidadeducativa[] = $entidadeducativaentidadeducativa;

        return $this;
    }

    /**
     * Remove entidadeducativaentidadeducativa
     *
     * @param \AppBundle\Entity\Entidadeducativa $entidadeducativaentidadeducativa
     */
    public function removeEntidadeducativaentidadeducativa(\AppBundle\Entity\Entidadeducativa $entidadeducativaentidadeducativa)
    {
        $this->entidadeducativaentidadeducativa->removeElement($entidadeducativaentidadeducativa);
    }

    /**
     * Get entidadeducativaentidadeducativa
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntidadeducativaentidadeducativa()
    {
        return $this->entidadeducativaentidadeducativa;
    }
}
