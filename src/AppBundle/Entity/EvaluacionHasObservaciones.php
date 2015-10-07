<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvaluacionHasObservaciones
 */
class EvaluacionHasObservaciones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Observaciones
     */
    private $observaciones;

    /**
     * @var \AppBundle\Entity\Evaluacion
     */
    private $evaluacion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set observaciones
     *
     * @param \AppBundle\Entity\Observaciones $observaciones
     * @return EvaluacionHasObservaciones
     */
    public function setObservaciones(\AppBundle\Entity\Observaciones $observaciones = null)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return \AppBundle\Entity\Observaciones 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set evaluacion
     *
     * @param \AppBundle\Entity\Evaluacion $evaluacion
     * @return EvaluacionHasObservaciones
     */
    public function setEvaluacion(\AppBundle\Entity\Evaluacion $evaluacion = null)
    {
        $this->evaluacion = $evaluacion;

        return $this;
    }

    /**
     * Get evaluacion
     *
     * @return \AppBundle\Entity\Evaluacion 
     */
    public function getEvaluacion()
    {
        return $this->evaluacion;
    }
}
