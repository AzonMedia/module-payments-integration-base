<?php
declare(strict_types=1);

namespace GuzabaPlatform\Payments\Integrations\Base\Interfaces;

/**
 * Interface CommandTargetInterface
 * @package GuzabaPlatform\Payments\Interfaces
 * Represents an account, CC or another object that can have payments commands (like charge()) executed against.
 */
interface CommandTargetInterface
{
    /**
     * This can be an account number or CC name (see CreditCardInterface that extends this one)
     * It may return INT from get_id() if there is no name.
     * @return scalar
     */
    public function get_name() /* scalar */;

    public function get_id() /* scalar */;
}