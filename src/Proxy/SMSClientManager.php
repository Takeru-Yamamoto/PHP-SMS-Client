<?php

namespace SMSClient\Proxy;

use SMSClient\Proxy\Interface\ManagerInterface;

use SMSClient\Twilio\Client;

/**
 * Proxyを経由してstaticにアクセスされるManager
 * 
 * @package SMSClient\Proxy
 */
class SMSClientManager implements ManagerInterface
{
    /**
     * TwilioClientのインスタンスを生成する
     *
     * @return \SMSClient\Twilio\Interface\ClientInterface
     */
    public function twilio(): Client
    {
        return new Client();
    }
}
