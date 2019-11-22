<?php
declare(strict_types=1);

namespace GuzabaPlatform\Payments\Integrations\Base\Interfaces;

/**
 * Interface CreditCardInterface
 * @package GuzabaPlatform\Payments\Interfaces
 * This is a CreditCard CommandTarget
 */
interface CreditCardInterface extends CommandTargetInterface
{
    public function validate() : CommandResultInterface ;
}