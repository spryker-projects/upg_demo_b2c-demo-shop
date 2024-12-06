<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\SynchronizationBehavior;

use Spryker\Zed\SynchronizationBehavior\SynchronizationBehaviorConfig as SprykerSynchronizationBehaviorConfig;

class SynchronizationBehaviorConfig extends SprykerSynchronizationBehaviorConfig
{
    /**
     * Specification:
     * - Enables or disables direct synchronization for all tables with synchronization behavior.
     * - Direct synchronization can be disabled for individual tables using the behavior parameter: `<parameter name="direct_sync_disabled"/>`.
     *
     * @api
     *
     * @return bool
     */
    public function isDirectSynchronizationEnabled() : bool
    {
        return true;
    }
}