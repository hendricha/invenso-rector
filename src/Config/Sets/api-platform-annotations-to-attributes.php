<?php

/**
 * Copyright (c) 2023 Invenso® - All Rights Reserved.
 * Contact: info@invenso.nl
 *
 * Permission to use, copy, modify, and distribute this software and its
 * documentation without a signed licensing agreement is prohibited.
 *
 * You should have received a copy of the license with this file.
 * If not, please write to: info@invenso.nl, or visit: https://www.invenso.nl
 *
 */

declare(strict_types=1);

namespace Invenso\Rector\Config\Sets;

use Rector\Config\RectorConfig;
use Rector\Php80\Rector\Class_\AnnotationToAttributeRector;
use Rector\Php80\ValueObject\AnnotationToAttribute;

return static function (RectorConfig $rectorConfig) : void {
    $rectorConfig->ruleWithConfiguration(AnnotationToAttributeRector::class, [
        // annotation
        new AnnotationToAttribute('ApiPlatform\\Core\\Annotation\\ApiFilter', 'ApiPlatform\\Metadata\\ApiFilter'),
        new AnnotationToAttribute('ApiPlatform\\Core\\Annotation\\ApiResource', 'ApiPlatform\\Metadata\\ApiResource'),
        new AnnotationToAttribute('ApiPlatform\\Core\\Annotation\\ApiSubresource', 'ApiPlatform\\Metadata\\ApiSubresource'),
        new AnnotationToAttribute('ApiPlatform\\Core\\Annotation\\ApiProperty', 'ApiPlatform\\Metadata\\ApiProperty'),
        // filter
        new AnnotationToAttribute(
            'ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter',
            'ApiPlatform\Metadata\Filter\BooleanFilter'
        ),
        new AnnotationToAttribute(
            'ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\ExistsFilter',
            'ApiPlatform\Metadata\Filter\ExistsFilter'
        ),
        new AnnotationToAttribute(
            'ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\OrderFilter',
            'ApiPlatform\Metadata\Filter\OrderFilter'
        ),
    ]);
};
