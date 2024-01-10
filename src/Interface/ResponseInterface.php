<?php

namespace SMSClient\Interface;

/**
 * ResponseのInterface
 * 
 * @package SMSClient\Interface
 */
interface ResponseInterface
{
    /**
     * SMSの送信に成功したかどうか
     *
     * @return bool
     */
    public function isSuccess(): bool;
}
