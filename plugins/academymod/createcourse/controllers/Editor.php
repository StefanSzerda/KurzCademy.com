<?php namespace Academymod\Createcourse\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Editor Back-end Controller
 */
class Editor extends Controller
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

        BackendMenu::setContext('Academymod.Createcourse', 'createcourse', 'editor');
    }
}
