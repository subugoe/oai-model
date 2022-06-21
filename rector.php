<?php

declare(strict_types=1);

use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\SetList;

return static function (Rector\Config\RectorConfig $containerConfigurator): void {
    $containerConfigurator->disableImportShortClasses();

    $containerConfigurator->sets([
        SetList::PHP_74,
        SetList::CODING_STYLE,
        SetList::CODE_QUALITY,
    ]);

    $containerConfigurator->paths([
        'src/',
    ]);

    $containerConfigurator->phpVersion(PhpVersion::PHP_74);
    $containerConfigurator->skip([
        '*/var/*',
    ]);
};
