<?php

namespace SMSClient\Twilio\Trait\Client;

/**
 * Twilioを使用したSMSの送信状況を受け取るコールバックURLを管理する
 * 
 * @package SMSClient\Twilio\Trait\Client
 */
trait StatusCallback
{
    /**
     * コールバックURL
     *
     * @var string
     */
    protected ?string $statusCallback = null;


    /**
     * コールバックURLを取得する
     *
     * @return ?string
     */
    public function statusCallback(): ?string
    {
        return $this->statusCallback;
    }

    /**
     * コールバックURLを設定する
     *
     * @param string $statusCallback
     * @return static
     */
    public function setStatusCallback(string $statusCallback): static
    {
        $this->statusCallback = $statusCallback;

        return $this;
    }
}
