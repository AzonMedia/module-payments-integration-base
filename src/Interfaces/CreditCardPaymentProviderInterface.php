<?php
declare(strict_types=1);

namespace GuzabaPlatform\Payments\Integrations\Base\Interfaces;

/**
 * Interface CreditCardPaymentProviderInterface
 * @package GuzabaPlatform\Payments\Integrations\Base\Interfaces
 * Represents the integration with a payment provider for credit cards. Provides the methods for executing credit card operations.
 */
interface CreditCardPaymentProviderInterface extends PaymentProviderInterface
{

    public function authorize(float $amount, CommandTargetInterface $CommandTarget) : CommandResultInterface ;

    public function capture(/* scalar */ $authorization_code, CommandTargetInterface $CommandTarget) : CommandResultInterface;

    //charge() is defined in the parent interface

    public function refund(float $amount, /* scalar */ $payment_code) : CommandResultInterface;

    public function void( /*scalar */ $payment_code) : CommandResultInterface;

}