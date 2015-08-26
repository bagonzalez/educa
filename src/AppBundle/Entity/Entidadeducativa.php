<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidadeducativa
 */
class Entidadeducativa
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $identidadeducativa;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nivelescolarnivelescolar;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $estudianteestudiante;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $docentedocente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nivelescolarnivelescolar = new \Doctrine\Common\Collections\ArrayCollection();
        $this->estudianteestudiante = new \Doctrine\Common\Collections\ArrayCollection();
        $this->docentedocente = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Entidadeducativa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Entidadeducativa
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Entidadeducativa
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get identidadeducativa
     *
     * @return integer 
     */
    public function getIdentidadeducativa()
    {
        return $this->identidadeducativa;
    }

    /**
     * Add nivelescolarnivelescolar
     *
     * @param \AppBundle\Entity\Nivelescolar $nivelescolarnivelescolar
     * @return Entidadeducativa
     */
    public function addNivelescolarnivelescolar(\AppBundle\Entity\Nivelescolar $nivelescolarnivelescolar)
    {
        $this->nivelescolarnivelescolar[] = $nivelescolarnivelescolar;

        return $this;
    }

    /**
     * Remove nivelescolarnivelescolar
     *
     * @param \AppBundle\Entity\Nivelescolar $nivelescolarnivelescolar
     */
    public function removeNivelescolarnivelescolar(\AppBundle\Entity\Nivelescolar $nivelescolarnivelescolar)
    {
        $this->nivelescolarnivelescolar->removeElement($nivelescolarnivelescolar);
    }

    /**
     * Get nivelescolarnivelescolar
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNivelescolarnivelescolar()
    {
        return $this->nivelescolarnivelescolar;
    }

    /**
     * Add estudianteestudiante
     *
     * @param \AppBundle\Entity\Estudiante $estudianteestudiante
     * @return Entidadeducativa
     */
    public function addEstudianteestudiante(\AppBundle\Entity\Estudiante $estudianteestudiante)
    {
        $this->estudianteestudiante[] = $estudianteestudiante;

        return $this;
    }

    /**
     * Remove estudianteestudiante
     *
     * @param \AppBundle\Entity\Estudiante $estudianteestudiante
     */
    public function removeEstudianteestudiante(\AppBundle\Entity\Estudiante $estudianteestudiante)
    {
        $this->estudianteestudiante->removeElement($estudianteestudiante);
    }

    /**
     * Get estudianteestudiante
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstudianteestudiante()
    {
        return $this->estudianteestudiante;
    }

    /**
     * Add docentedocente
     *
     * @param \AppBundle\Entity\Docente $docentedocente
     * @return Entidadeducativa
     */
    public function addDocentedocente(\AppBundle\Entity\Docente $docentedocente)
    {
        $this->docentedocente[] = $docentedocente;

        return $this;
    }

    /**
     * Remove docentedocente
     *
     * @param \AppBundle\Entity\Docente $docentedocente
     */
    public function removeDocentedocente(\AppBundle\Entity\Docente $docentedocente)
    {
        $this->docentedocente->removeElement($docentedocente);
    }

    /**
     * Get docentedocente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocentedocente()
    {
        return $this->docentedocente;
    }
}
