<?php

namespace SMSClient\Laravel;

use SMSClient\Laravel\Interface\ClientInterface;

use SMSClient\BaseClient as PHPBaseClient;

use SMSClient\Laravel\Interface\ResponseInterface;

/**
 * \SMSClient\BaseClientを継承し、Laravel用に拡張したSMSClient
 * 
 * @package SMSClient\Laravel
 */
abstract class BaseClient extends PHPBaseClient implements ClientInterface
{
    /**
     * SMSを送信する
     *
     * @throws \RuntimeException
     * @return \SMSClient\Laravel\Interface\ResponseInterface
     */
    abstract public function send(): ResponseInterface;
}
