<?php

namespace SMSClient\Twilio\Interface;

use SMSClient\Interface\ClientInterface as BaseClientInterface;

use SMSClient\Twilio\Interface\ResponseInterface;

/**
 * TwilioClientのInterface
 * 
 * @package SMSClient\Twilio\Interface
 */
interface ClientInterface extends BaseClientInterface
{
    /*----------------------------------------*
     * Sending
     *----------------------------------------*/

    /**
     * SMSを送信する
     *
     * @throws \RuntimeException
     * @return \SMSClient\Twilio\Interface\ResponseInterface
     */
    public function send(): ResponseInterface;



    /*----------------------------------------*
     * Auth
     *----------------------------------------*/

    /**
     * アカウントSIDを取得する
     *
     * @return ?string
     */
    public function accountSid(): ?string;

    /**
     * アカウントSIDを設定する
     *
     * @param string $accountSid
     * @return static
     */
    public function setAccountSid(string $accountSid): static;

    /**
     * 認証トークンを取得する
     *
     * @return ?string
     */
    public function authToken(): ?string;

    /**
     * 認証トークンを設定する
     *
     * @param string $authToken
     * @return static
     */
    public function setAuthToken(string $authToken): static;



    /*----------------------------------------*
     * StatusCallback
     *----------------------------------------*/

    /**
     * コールバックURLを取得する
     *
     * @return ?string
     */
    public function statusCallback(): ?string;

    /**
     * コールバックURLを設定する
     *
     * @param string $statusCallback
     * @return static
     */
    public function setStatusCallback(string $statusCallback): static;
}
