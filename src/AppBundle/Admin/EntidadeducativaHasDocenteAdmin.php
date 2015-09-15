<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EntidadeducativaHasDocenteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('fechainicio')
            ->add('fechafin')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('fechainicio')
            ->add('fechafin')
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
        $link_parameters = array();

        if ($this->hasParentFieldDescription()) {
            $link_parameters = $this->getParentFieldDescription()->getOption('link_parameters', array());
        }

        if ($this->hasRequest()) {
            $context = $this->getRequest()->get('context', null);

            if (null !== $context) {
                $link_parameters['context'] = $context;
            }
        }
        
        $formMapper
            /*->add('docente', 'sonata_type_model_list', array('required' => false), array(
                'link_parameters' => $link_parameters
            ))*/
            ->add('entidadeducativa', 'sonata_type_model_list', 
                    array('required' => false,
                        
                     )
                    
                 )
            ->add('docente', 'sonata_type_model_list', 
                    array('required' => false,
                        
                     )                    
                 )
            ->add('fechainicio', 'date', array('years' => range(1970, 2025), 'format' => 'dd-MMMM-yyyy'))
            ->add('fechafin', 'date', array('years' => range(1970, 2025), 'format' => 'dd-MMMM-yyyy'))
            ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('fechainicio')
            ->add('fechafin')
        ;
    }
}
