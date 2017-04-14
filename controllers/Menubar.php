<?php namespace RicardoLapa\Backoffice\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Menubar Back-end Controller
 */
class Menubar extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public $bodyClass = 'compact-container';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RicardoLapa.Backoffice', 'backoffice', 'menubar');
    }

    public function create() {

        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/ricardolapa/backoffice/assets/css/forms.css');

        return $this->asExtension('FormController')->create();
    }

    public function update($recordId = null) {

        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/ricardolapa/backoffice/assets/css/forms.css');

        return $this->asExtension('FormController')->update($recordId);
    }
}
