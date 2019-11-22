<?php
declare(strict_types=1);

namespace GuzabaPlatform\Payments\Integrations\Base\Interfaces;


interface PaymentProviderAccountsInterface
{
    /**
     * Returns an iterable of the GuzabaPlatform\Payments\Integrations\Base\PaymentProviderAccountInterface
     * @param bool|null $status If TRUE means active accounts, FALSE means disabled accounts, NULL means all accounts
     * @return iterable
     */
    public function get_payment_provider_accounts(?bool $status = NULL) : iterable ;

    public function add_payment_provider_account(PaymentProviderAccountInterface $PaymentProviderAccount) : bool ;

    public function remove_payment_provider_account(PaymentProviderAccountInterface $PaymentProviderAccount) : bool ;

    public function disable_payment_provider_account(PaymentProviderAccountInterface $PaymentProviderAccount) : bool ;

    public function enable_payment_provider_account(PaymentProviderAccountInterface $PaymentProviderAccount) : bool ;
}