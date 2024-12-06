<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Payment;

use Spryker\Zed\Payment\PaymentConfig as SprykerPaymentConfig;

class PaymentConfig extends SprykerPaymentConfig
{
    /**
     * @api
     *
     * @example
     * [
     *     QuoteTransfer::ORDER_REFERENCE => 'orderReference',
     *     QuoteTransfer::ITEMS => [
     *         ItemTransfer::NAME => 'itemName',
     *         ItemTransfer::ABSTRACT_SKU => 'abstractSku',
     *     ],
     * ]
     *
     * @return array<mixed>
     */
    public function getQuoteFieldsForForeignPayment() : array
    {
        return array_merge_recursive(parent::getQuoteFieldsForForeignPayment(), [
            \Generated\Shared\Transfer\QuoteTransfer::TOTALS => [
                \Generated\Shared\Transfer\TotalsTransfer::DISCOUNT_TOTAL => 'discountTotal',
                \Generated\Shared\Transfer\TotalsTransfer::TAX_TOTAL => [
                    \Generated\Shared\Transfer\TaxTotalTransfer::AMOUNT => 'taxTotal',
                ],
            ],
            \Generated\Shared\Transfer\QuoteTransfer::ITEMS => [
                \Generated\Shared\Transfer\ItemTransfer::TAX_RATE => 'taxRate',
            ],
            \Generated\Shared\Transfer\QuoteTransfer::EXPENSES => [
                \Generated\Shared\Transfer\ExpenseTransfer::TAX_RATE => 'taxRate',
            ],
        ]);
    }
}