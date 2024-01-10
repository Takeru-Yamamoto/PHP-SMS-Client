<?php

namespace SMSClient\Trait\Client;

use SMSClient\Interface\ResponseInterface;

/**
 * SMSの送信処理を管理する
 * 
 * @package SMSClient\Trait\Client
 */
trait Sending
{
    /**
     * SMSを送信する
     *
     * @throws \RuntimeException
     * @return \SMSClient\Interface\ResponseInterface
     */
    abstract public function send(): ResponseInterface;
}
