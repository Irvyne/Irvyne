<?php

namespace Irvyne\BlogBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ArticleAdmin extends Admin
{
    public $supportsPreviewMode = true;

    /**
     * Fields to be shown on filter forms
     *
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('slug')
            ->add('excerpt')
            ->add('content')
            ->add('enabled')
            ->add('categories')
            ->add('tags')
        ;
    }

    /**
     * Fields to be shown on lists
     *
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            //->add('slug')
            ->add('excerpt')
            ->add('enabled', null, [
                'editable' => true,
            ])
            ->add('categories')
            ->add('tags')

            ->add('_action', 'actions', [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ]
            ])
        ;
    }

    /**
     * Fields to be shown on create/edit forms
     *
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
        /*
            ->add('title', 'text', ['label' => 'Post Title'])
            ->add('slug', null, [
                'required' => false,
            ])
            ->add('excerpt')
            ->add('content')
            ->add('enabled', null, [
                'required' => false,
            ])
            ->add('categories', null, [
                'multiple' => true,
                'expanded' => false,
            ])
            ->add('tags', null, [
                'required' => false,
            ])
        */
            ->add('title', 'a2lix_translations', [

            ])
        ;
    }

    /**
     * Fields to be shown
     *
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('title')
            ->add('slug')
            ->add('excerpt')
            ->add('content')
            ->add('enabled')
            ->add('categories')
            ->add('tags')
        ;
    }
}