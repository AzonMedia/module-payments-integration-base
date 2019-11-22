<?php
declare(strict_types=1);

namespace GuzabaPlatform\Payments\Integrations\Base\Interfaces;

/**
 * Interface PaymentProviderAccountInterface
 * @package GuzabaPlatform\Payments\Interfaces
 * Represents an account with a payment provider
 */
interface PaymentProviderAccountInterface
{
    /**
     * May returrn get_id() if there is no name
     * @return mixed
     */
    public function get_name() /* string */ ;
    public function get_id() /* scalar */ ;

    /**
     * Is it currently enabled.
     * @return bool
     */
    public function is_enabled() : bool ;
}