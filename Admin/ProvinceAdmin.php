<?php

namespace Nazka\LocationBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class ProvinceAdmin extends Admin
{

    //Last components first in List
    protected $datagridValues = array(
        '_page' => 1,
        '_sort_order' => 'DESC', // sort direction
        '_sort_by' => 'name' // field name
    );

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
                ->addIdentifier('name', null, array(
                    'label' => $this->trans('name', array(), 'location-bundle')
                ))
                ->addIdentifier('isoCode', null, array(
                    'label' => $this->trans('iso.code', array(), 'location-bundle')
                ))
                ->add('country', null, array(
                    'label' => $this->trans('country', array(), 'location-bundle')
                ))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('name', null, array('label' => $this->trans('name', array(), 'location-bundle')))
                ->add('country', null, array(
                    'label' => $this->trans('country', array(), 'location-bundle')
                ))
        ;
    }

    protected function configureShowField(ShowMapper $showMapper)
    {
        $showMapper
                ->add('name', null, array('label' => $this->trans('name', array(), 'location-bundle')))
                ->add('isoCode', null, array(
                    'label' => $this->trans('iso.code', array(), 'location-bundle')
                ))
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
                ->add('name', null, array('label' => $this->trans('name', array(), 'location-bundle')))
                ->add('isoCode', null, array(
                    'label' => $this->trans('iso.code', array(), 'location-bundle')
                ))
        ;
    }
}
