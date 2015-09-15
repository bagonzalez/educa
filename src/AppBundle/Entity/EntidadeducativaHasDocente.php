<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * EntidadeducativaHasDocente
 */
class EntidadeducativaHasDocente
{
    /**
     * @var \DateTime
     */
    private $fechainicio;

    /**
     * @var \DateTime
     */
    private $fechafin;



    /**
     * @var \AppBundle\Entity\Entidadeducativa
     */
    private $entidadeducativa;

    /**
     * @var \AppBundle\Entity\Docente
     */
    private $docente;
    
     /**
     * @var integer
     */
    private $id;
    
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
     * Set fechainicio
     *
     * @param \DateTime $fechainicio
     * @return EntidadeducativaHasDocente
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;

        return $this;
    }

    /**
     * Get fechainicio
     *
     * @return \DateTime 
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }

    /**
     * Set fechafin
     *
     * @param \DateTime $fechafin
     * @return EntidadeducativaHasDocente
     */
    public function setFechafin($fechafin)
    {
        $this->fechafin = $fechafin;

        return $this;
    }

    /**
     * Get fechafin
     *
     * @return \DateTime 
     */
    public function getFechafin()
    {
        return $this->fechafin;
    }

   

    /**
     * Set entidadeducativa
     *
     * @param \AppBundle\Entity\Entidadeducativa $entidadeducativa
     * @return EntidadeducativaHasDocente
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

    /**
     * Set docente
     *
     * @param \AppBundle\Entity\Docente $docente
     * @return EntidadeducativaHasDocente
     */
    public function setDocente(\AppBundle\Entity\Docente $docente = null)
    {
        $this->docente = $docente;

        return $this;
    }

    /**
     * Get docente
     *
     * @return \AppBundle\Entity\Docente 
     */
    public function getDocente()
    {
        return $this->docente;
    }
    
     /*public function __toString()
    {
        return $this->getDocente()->getNombre().' '.$this->getEntidadeducativa()->getNombre();
    }*/
}
