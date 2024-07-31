<?php

/*
 * This file has been created by developers from BitBag.
 * Feel free to contact us once you face any issues or want to start
 * You can find more information about us on https://bitbag.io and write us
 * an email on hello@bitbag.io.
 */

declare(strict_types=1);

namespace BitBag\SyliusMultiSafepayPlugin\Action\Api;

use BitBag\SyliusMultiSafepayPlugin\ApiClient\MultiSafepayApiClientInterface;
use Payum\Core\Exception\UnsupportedApiException;

trait ApiAwareTrait
{
    /** @var MultiSafepayApiClientInterface */
    protected $multiSafepayApiClient;

    public function setApi($multiSafepayApiClient): void
    {
        if (!$multiSafepayApiClient instanceof MultiSafepayApiClientInterface) {
            throw new UnsupportedApiException('Not supported.Expected an instance of ' . MultiSafepayApiClientInterface::class);
        }

        $this->multiSafepayApiClient = $multiSafepayApiClient;
    }
}
