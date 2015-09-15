<?php

/*
 * Copyright (C) 2015 Bruno Gonzalez <<bagonzalez.sv at gmail.com>>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


/**
 * Description of DocenteAdmin
 *
 * @author bdiaz
 */
class DocenteAdmin extends Admin{
    
    protected $pool;

    /**
     * @param string                            $code
     * @param string                            $class
     * @param string                            $baseControllerName
     * @param \Sonata\MediaBundle\Provider\Pool $pool
     */
    /*public function __construct($code, $class, $baseControllerName, Pool $pool)
    {
        parent::__construct($code, $class, $baseControllerName);

        $this->pool = $pool;
    }*/
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        
       

        /*if (!$context) {
            $context = $this->pool->getDefaultContext();
        }

        $formats = array();
        foreach ((array) $this->pool->getFormatNamesByContext($context) as $name => $options) {
            $formats[$name] = $name;
        }

        $contexts = array();
        foreach ((array) $this->pool->getContexts() as $contextItem => $format) {
            $contexts[$contextItem] = $contextItem;
        }*/
        
        $pool=$this->configurationPool;
        
        $formMapper
            ->add('nombre')
            ->add('apellido')
            ->add('fechanacimiento', 'date', array('years' => range(1970, date("Y")-18), 'format' => 'dd-MMMM-yyyy'))
            ->add('sexo', 'choice', array('choices' => array('Masculino' => 'Masculino', 'Femenino' => 'Femenino', 'Otro' => 'Otro')))
            ->end()
            ->with('Colegio')
            /*->add('entidadeducativa', 
                    'sonata_type_model', array('label' => 'Districts', 'expanded' => true, 'by_reference' => false, 'compound' => true, 'multiple' => true))
            */
            
                ->add('entidadeducativaHasDocentes', 'sonata_type_collection', 
                        
                    array(
                        'cascade_validation' => true,
                    ), array(
                        'edit'              => 'inline',
                        'inline'            => 'table',
                        'sortable'          => 'position',                        
                        'admin_code'        => 'sonata.admin.entidadeducativahasdocente'
                       
                    )
                         
                    
                )
            ->end()
            //->add('author', 'entity', array('class' => 'AppBundle\Entity\Departamento'))
            //->add('body') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('apellido')
            ->add('fechanacimiento')
            
     
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('iddocente')
            ->add('nombre')
            ->add('apellido')
            ->add('fechanacimiento')
            ->add('sexo', 'choice', array('Masculino' => 'Masculino', 'Femenino' => 'Femenino', 'Otro' => 'Otro'))
          
        ;
    }
}
