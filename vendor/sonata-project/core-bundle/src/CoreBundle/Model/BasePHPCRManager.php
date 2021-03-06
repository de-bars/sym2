<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\Model;

if (!class_exists(\Sonata\Doctrine\Document\BasePHPCRManager::class, false)) {
    @trigger_error(
        'The '.__NAMESPACE__.'\BasePHPCRManager class is deprecated since version 3.12.0 and will be removed in 4.0.'
        .' Use Sonata\Doctrine\Document\BasePHPCRManager instead.',
        E_USER_DEPRECATED
    );
}

class_alias(
    \Sonata\Doctrine\Document\BasePHPCRManager::class,
    __NAMESPACE__.'\BasePHPCRManager'
);

if (false) {
    /**
     * @deprecated since 3.12.0, to be removed in 4.0.
     */
    abstract class BasePHPCRManager extends \Sonata\Doctrine\Document\BasePHPCRManager implements ManagerInterface
    {
    }
}
