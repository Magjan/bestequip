<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ApiRequestLogRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ApiRequestLogCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ApiRequestLogCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\ApiRequestLog::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/api-request-log');
        CRUD::setEntityNameStrings('api request log', 'Лог запросов');
  
        CRUD::denyAccess('create');
        CRUD::denyAccess('delete');
        CRUD::denyAccess('Edit');
        // Define the columns to show in the table
        $this->crud->addColumns([
            [
                'name' => 'endpoint',
                'type' => 'text',
                'label' => 'Адрес ссылки',
            ],
            [
                'name' => 'method',
                'type' => 'text',
                'label' => 'HTTP методы',
            ],
            [
                'name' => 'request_data',
                'type' => 'textarea',
                'label' => 'Тело Запроса',
            ],
            [
                'name' => 'ip_address',
                'type' => 'text',
                'label' => 'IP адрес',
            ],
            [
                'name' => 'created_at',
                'type' => 'datetime',
                'label' => 'Дата создания',
            ],
        ]);

        // Optionally, define which fields to show on the create/edit forms
        $this->crud->addFields([
            [
                'name' => 'endpoint',
                'type' => 'text',
                'label' => 'Endpoint',
            ],
            [
                'name' => 'method',
                'type' => 'text',
                'label' => 'HTTP Method',
            ],
            [
                'name' => 'request_data',
                'type' => 'textarea',
                'label' => 'Request Data',
            ],
            [
                'name' => 'ip_address',
                'type' => 'text',
                'label' => 'IP Address',
            ],
        ]);

        $this->crud->setTitle('Лог запросов');
        $this->crud->entity_name = 'Лог запросов';
       

    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('endpoint');
        CRUD::column('method');
        CRUD::column('request_data');
        CRUD::column('ip_address');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ApiRequestLogRequest::class);

        CRUD::field('endpoint');
        CRUD::field('method');
        CRUD::field('request_data');
        CRUD::field('ip_address');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
