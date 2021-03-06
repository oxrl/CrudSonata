<?php
// src/AppBundle/Admin/PostAdmin.php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class RecursoAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('isbn')
            ->add('titulo')
            ->add('resumen')
            ->add('totalpag')
            ->add('tipo')
            ->add('codeditorial', 'entity', array('class'=>'Admin\AdminBundle\Entity\Editorial'))
          // ...
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('isbn')
            ->add('titulo')
            ->add('resumen')
            ->add('totalpag')
            ->add('tipo')
            ->add('codeditorial')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('isbn')
            ->add('titulo')
            ->add('resumen')
            ->add('totalpag')
            ->add('tipo')
            ->addIdentifier('codeditorial', 'entity', array('class'=>'Admin\AdminBundle\Entity\Editorial'))
        ;
    }

    // Fields to be shown on show action
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('isbn')
            ->add('titulo')
            ->add('resumen')
            ->add('totalpag')
            ->add('tipo')
            ->add('codeditorial')
        ;
    }
}