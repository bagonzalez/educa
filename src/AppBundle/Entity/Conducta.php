<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conducta
 */
class Conducta
{
    /**
     * @var string
     */
    private $nombreitemconducta;

    /**
     * @var string
     */
    private $descripcionitem;

    /**
     * @var integer
     */
    private $idconducta;


    /**
     * Set nombreitemconducta
     *
     * @param string $nombreitemconducta
     * @return Conducta
     */
    public function setNombreitemconducta($nombreitemconducta)
    {
        $this->nombreitemconducta = $nombreitemconducta;

        return $this;
    }

    /**
     * Get nombreitemconducta
     *
     * @return string 
     */
    public function getNombreitemconducta()
    {
        return $this->nombreitemconducta;
    }

    /**
     * Set descripcionitem
     *
     * @param string $descripcionitem
     * @return Conducta
     */
    public function setDescripcionitem($descripcionitem)
    {
        $this->descripcionitem = $descripcionitem;

        return $this;
    }

    /**
     * Get descripcionitem
     *
     * @return string 
     */
    public function getDescripcionitem()
    {
        return $this->descripcionitem;
    }

    /**
     * Get idconducta
     *
     * @return integer 
     */
    public function getIdconducta()
    {
        return $this->idconducta;
    }
}
