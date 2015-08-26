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
     * @var integer
     */
    private $idmatricula;

    /**
     * @var \AppBundle\Entity\Nivelescolar
     */
    private $nivelescolarnivelescolar;

    /**
     * @var \AppBundle\Entity\Estudiante
     */
    private $estudianteestudiante;

    /**
     * @var \AppBundle\Entity\Entidadeducativa
     */
    private $entidadeducativaentidadeducativa;


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
     * Get idmatricula
     *
     * @return integer 
     */
    public function getIdmatricula()
    {
        return $this->idmatricula;
    }

    /**
     * Set nivelescolarnivelescolar
     *
     * @param \AppBundle\Entity\Nivelescolar $nivelescolarnivelescolar
     * @return Matricula
     */
    public function setNivelescolarnivelescolar(\AppBundle\Entity\Nivelescolar $nivelescolarnivelescolar = null)
    {
        $this->nivelescolarnivelescolar = $nivelescolarnivelescolar;

        return $this;
    }

    /**
     * Get nivelescolarnivelescolar
     *
     * @return \AppBundle\Entity\Nivelescolar 
     */
    public function getNivelescolarnivelescolar()
    {
        return $this->nivelescolarnivelescolar;
    }

    /**
     * Set estudianteestudiante
     *
     * @param \AppBundle\Entity\Estudiante $estudianteestudiante
     * @return Matricula
     */
    public function setEstudianteestudiante(\AppBundle\Entity\Estudiante $estudianteestudiante = null)
    {
        $this->estudianteestudiante = $estudianteestudiante;

        return $this;
    }

    /**
     * Get estudianteestudiante
     *
     * @return \AppBundle\Entity\Estudiante 
     */
    public function getEstudianteestudiante()
    {
        return $this->estudianteestudiante;
    }

    /**
     * Set entidadeducativaentidadeducativa
     *
     * @param \AppBundle\Entity\Entidadeducativa $entidadeducativaentidadeducativa
     * @return Matricula
     */
    public function setEntidadeducativaentidadeducativa(\AppBundle\Entity\Entidadeducativa $entidadeducativaentidadeducativa = null)
    {
        $this->entidadeducativaentidadeducativa = $entidadeducativaentidadeducativa;

        return $this;
    }

    /**
     * Get entidadeducativaentidadeducativa
     *
     * @return \AppBundle\Entity\Entidadeducativa 
     */
    public function getEntidadeducativaentidadeducativa()
    {
        return $this->entidadeducativaentidadeducativa;
    }
}
