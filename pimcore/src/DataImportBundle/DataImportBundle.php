<?php

namespace DataImportBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;

class DataImportBundle extends AbstractPimcoreBundle
{
    public function getJsPaths()
    {
        return [
            '/bundles/dataimport/js/pimcore/startup.js'
        ];
    }
}