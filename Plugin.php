<?php namespace RicardoLapa\Backoffice;

use Backend;
use System\Classes\PluginBase;

/**
 * Backoffice Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Backoffice',
            'description' => 'Manage your Website Content',
            'author'      => 'RicardoLapa',
            'icon'        => 'icon-cogs'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'RicardoLapa\Backoffice\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [
            'ricardolapa.backoffice.manage_gallery' => ['tab' => 'Backoffice','label' => 'Manage Gallery'],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'backoffice' => [
                'label'       => 'Backoffice',
                'url'         => Backend::url('ricardolapa/backoffice/menubar'),
                'icon'        => 'icon-cogs',
                'permissions' => ['ricardolapa.backoffice.*'],
                'order'       => 500,
                    'sideMenu'  => [
                        'menubar' => [
                            'label'       => 'Menubar',
                            'url'         => Backend::url('ricardolapa/backoffice/menubar'),
                            'icon'        => 'icon-sitemap',
                            'permissions' => ['ricardolapa.backoffice.*'],
                            'order'       => 501,
                        ]
                    ]
            ],
        ];
    }
}
