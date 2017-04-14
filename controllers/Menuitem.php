<?php namespace RicardoLapa\Backoffice\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Menuitem Back-end Controller
 */
class Menuitem extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RicardoLapa.Backoffice', 'backoffice', 'menuitem');
    }
}
