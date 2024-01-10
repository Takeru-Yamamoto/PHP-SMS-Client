<?php

namespace SMSClient\Twilio\Trait\Response;

/**
 * Twilioを使用したSMSの送信結果を管理する
 * 
 * @package SMSClient\Twilio\Trait\Response
 * 
 * @method int|null errorCode()
 * @method string|null errorMessage()
 */
trait Result
{
    /**
     * SMSの送信に成功したかどうか
     *
     * @return bool
     */
    public function isSuccess(): bool
    {
        return is_null($this->errorCode()) && is_null($this->errorMessage());
    }
}
