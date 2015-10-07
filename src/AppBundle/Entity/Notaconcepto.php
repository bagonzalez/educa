<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notaconcepto
 */
class Notaconcepto
{
    /**
     * @var string
     */
    private $nombreconcepto;

    /**
     * @var string
     */
    private $nomenclatura;

    /**
     * @var integer
     */
    private $notamin;

    /**
     * @var integer
     */
    private $notamax;

    /**
     * @var integer
     */
    private $idnotaconcepto;


    /**
     * Set nombreconcepto
     *
     * @param string $nombreconcepto
     * @return Notaconcepto
     */
    public function setNombreconcepto($nombreconcepto)
    {
        $this->nombreconcepto = $nombreconcepto;

        return $this;
    }

    /**
     * Get nombreconcepto
     *
     * @return string 
     */
    public function getNombreconcepto()
    {
        return $this->nombreconcepto;
    }

    /**
     * Set nomenclatura
     *
     * @param string $nomenclatura
     * @return Notaconcepto
     */
    public function setNomenclatura($nomenclatura)
    {
        $this->nomenclatura = $nomenclatura;

        return $this;
    }

    /**
     * Get nomenclatura
     *
     * @return string 
     */
    public function getNomenclatura()
    {
        return $this->nomenclatura;
    }

    /**
     * Set notamin
     *
     * @param integer $notamin
     * @return Notaconcepto
     */
    public function setNotamin($notamin)
    {
        $this->notamin = $notamin;

        return $this;
    }

    /**
     * Get notamin
     *
     * @return integer 
     */
    public function getNotamin()
    {
        return $this->notamin;
    }

    /**
     * Set notamax
     *
     * @param integer $notamax
     * @return Notaconcepto
     */
    public function setNotamax($notamax)
    {
        $this->notamax = $notamax;

        return $this;
    }

    /**
     * Get notamax
     *
     * @return integer 
     */
    public function getNotamax()
    {
        return $this->notamax;
    }

    /**
     * Get idnotaconcepto
     *
     * @return integer 
     */
    public function getIdnotaconcepto()
    {
        return $this->idnotaconcepto;
    }
    
    public function getId()
    {
        return $this->idnotaconcepto;
    }
    
     public function __toString()
    {
        return $this->getNombreconcepto();
    }
}
