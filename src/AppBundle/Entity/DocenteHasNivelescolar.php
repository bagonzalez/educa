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
    private $docentedocente;

    /**
     * @var \AppBundle\Entity\Nivelescolar
     */
    private $nivelescolarnivelescolar;

    /**
     * @var \AppBundle\Entity\Entidadeducativa
     */
    private $entidadeducativaentidadeducativa;


    /**
     * Set docentedocente
     *
     * @param \AppBundle\Entity\Docente $docentedocente
     * @return DocenteHasNivelescolar
     */
    public function setDocentedocente(\AppBundle\Entity\Docente $docentedocente)
    {
        $this->docentedocente = $docentedocente;

        return $this;
    }

    /**
     * Get docentedocente
     *
     * @return \AppBundle\Entity\Docente 
     */
    public function getDocentedocente()
    {
        return $this->docentedocente;
    }

    /**
     * Set nivelescolarnivelescolar
     *
     * @param \AppBundle\Entity\Nivelescolar $nivelescolarnivelescolar
     * @return DocenteHasNivelescolar
     */
    public function setNivelescolarnivelescolar(\AppBundle\Entity\Nivelescolar $nivelescolarnivelescolar)
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
     * Set entidadeducativaentidadeducativa
     *
     * @param \AppBundle\Entity\Entidadeducativa $entidadeducativaentidadeducativa
     * @return DocenteHasNivelescolar
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
