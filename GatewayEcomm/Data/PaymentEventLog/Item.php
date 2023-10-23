<?php
/**
 * Copyright 2022 Vipps
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
 * TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
 * IN THE SOFTWARE.
 */
namespace Vipps\Payment\GatewayEcomm\Data\PaymentEventLog;

use Magento\Framework\DataObject;
use Vipps\Payment\GatewayEcomm\Data\Amount;

/**
 * Class Item
 * @package Vipps\Payment\GatewayEcomm\Data\PaymentEventLog
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 */
class Item extends DataObject
{
    /**
     * @var string
     */
    const PAYMENT_ACTION_CREATE = 'CREATE';
    /**
     * @var string
     */
    const PAYMENT_ACTION_ABORT ='ABORT';
    /**
     * @var string
     */
    const PAYMENT_ACTION_EXPIRE = 'EXPIRE';
    /**
     * @var string
     */
    const PAYMENT_ACTION_CANCEL = 'CANCEL';
    /**
     * @var string
     */
    const PAYMENT_ACTION_CAPTURE = 'CAPTURE';
    /**
     * @var string
     */
    const PAYMENT_ACTION_REFUND = 'REFUND';
    /**
     * @var string
     */
    const PAYMENT_ACTION_ADJUST_AUTHORISATION = 'ADJUST_AUTHORISATION';
    /**
     * @var string
     */
    const PAYMENT_ACTION_AUTHORISE = 'AUTHORISE';
    /**
     * @var string
     */
    const PAYMENT_ACTION_TERMINATE = 'TERMINATE';

    /**
     * @var string
     */
    const REFERENCE = 'reference';
    /**
     * @var string
     */
    const PSP_REFERENCE = 'pspReference';
    /**
     * @var string
     */
    const PAYMENT_ACTION = 'paymentAction';
    /**
     * @var string
     */
    const AMOUNT = 'amount';
    /**
     * @var string
     */
    const AUTHORISATION_TYPE = 'authorisationType';
    /**
     * @var string
     */
    const PROCESSED_AT = 'processedAt';
    /**
     * @var string
     */
    const IDEMPOTENCY_KEY = 'idempotencyKey';
    /**
     * @var string
     */
    const SUCCESS = 'success';

    public function getReference(): ?string
    {
        return $this->getData(self::REFERENCE);
    }

    public function getPspReference(): ?string
    {
        return $this->getData(self::PSP_REFERENCE);
    }

    public function getPaymentAction(): ?string
    {
        return $this->getData(self::PAYMENT_ACTION);
    }

    public function getAmount(): Amount
    {
        return $this->getData(self::AMOUNT);
    }

    public function getAuthorisationType(): ?string
    {
        return $this->getData(self::AUTHORISATION_TYPE);
    }

    public function getProcessedAt(): ?string
    {
        return $this->getData(self::PROCESSED_AT);
    }

    public function getIdempotencyKey(): ?string
    {
        return $this->getData(self::IDEMPOTENCY_KEY);
    }

    public function getSuccess(): bool
    {
        return (bool)$this->getData(self::SUCCESS);
    }
}
