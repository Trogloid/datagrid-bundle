<?php
/*
 * This file is part of NeutronDataGridBundle
 *
 * (c) Nikolay Georgiev <azazen09@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Neutron\DataGridBundle\DataGrid;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Interface implemented by DatagridHandler class
 *
 * @author Nikolay Georgiev <azazen09@gmail.com>
 * @since 1.0
 */
interface DataGridHandlerInterface
{
    /**
     * Sets event dispatcher
     * 
     * Provides fluent innterface
     * 
     * @param EventDispatcherInterface $dispatcher
     * @return Neutron\DataGridBundle\DataGrid\DataGridHandlerInterface
     */
    public function setDispatcher(EventDispatcherInterface $dispatcher);
    
    /**
     * Sets datagrid
     * 
     * Provides fluent innterface
     * 
     * @param DataGridInterface $dataGrid
     * @return Neutron\DataGridBundle\DataGrid\DataGridHandlerInterface
     */
    public function setDataGrid(DataGridInterface $dataGrid);
    
    /**
     * Gets datagrid
     * 
     * @return Neutron\DataGridBundle\DataGrid\DataGridInterface
     * @throws \LogicException
     */
    public function getDataGrid();
    
    /**
     * Gets resolved options
     * 
     * @return array
     */
    public function getOptions();
    
    /**
     * Resolveks options
     * 
     * Provides fluent innterface
     * 
     * @param array $options
     * @return Neutron\DataGridBundle\DataGrid\DataGridHandlerInterface
     * @throws \LogicException
     */
    public function resolveOptions(array $options);
    
    /**
     * Builds query object
     * 
     * Provides fluent innterface
     * 
     * @return Neutron\DataGridBundle\DataGrid\DataGridHandlerInterface
     */
    public function buildQuery();
    
    /**
     * Builds data
     * 
     * Provides fluent innterface
     * 
     * @return Neutron\DataGridBundle\DataGrid\DataGridHandlerInterface
     */
    public function buildData();
    
    /**
     * Gets query object
     * 
     * @returns object
     * @throws \LogicException
     */
    public function getQuery();
    
    /**
     * Sets query
     * 
     * Provides fluent innterface
     * 
     * @param Object $query
     * @return Neutron\DataGridBundle\DataGrid\DataGridHandlerInterface
     */
    public function setQuery($query);
    
    /**
     * Gets query result
     * 
     * @return array
     */
    public function getResult();
    
    /**
     * Gets result after Data event
     * 
     * @return array
     * @throws \LogicException
     */
    public function getData();
    
    /**
     * Gets processed data ready for jqgrid reader
     * 
     * @return array
     * @throws \LogicException
     */
    public function getProcessedData();
    
    /**
     * 
     * Provides fluent innterface
     * 
     * @param integer $count
     * @return Neutron\DataGridBundle\DataGrid\DataGridHandlerInterface
     */
    public function setCount($count);
    
    /**
     * Gets all records count 
     * 
     * @return integer
     * @throws \LogicException
     */
    public function getCount();

}