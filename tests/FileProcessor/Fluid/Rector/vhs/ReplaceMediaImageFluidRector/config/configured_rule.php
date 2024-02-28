<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Ssch\TYPO3Rector\FileProcessor\Fluid\Rector\vhs\ReplaceMediaImageFluidRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../../../../../../../config/config_test.php');
    $rectorConfig->services()
        ->set(ReplaceMediaImageFluidRector::class)->tag('typo3_rector.fluid_rectors');
};
