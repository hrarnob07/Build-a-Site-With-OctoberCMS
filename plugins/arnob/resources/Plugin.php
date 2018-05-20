<?php namespace arnob\resources;


use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'arnob demo',
            'description' => 'Provides features used by the provided demonstration theme.',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerComponents()
    {
        return [
            '\arnob\resources\Components\Link' => 'resourcesLink'
        ];
    }
}
