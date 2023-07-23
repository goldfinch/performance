<?php

namespace Goldfinch\Performance\Admin;

use Goldfinch\Performance\Models\Performance;
use SilverStripe\Admin\ModelAdmin;
use SilverStripe\Forms\GridField\GridFieldConfig;
use SilverStripe\Forms\GridField\GridFieldPrintButton;
use SilverStripe\Forms\GridField\GridFieldExportButton;
use SilverStripe\Forms\GridField\GridFieldImportButton;

class PerformanceAdmin extends ModelAdmin
{
    private static $url_segment = 'performance';

    private static $menu_title = 'Performance';

    private static $managed_models = [
        Performance::class => [
            'title' => 'Pages',
        ],
    ];

    private static $menu_priority = 0;

    private static $menu_icon_class = 'bi-speedometer';

    public $showImportForm = true;

    public $showSearchForm = true;

    private static $page_length = 30;

    public function getList()
    {
        $list =  parent::getList();

        // ..

        return $list;
    }

    public function getSearchContext()
    {
        $context = parent::getSearchContext();

        // ..

        return $context;
    }

    protected function getGridFieldConfig(): GridFieldConfig
    {
        $config = parent::getGridFieldConfig();

        $config->removeComponentsByType(GridFieldExportButton::class);
        $config->removeComponentsByType(GridFieldPrintButton::class);
        $config->removeComponentsByType(GridFieldImportButton::class);

        return $config;
    }

    public function getEditForm($id = null, $fields = null)
    {
        $form = parent::getEditForm($id, $fields);

        // ..

        return $form;
    }

    public function getExportFields()
    {
        return [
            // 'Name' => 'Name',
            // 'Category.Title' => 'Category'
        ];
    }
}
