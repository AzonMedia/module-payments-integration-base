<?php
declare(strict_types=1);

namespace GuzabaPlatform\Payments\Integrations\Base\Interfaces;

/**
 * Interface PaymentProviderInterface
 * @package GuzabaPlatform\Payments\Interfaces
 * Represents the integration with a payment provider. Provides the methods for executing payments.
 */
interface PaymentProviderInterface
{
    //public function __construct(PaymentProviderAccountInterface $PaymentProviderAccount)

    /**
     * Returns the name of this payment provider
     * @return string
     */
    public static function get_name() : string ;

    public function get_account_info() : PaymentProviderAccountInterface ;

    public function charge(float $amount, CommandTargetInterface $CommandTarget) : CommandResultInterface;
}