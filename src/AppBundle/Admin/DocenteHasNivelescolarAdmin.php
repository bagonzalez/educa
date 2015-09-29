<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class DocenteHasNivelescolarAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                 ->add('nivelescolar'                
                 )
                
                 ->add('docente'                  
                 )
                
                ->add('entidadeducativa'                   
                 )
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                 ->add('nivelescolar'                
                 )
                
                 ->add('docente'                  
                 )
                
                ->add('entidadeducativa'                   
                 )
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
                  ->add('nivelescolar', 'sonata_type_model_list', 
                    array('required' => false,
                        
                     )
                    
                 )
                
                 ->add('docente', 'sonata_type_model_list', 
                    array('required' => false,
                        
                     )
                    
                 )
                
                ->add('entidadeducativa', 'sonata_type_model_list', 
                    array('required' => false,
                        
                     )
                    
                 )
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
                 ->add('nivelescolar'                
                 )
                
                 ->add('docente'                  
                 )
                
                ->add('entidadeducativa'                   
                 )
        ;
    }
}
