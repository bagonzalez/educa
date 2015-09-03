<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocenteHasNivelescolar
 */
class DocenteHasNivelescolar
{
    /**
     * @var \AppBundle\Entity\Docente
     */
    private $docente;

    /**
     * @var \AppBundle\Entity\Nivelescolar
     */
    private $nivelescolar;

    /**
     * @var \AppBundle\Entity\Entidadeducativa
     */
    private $entidadeducativa;


    /**
     * Set docente
     *
     * @param \AppBundle\Entity\Docente $docente
     * @return DocenteHasNivelescolar
     */
    public function setDocente(\AppBundle\Entity\Docente $docente)
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

    /**
     * Set nivelescolar
     *
     * @param \AppBundle\Entity\Nivelescolar $nivelescolar
     * @return DocenteHasNivelescolar
     */
    public function setNivelescolar(\AppBundle\Entity\Nivelescolar $nivelescolar)
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
     * Set entidadeducativa
     *
     * @param \AppBundle\Entity\Entidadeducativa $entidadeducativa
     * @return DocenteHasNivelescolar
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
