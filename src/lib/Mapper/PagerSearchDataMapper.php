<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace Ibexa\Platform\Search\Mapper;

use Pagerfanta\Pagerfanta;

interface PagerSearchDataMapper
{
    public function map(Pagerfanta $pagerfanta): array;
}
