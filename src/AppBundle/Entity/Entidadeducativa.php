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
    private $sector;

    /**
     * @var integer
     */
    private $zona;

    /**
     * @var integer
     */
    private $identidadeducativa;

    /**
     * @var \AppBundle\Entity\Municipio
     */
    private $municipio;

    /**
     * @var \AppBundle\Entity\Departamento
     */
    private $departamento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nivelescolar;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $docente;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $estudiante;
    
    protected $entidadeducativaHasDocentes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nivelescolar = new \Doctrine\Common\Collections\ArrayCollection();
        $this->docente = new \Doctrine\Common\Collections\ArrayCollection();
        $this->estudiante = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set sector
     *
     * @param integer $sector
     * @return Entidadeducativa
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return integer 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set zona
     *
     * @param integer $zona
     * @return Entidadeducativa
     */
    public function setZona($zona)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return integer 
     */
    public function getZona()
    {
        return $this->zona;
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
    
    public function getId()
    {
        return $this->identidadeducativa;
    }

    /**
     * Set municipio
     *
     * @param \AppBundle\Entity\Municipio $municipio
     * @return Entidadeducativa
     */
    public function setMunicipio(\AppBundle\Entity\Municipio $municipio = null)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return \AppBundle\Entity\Municipio 
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set departamento
     *
     * @param \AppBundle\Entity\Departamento $departamento
     * @return Entidadeducativa
     */
    public function setDepartamento(\AppBundle\Entity\Departamento $departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \AppBundle\Entity\Departamento 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Add nivelescolar
     *
     * @param \AppBundle\Entity\Nivelescolar $nivelescolar
     * @return Entidadeducativa
     */
    public function addNivelescolar(\AppBundle\Entity\Nivelescolar $nivelescolar)
    {
        $this->nivelescolar[] = $nivelescolar;

        return $this;
    }

    /**
     * Remove nivelescolar
     *
     * @param \AppBundle\Entity\Nivelescolar $nivelescolar
     */
    public function removeNivelescolar(\AppBundle\Entity\Nivelescolar $nivelescolar)
    {
        $this->nivelescolar->removeElement($nivelescolar);
    }

    /**
     * Get nivelescolar
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNivelescolar()
    {
        return $this->nivelescolar;
    }

    /**
     * Add docente
     *
     * @param \AppBundle\Entity\Docente $docente
     * @return Entidadeducativa
     */
    public function addDocente(\AppBundle\Entity\Docente $docente)
    {
        $this->docente[] = $docente;

        return $this;
    }

    /**
     * Remove docente
     *
     * @param \AppBundle\Entity\Docente $docente
     */
    public function removeDocente(\AppBundle\Entity\Docente $docente)
    {
        $this->docente->removeElement($docente);
    }

    /**
     * Get docente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocente()
    {
        return $this->docente;
    }

    /**
     * Add estudiante
     *
     * @param \AppBundle\Entity\Estudiante $estudiante
     * @return Entidadeducativa
     */
    public function addEstudiante(\AppBundle\Entity\Estudiante $estudiante)
    {
        $this->estudiante[] = $estudiante;

        return $this;
    }

    /**
     * Remove estudiante
     *
     * @param \AppBundle\Entity\Estudiante $estudiante
     */
    public function removeEstudiante(\AppBundle\Entity\Estudiante $estudiante)
    {
        $this->estudiante->removeElement($estudiante);
    }

    /**
     * Get estudiante
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEstudiante()
    {
        return $this->estudiante;
    }
    
     /**
     * {@inheritdoc}
     */
    public function setEntidadeducativaHasDocentes($entidadeducativaHasDocentes)
    {
        $this->entidadeducativaHasDocentes = new ArrayCollection();

        foreach ($entidadeducativaHasDocentes as $entidadeducativaHasDocente) {
            $this->addEntidadeducativaHasDocentes($entidadeducativaHasDocente);
        }
    }
    
    /**
     * Remove entidadeducativa
     *
     * @param \AppBundle\Entity\EntidadeducativaHasDocente $entidadeducativaHasDocente
     */
    public function removeEntidadeducativaHasDocentes(EntidadeducativaHasDocente $entidadeducativaHasDocente)
    {
        $this->entidadeducativaHasDocentes->removeElement($entidadeducativaHasDocente);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntidadeducativaHasDocentes()
    {
        return $this->entidadeducativaHasDocentes;
    }

   
    
    public function __toString()
    {
        return $this->getNombre();
    }
}
