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
    private $evaluacionevaluacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->evaluacionevaluacion = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add evaluacionevaluacion
     *
     * @param \AppBundle\Entity\Evaluacion $evaluacionevaluacion
     * @return Observaciones
     */
    public function addEvaluacionevaluacion(\AppBundle\Entity\Evaluacion $evaluacionevaluacion)
    {
        $this->evaluacionevaluacion[] = $evaluacionevaluacion;

        return $this;
    }

    /**
     * Remove evaluacionevaluacion
     *
     * @param \AppBundle\Entity\Evaluacion $evaluacionevaluacion
     */
    public function removeEvaluacionevaluacion(\AppBundle\Entity\Evaluacion $evaluacionevaluacion)
    {
        $this->evaluacionevaluacion->removeElement($evaluacionevaluacion);
    }

    /**
     * Get evaluacionevaluacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvaluacionevaluacion()
    {
        return $this->evaluacionevaluacion;
    }
}
