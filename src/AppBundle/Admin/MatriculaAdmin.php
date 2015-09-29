<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MatriculaAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('anioescolar')
            ->add('repite')
            ->add('sobreedad')
           
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('idmatricula')
            ->add('anioescolar')
            ->add('repite')
            ->add('sobreedad')
            
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                
             ->with('Nivel Escolar')
            /*->add('entidadeducativa', 
                    'sonata_type_model', array('label' => 'Districts', 'expanded' => true, 'by_reference' => false, 'compound' => true, 'multiple' => true))
            */
            
                ->add('nivelescolar', null, 
                        
                    array(
                        'cascade_validation' => true,
                    ), array(
                        'edit'              => 'inline',
                        'inline'            => 'table',
                        'sortable'          => 'position',                        
                        'admin_code'        => 'app.admin.entidadeducativa'
                       
                    )
                         
                    
                )
            ->end()
                
                
            ->with('Estudiante')
            /*->add('entidadeducativa', 
                    'sonata_type_model', array('label' => 'Districts', 'expanded' => true, 'by_reference' => false, 'compound' => true, 'multiple' => true))
            */
            
                ->add('estudiante', null, 
                        
                    array(
                        'cascade_validation' => true,
                    ), array(
                        'edit'              => 'inline',
                        'inline'            => 'table',
                        'sortable'          => 'position',                        
                        'admin_code'        => 'app.admin.estudiante'
                       
                    )
                         
                    
                )
            ->end()
                
            ->add('anioescolar')
            ->add('repite')
            ->add('sobreedad')
            ->end()
            ->with('Colegio')
            /*->add('entidadeducativa', 
                    'sonata_type_model', array('label' => 'Districts', 'expanded' => true, 'by_reference' => false, 'compound' => true, 'multiple' => true))
            */
            
                ->add('entidadeducativa', null, 
                        
                    array(
                        'cascade_validation' => true,
                    ), array(
                        'edit'              => 'inline',
                        'inline'            => 'table',
                        'sortable'          => 'position',                        
                        'admin_code'        => 'app.admin.entidadeducativa'
                       
                    )
                         
                    
                )
            ->end()
            
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('estudiante')
            ->add('anioescolar')
            ->add('repite')
            ->add('sobreedad')
            ->add('idmatricula')
        ;
    }
}
