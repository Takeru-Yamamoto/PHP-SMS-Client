<?php

namespace SMSClient\Interface;

use SMSClient\Interface\ResponseInterface;

/**
 * ClientのInterface
 * 
 * @package SMSClient\Interface
 */
interface ClientInterface
{
    /*----------------------------------------*
     * Sending
     *----------------------------------------*/

    /**
     * SMSを送信する
     *
     * @throws \RuntimeException
     * @return \SMSClient\Interface\ResponseInterface
     */
    public function send(): ResponseInterface;



    /*----------------------------------------*
     * Address
     *----------------------------------------*/

    /**
     * 送信先を取得する
     *
     * @return string
     */
    public function recipient(): ?string;

    /**
     * 送信先を設定する
     *
     * @param string $recipient
     * @return static
     */
    public function setRecipient(string $recipient): static;

    /**
     * 送信元を取得する
     *
     * @return ?string
     */
    public function sender(): ?string;

    /**
     * 送信元を設定する
     *
     * @param string $sender
     * @return static
     */
    public function setSender(string $sender): static;



    /*----------------------------------------*
     * Body
     *----------------------------------------*/

    /**
     * 送信内容を取得する
     *
     * @return string
     */
    public function body(): string;

    /**
     * 送信内容を設定する
     *
     * @param array<string> $body
     * @return static
     */
    public function setBodyArray(array $body): static;

    /**
     * 送信内容を設定する
     *
     * @param string $body
     * @return static
     */
    public function setBody(string $body): static;

    /**
     * 送信内容を追加する
     *
     * @param string $body
     * @return static
     */
    public function addBody(string $body): static;

    /**
     * 送信内容をクリアする
     *
     * @return static
     */
    public function clearBody(): static;
}
