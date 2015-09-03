<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matricula
 */
class Matricula
{
    /**
     * @var integer
     */
    private $añoescolar;

    /**
     * @var boolean
     */
    private $repite;

    /**
     * @var boolean
     */
    private $sobreedad;

    /**
     * @var integer
     */
    private $idmatricula;

    /**
     * @var \AppBundle\Entity\Nivelescolar
     */
    private $nivelescolar;

    /**
     * @var \AppBundle\Entity\Estudiante
     */
    private $estudiante;

    /**
     * @var \AppBundle\Entity\Entidadeducativa
     */
    private $entidadeducativa;


    /**
     * Set añoescolar
     *
     * @param integer $añoescolar
     * @return Matricula
     */
    public function setAñoescolar($añoescolar)
    {
        $this->añoescolar = $añoescolar;

        return $this;
    }

    /**
     * Get añoescolar
     *
     * @return integer 
     */
    public function getAñoescolar()
    {
        return $this->añoescolar;
    }

    /**
     * Set repite
     *
     * @param boolean $repite
     * @return Matricula
     */
    public function setRepite($repite)
    {
        $this->repite = $repite;

        return $this;
    }

    /**
     * Get repite
     *
     * @return boolean 
     */
    public function getRepite()
    {
        return $this->repite;
    }

    /**
     * Set sobreedad
     *
     * @param boolean $sobreedad
     * @return Matricula
     */
    public function setSobreedad($sobreedad)
    {
        $this->sobreedad = $sobreedad;

        return $this;
    }

    /**
     * Get sobreedad
     *
     * @return boolean 
     */
    public function getSobreedad()
    {
        return $this->sobreedad;
    }

    /**
     * Get idmatricula
     *
     * @return integer 
     */
    public function getIdmatricula()
    {
        return $this->idmatricula;
    }

    /**
     * Set nivelescolar
     *
     * @param \AppBundle\Entity\Nivelescolar $nivelescolar
     * @return Matricula
     */
    public function setNivelescolar(\AppBundle\Entity\Nivelescolar $nivelescolar = null)
    {
        $this->nivelescolar = $nivelescolar;

        return $this;
    }

    /**
     * Get nivelescolar
     *
     * @return \AppBundle\Entity\Nivelescolar 
     */
    public function getNivelescolar()
    {
        return $this->nivelescolar;
    }

    /**
     * Set estudiante
     *
     * @param \AppBundle\Entity\Estudiante $estudiante
     * @return Matricula
     */
    public function setEstudiante(\AppBundle\Entity\Estudiante $estudiante = null)
    {
        $this->estudiante = $estudiante;

        return $this;
    }

    /**
     * Get estudiante
     *
     * @return \AppBundle\Entity\Estudiante 
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }

    /**
     * Set entidadeducativa
     *
     * @param \AppBundle\Entity\Entidadeducativa $entidadeducativa
     * @return Matricula
     */
    public function setEntidadeducativa(\AppBundle\Entity\Entidadeducativa $entidadeducativa = null)
    {
        $this->entidadeducativa = $entidadeducativa;

        return $this;
    }

    /**
     * Get entidadeducativa
     *
     * @return \AppBundle\Entity\Entidadeducativa 
     */
    public function getEntidadeducativa()
    {
        return $this->entidadeducativa;
    }
}
