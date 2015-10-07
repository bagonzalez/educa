<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EvaluacionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('mesevaluacion')          
            ->add('matricula')
            ->add('conducta')
            ->add('notaconcepto')
            ->add('idevaluacion')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('mesevaluacion')
           
            ->add('matricula')
            ->add('conducta')
            ->add('notaconcepto')
            ->addIdentifier('idevaluacion')
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
            ->add('mesevaluacion')
            ->add('matricula')
            ->add('conducta')
            ->add('notaconcepto')
                
                
            ->end()
            ->with('Observaciones')
          
                ->add('evaluacionHasObservaciones', 'sonata_type_collection', 
                        
                    array(
                        'cascade_validation' => true,
                    ), array(
                        'edit'              => 'inline',
                        'inline'            => 'table',
                        'sortable'          => 'position',   
                        'admin_code'        => 'app.admin.evaluacion_has_observaciones'
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
             ->add('mesevaluacion')
            ->add('matricula')
            ->add('conducta')
            ->add('notaconcepto')
            ->add('idevaluacion')
        ;
    }
}
