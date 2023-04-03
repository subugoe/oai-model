<?php

declare(strict_types=1);

use Rector\Core\ValueObject\PhpVersion;
use Rector\Set\ValueObject\SetList;

return static function (Rector\Config\RectorConfig $containerConfigurator): void {
    $containerConfigurator->importShortClasses(false);

    $containerConfigurator->sets([
        SetList::PHP_80,
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
