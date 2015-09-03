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
 * Description of EntidadeducativaAdmin
 *
 * @author bdiaz
 */
class EntidadeducativaAdmin extends Admin {
    
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nombre')
            ->add('telefono')
            ->add('email')
            ->add('zona', 'choice', array('choices' => array(1 => 'Urbana', 2 => 'Rural')))
            ->add('sector', 'choice', array('choices' => array(1 => 'Publica', 2 => 'Privada')))            
            ->add('departamento', 'entity', array('class' => 'AppBundle\Entity\Departamento')) 
            ->add('municipio', 'entity', array('class' => 'AppBundle\Entity\Municipio')) 
            //->add('author', 'entity', array('class' => 'AppBundle\Entity\Departamento'))
            //->add('body') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nombre')
            ->add('telefono')
            ->add('email')
         
          
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('identidadeducativa')
            ->add('nombre')
            ->add('telefono')
            ->add('email')
            ->add('zona', 'choice', array('choices' => array(1 => 'Urbana', 2 => 'Rural')))
            ->add('sector', 'choice', array('choices' => array(1 => 'Publica', 2 => 'Privada'))) 
            ->add('departamento', 'entity', array('class' => 'AppBundle\Entity\Departamento')) 
            ->add('municipio', 'entity', array('class' => 'AppBundle\Entity\Municipio')) 
        ;
    }
}
