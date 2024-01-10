<?php

namespace SMSClient\Proxy\Interface;

use SMSClient\Twilio\Interface\ClientInterface as TwilioClientInterface;

/**
 * Proxyを経由してstaticにアクセスされるManagerのInterface
 * 
 * @package SMSClient\Proxy\Interface
 */
interface ManagerInterface
{
    /**
     * TwilioClientのインスタンスを生成する
     *
     * @return \SMSClient\Twilio\Interface\ClientInterface
     */
    public function twilio(): TwilioClientInterface;
}
