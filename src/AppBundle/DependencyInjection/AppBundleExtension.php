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
namespace AppBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Definition\Processor;
use Sonata\EasyExtendsBundle\Mapper\DoctrineCollector;


/**
 * Description of AppBundleExtension
 *
 * @author bdiaz
 */
class AppBundleExtension extends Extension
{
     public function load(array $configs, ContainerBuilder $container) {
        // ...
        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        //$loader->load('admin.yml');
        
       
        
        //$config        = $processor->processConfiguration($configuration, $configs);
        
         //   $this->registerDoctrineMapping($config);
        
    }
    
     /**
     * @param array $config
     *
     * @return void
     */
    public function registerDoctrineMapping(array $config)
    {
        $collector = DoctrineCollector::getInstance();

        $collector->addAssociation($config['class']['docente'], 'mapOneToMany', array(
            'fieldName'     => 'entidadeducativaHasDocentes',
            'targetEntity'  => $config['class']['entidadeducativa_has_docente'],
            'cascade'       => array(
                'persist',
            ),
            'mappedBy'      => 'media',
            'orphanRemoval' => false,
        ));

        $collector->addAssociation($config['class']['entidadeducativa_has_docente'], 'mapManyToOne', array(
            'fieldName'     => 'docente',
            'targetEntity'  => $config['class']['docente'],
            'cascade'       => array(
                'persist',
            ),
            'mappedBy'      => NULL,
            'inversedBy'    => 'entidadeducativaHasDocentes',
            'joinColumns'   =>  array(
                array(
                    'name'  => 'iddocente',
                    'referencedColumnName' => 'iddocente',
                ),
            ),
            'orphanRemoval' => false,
        ));

        $collector->addAssociation($config['class']['entidadeducativa_has_docente'], 'mapManyToOne', array(
            'fieldName'     => 'entidadeducativa',
            'targetEntity'  => $config['class']['entidadeducativa'],
            'cascade'       => array(
                 'persist',
            ),
            'mappedBy'      => NULL,
            'inversedBy'    => 'entidadeducativaHasDocentes',
            'joinColumns'   => array(
                array(
                    'name'  => 'idDocente',
                    'referencedColumnName' => 'idDocente',
                ),
            ),
            'orphanRemoval' => false,
        ));

        $collector->addAssociation($config['class']['entidadeducativa'], 'mapOneToMany', array(
            'fieldName'     => 'entidadeducativaHasDocentes',
            'targetEntity'  => $config['class']['entidadeducativaHasDocentes'],
            'cascade'       => array(
                'persist',
            ),
            'mappedBy'      => 'entidadeducativa',
            'orphanRemoval' => true,
            'orderBy'       => array(
                'position'  => 'ASC',
            ),
        ));
    }

}
