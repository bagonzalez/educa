<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Observaciones
 */
class Observaciones
{
    /**
     * @var string
     */
    private $nombreobservacion;

    /**
     * @var string
     */
    private $descripcionobservacion;

    /**
     * @var integer
     */
    private $idobservacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $evaluacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->evaluacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombreobservacion
     *
     * @param string $nombreobservacion
     * @return Observaciones
     */
    public function setNombreobservacion($nombreobservacion)
    {
        $this->nombreobservacion = $nombreobservacion;

        return $this;
    }

    /**
     * Get nombreobservacion
     *
     * @return string 
     */
    public function getNombreobservacion()
    {
        return $this->nombreobservacion;
    }

    /**
     * Set descripcionobservacion
     *
     * @param string $descripcionobservacion
     * @return Observaciones
     */
    public function setDescripcionobservacion($descripcionobservacion)
    {
        $this->descripcionobservacion = $descripcionobservacion;

        return $this;
    }

    /**
     * Get descripcionobservacion
     *
     * @return string 
     */
    public function getDescripcionobservacion()
    {
        return $this->descripcionobservacion;
    }

    /**
     * Get idobservacion
     *
     * @return integer 
     */
    public function getIdobservacion()
    {
        return $this->idobservacion;
    }

    /**
     * Add evaluacion
     *
     * @param \AppBundle\Entity\Evaluacion $evaluacion
     * @return Observaciones
     */
    public function addEvaluacion(\AppBundle\Entity\Evaluacion $evaluacion)
    {
        $this->evaluacion[] = $evaluacion;

        return $this;
    }

    /**
     * Remove evaluacion
     *
     * @param \AppBundle\Entity\Evaluacion $evaluacion
     */
    public function removeEvaluacion(\AppBundle\Entity\Evaluacion $evaluacion)
    {
        $this->evaluacion->removeElement($evaluacion);
    }

    /**
     * Get evaluacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvaluacion()
    {
        return $this->evaluacion;
    }
}
