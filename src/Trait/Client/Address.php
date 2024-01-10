<?php

namespace SMSClient\Trait\Client;

/**
 * SMSの送信先と送信元を管理する
 * 
 * @package SMSClient\Trait\Client
 */
trait Address
{
    /**
     * 送信先
     *
     * @var ?string
     */
    protected ?string $recipient = null;

    /**
     * 送信元
     *
     * @var ?string
     */
    protected ?string $sender = null;


    /*----------------------------------------*
     * Recipient
     *----------------------------------------*/

    /**
     * 送信先を取得する
     *
     * @return string
     */
    public function recipient(): ?string
    {
        return $this->recipient;
    }

    /**
     * 送信先を設定する
     *
     * @param string $recipient
     * @return static
     */
    public function setRecipient(string $recipient): static
    {
        $this->recipient = $recipient;

        return $this;
    }



    /*----------------------------------------*
     * Sender
     *----------------------------------------*/

    /**
     * 送信元を取得する
     *
     * @return ?string
     */
    public function sender(): ?string
    {
        return $this->sender;
    }

    /**
     * 送信元を設定する
     *
     * @param string $sender
     * @return static
     */
    public function setSender(string $sender): static
    {
        $this->sender = $sender;

        return $this;
    }
}
