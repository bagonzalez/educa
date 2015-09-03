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
     * @var \AppBundle\Entity\Conducta
     */
    private $conducta;

    /**
     * @var \AppBundle\Entity\Notaconcepto
     */
    private $notaconcepto;

    /**
     * @var \AppBundle\Entity\Matricula
     */
    private $matricula;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $observaciones;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->observaciones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set conducta
     *
     * @param \AppBundle\Entity\Conducta $conducta
     * @return Evaluacion
     */
    public function setConducta(\AppBundle\Entity\Conducta $conducta = null)
    {
        $this->conducta = $conducta;

        return $this;
    }

    /**
     * Get conducta
     *
     * @return \AppBundle\Entity\Conducta 
     */
    public function getConducta()
    {
        return $this->conducta;
    }

    /**
     * Set notaconcepto
     *
     * @param \AppBundle\Entity\Notaconcepto $notaconcepto
     * @return Evaluacion
     */
    public function setNotaconcepto(\AppBundle\Entity\Notaconcepto $notaconcepto = null)
    {
        $this->notaconcepto = $notaconcepto;

        return $this;
    }

    /**
     * Get notaconcepto
     *
     * @return \AppBundle\Entity\Notaconcepto 
     */
    public function getNotaconcepto()
    {
        return $this->notaconcepto;
    }

    /**
     * Set matricula
     *
     * @param \AppBundle\Entity\Matricula $matricula
     * @return Evaluacion
     */
    public function setMatricula(\AppBundle\Entity\Matricula $matricula = null)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Get matricula
     *
     * @return \AppBundle\Entity\Matricula 
     */
    public function getMatricula()
    {
        return $this->matricula;
    }

    /**
     * Add observaciones
     *
     * @param \AppBundle\Entity\Observaciones $observaciones
     * @return Evaluacion
     */
    public function addObservacione(\AppBundle\Entity\Observaciones $observaciones)
    {
        $this->observaciones[] = $observaciones;

        return $this;
    }

    /**
     * Remove observaciones
     *
     * @param \AppBundle\Entity\Observaciones $observaciones
     */
    public function removeObservacione(\AppBundle\Entity\Observaciones $observaciones)
    {
        $this->observaciones->removeElement($observaciones);
    }

    /**
     * Get observaciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}
