<?php

namespace SMSClient\Laravel;

use SMSClient\Laravel\Interface\ManagerInterface;
use SMSClient\Proxy\SMSClientManager as BaseSMSClientManager;

use SMSClient\Laravel\Twilio\Client;

/**
 * Facadeを経由してstaticにアクセスされるManager
 * 
 * @package SMSClient\Laravel
 */
class SMSClientManager extends BaseSMSClientManager implements ManagerInterface
{
    /**
     * TwilioClientのインスタンスを生成する
     *
     * @return \SMSClient\Laravel\Twilio\Interface\ClientInterface
     */
    public function twilio(): Client
    {
        return new Client();
    }
}
