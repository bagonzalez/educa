<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudiante
 */
class Estudiante
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var \DateTime
     */
    private $fechanacimiento;

    /**
     * @var enum
     */
    private $sexo;

    /**
     * @var integer
     */
    private $idestudiante;

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
     * @return Estudiante
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
     * Set apellido
     *
     * @param string $apellido
     * @return Estudiante
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     * @return Estudiante
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime 
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set sexo
     *
     * @param enum $sexo
     * @return Estudiante
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return enum 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Get idestudiante
     *
     * @return integer 
     */
    public function getIdestudiante()
    {
        return $this->idestudiante;
    }

    /**
     * Add entidadeducativaentidadeducativa
     *
     * @param \AppBundle\Entity\Entidadeducativa $entidadeducativaentidadeducativa
     * @return Estudiante
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
