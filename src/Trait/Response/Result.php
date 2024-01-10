<?php

namespace SMSClient\Trait\Response;

/**
 * SMSの送信結果を管理する
 * 
 * @package SMSClient\Trait\Response
 */
trait Result
{
    /**
     * SMSの送信に成功したかどうか
     *
     * @return bool
     */
    abstract public function isSuccess(): bool;
}
