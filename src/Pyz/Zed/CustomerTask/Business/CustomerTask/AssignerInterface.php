<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\CustomerTask\Business\CustomerTask;

use Generated\Shared\Transfer\CustomerTaskTransfer;

interface AssignerInterface
{
    /**
     * @param string $customerEmail
     * @param int $idCustomerTask
     *
     * @return \Generated\Shared\Transfer\CustomerTaskTransfer
     */
    public function assign(string $customerEmail, int $idCustomerTask): CustomerTaskTransfer;
}
