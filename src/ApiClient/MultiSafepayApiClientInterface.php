<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusMultiSafepayPlugin\ApiClient;

use MultiSafepayAPI\Object\Orders;

interface MultiSafepayApiClientInterface
{
    public const API_URL_TEST = 'https://testapi.multisafepay.com/v1/json/';

    public const API_URL_LIVE = 'https://api.multisafepay.com/v1/json/';

    public const PAYMENT_LINK_TYPE = 'paymentlink';

    public const REDIRECT_ORDER_TYPE = 'redirect';

    public const STATUS_CANCEL = 'cancel';

    public const STATUS_CANCELED = 'canceled';

    public const STATUS_COMPLETED = 'completed';

    public const STATUS_INITIALIZED = 'initialized';

    public const STATUS_UNCLEARED = 'uncleared';

    public const STATUS_DECLINED = 'declined';

    public const STATUS_EXPIRED = 'expired';

    public const STATUS_REFUNDED = 'refunded';

    public const STATUS_RESERVED = 'reserved';

    public const STATUS_VOID = 'void';

    public function initialise(
        string $apiKey,
        string $type,
        bool $sandbox = true,
        bool $allowMultiCurrency = false,
    ): void;

    public function createPayment(array $data): Orders;

    public function getOrderById(string $id): \stdClass;

    public function getType(): string;

    public function refund(
        string $orderId,
        int $amount,
        string $currencyCode,
    ): void;

    public function isPaymentActive(string $status): bool;

    public function getAllowMultiCurrency(): bool;
}
