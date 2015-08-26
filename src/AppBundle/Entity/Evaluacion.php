<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluacion
 */
class Evaluacion
{
    /**
     * @var integer
     */
    private $mesevaluacion;

    /**
     * @var integer
     */
    private $idevaluacion;

    /**
     * @var \AppBundle\Entity\Notaconcepto
     */
    private $notaconceptonotaconcepto;

    /**
     * @var \AppBundle\Entity\Matricula
     */
    private $matriculamatricula;

    /**
     * @var \AppBundle\Entity\Conducta
     */
    private $conductaconducta;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $observacionesobservacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->observacionesobservacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set mesevaluacion
     *
     * @param integer $mesevaluacion
     * @return Evaluacion
     */
    public function setMesevaluacion($mesevaluacion)
    {
        $this->mesevaluacion = $mesevaluacion;

        return $this;
    }

    /**
     * Get mesevaluacion
     *
     * @return integer 
     */
    public function getMesevaluacion()
    {
        return $this->mesevaluacion;
    }

    /**
     * Get idevaluacion
     *
     * @return integer 
     */
    public function getIdevaluacion()
    {
        return $this->idevaluacion;
    }

    /**
     * Set notaconceptonotaconcepto
     *
     * @param \AppBundle\Entity\Notaconcepto $notaconceptonotaconcepto
     * @return Evaluacion
     */
    public function setNotaconceptonotaconcepto(\AppBundle\Entity\Notaconcepto $notaconceptonotaconcepto = null)
    {
        $this->notaconceptonotaconcepto = $notaconceptonotaconcepto;

        return $this;
    }

    /**
     * Get notaconceptonotaconcepto
     *
     * @return \AppBundle\Entity\Notaconcepto 
     */
    public function getNotaconceptonotaconcepto()
    {
        return $this->notaconceptonotaconcepto;
    }

    /**
     * Set matriculamatricula
     *
     * @param \AppBundle\Entity\Matricula $matriculamatricula
     * @return Evaluacion
     */
    public function setMatriculamatricula(\AppBundle\Entity\Matricula $matriculamatricula = null)
    {
        $this->matriculamatricula = $matriculamatricula;

        return $this;
    }

    /**
     * Get matriculamatricula
     *
     * @return \AppBundle\Entity\Matricula 
     */
    public function getMatriculamatricula()
    {
        return $this->matriculamatricula;
    }

    /**
     * Set conductaconducta
     *
     * @param \AppBundle\Entity\Conducta $conductaconducta
     * @return Evaluacion
     */
    public function setConductaconducta(\AppBundle\Entity\Conducta $conductaconducta = null)
    {
        $this->conductaconducta = $conductaconducta;

        return $this;
    }

    /**
     * Get conductaconducta
     *
     * @return \AppBundle\Entity\Conducta 
     */
    public function getConductaconducta()
    {
        return $this->conductaconducta;
    }

    /**
     * Add observacionesobservacion
     *
     * @param \AppBundle\Entity\Observaciones $observacionesobservacion
     * @return Evaluacion
     */
    public function addObservacionesobservacion(\AppBundle\Entity\Observaciones $observacionesobservacion)
    {
        $this->observacionesobservacion[] = $observacionesobservacion;

        return $this;
    }

    /**
     * Remove observacionesobservacion
     *
     * @param \AppBundle\Entity\Observaciones $observacionesobservacion
     */
    public function removeObservacionesobservacion(\AppBundle\Entity\Observaciones $observacionesobservacion)
    {
        $this->observacionesobservacion->removeElement($observacionesobservacion);
    }

    /**
     * Get observacionesobservacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObservacionesobservacion()
    {
        return $this->observacionesobservacion;
    }
}
