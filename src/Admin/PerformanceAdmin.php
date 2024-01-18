<?php

namespace Goldfinch\Performance\Admin;

use SilverStripe\Admin\ModelAdmin;
use Goldfinch\Performance\Models\Performance;
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

    private static $menu_icon_class = 'font-icon-rocket';

    public $showImportForm = true;

    public $showSearchForm = true;

    private static $page_length = 30;

    protected function getGridFieldConfig(): GridFieldConfig
    {
        $config = parent::getGridFieldConfig();

        $config->removeComponentsByType(GridFieldExportButton::class);
        $config->removeComponentsByType(GridFieldPrintButton::class);
        $config->removeComponentsByType(GridFieldImportButton::class);

        return $config;
    }
}
