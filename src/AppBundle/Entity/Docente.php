<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Docente
 */
class Docente
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var \DateTime
     */
    private $fechanacimiento;

    /**
     * @var enum
     */
    private $sexo;

    /**
     * @var integer
     */
    private $iddocente;
    
    protected $entidadeducativaHasDocentes;
    
    protected $nivelesAsignadosHasDocentes;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Docente
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
     * Set apellido
     *
     * @param string $apellido
     * @return Docente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set fechanacimiento
     *
     * @param \DateTime $fechanacimiento
     * @return Docente
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime 
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set sexo
     *
     * @param enum $sexo
     * @return Docente
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return enum 
     */
    public function getSexo()
    {
        return $this->sexo;
    }
    
    /**
     * {@inheritdoc}
     */
    public function setNivelesAsignadosHasDocentes($nivelesAsignadosHasDocentes)
    {
        $this->nivelesAsignadosHasDocentes = new ArrayCollection();

        foreach ($nivelesAsignadosHasDocentes as $nivelesAsignadosHasDocentes) {
            $this->addNivelesAsignadosHasDocentes($nivelesAsignadosHasDocentes);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getNivelesAsignadosHasDocentes()
    {
        return $this->nivelesAsignadosHasDocentes;
    }

    /**
     * {@inheritdoc}
     */
    public function addNivelesAsignadosHasDocentes(DocenteHasNivelescolar $nivelesAsignadosHasDocentes)
    {
        $nivelesAsignadosHasDocentes->setDocente($this);

        $this->nivelesAsignadosHasDocentes[] = $nivelesAsignadosHasDocentes;
    }
    
    /**
     * Remove entidadeducativa
     *
     * @param \AppBundle\Entity\EntidadeducativaHasDocente $entidadeducativaHasDocente
     */
    public function removeNivelesAsignadosHasDocentes(DocenteHasNivelescolar $nivelesAsignadosHasDocentes)
    {
        $this->nivelesAsignadosHasDocentes->removeElement($nivelesAsignadosHasDocentes);
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
     * {@inheritdoc}
     */
    public function getEntidadeducativaHasDocentes()
    {
        return $this->entidadeducativaHasDocentes;
    }

    /**
     * {@inheritdoc}
     */
    public function addEntidadeducativaHasDocentes(EntidadeducativaHasDocente $entidadeducativaHasDocente)
    {
        $entidadeducativaHasDocente->setDocente($this);

        $this->entidadeducativaHasDocentes[] = $entidadeducativaHasDocente;
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
     * Get iddocente
     *
     * @return integer 
     */
    public function getIddocente()
    {
        return $this->iddocente;
    }
    
      public function getId()
    {
        return $this->iddocente;
    }
    
     public function __toString()
    {
        return $this->getNombre();
    }
    
    public function prePersist()
    {
        $arreglo=$this->entidadeducativaHasDocentes;
    }

    public function preUpdate()
    {
        $arreglo=$this->entidadeducativaHasDocentes;
    }
}
