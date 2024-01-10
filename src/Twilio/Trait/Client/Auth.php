<?php

namespace SMSClient\Twilio\Trait\Client;

/**
 * Twilioを使用したSMSの送信に必要な認証情報を管理する
 * 
 * @package SMSClient\Twilio\Trait\Client
 */
trait Auth
{
    /**
     * アカウントSID
     *
     * @var ?string
     */
    protected ?string $accountSid = null;

    /**
     * 認証トークン
     *
     * @var string
     */
    protected ?string $authToken = null;


    /*----------------------------------------*
     * Account SID
     *----------------------------------------*/

    /**
     * アカウントSIDを取得する
     *
     * @return ?string
     */
    public function accountSid(): ?string
    {
        return $this->accountSid;
    }

    /**
     * アカウントSIDを設定する
     *
     * @param string $accountSid
     * @return static
     */
    public function setAccountSid(string $accountSid): static
    {
        $this->accountSid = $accountSid;

        return $this;
    }



    /*----------------------------------------*
     * Auth Token
     *----------------------------------------*/

    /**
     * 認証トークンを取得する
     *
     * @return ?string
     */
    public function authToken(): ?string
    {
        return $this->authToken;
    }

    /**
     * 認証トークンを設定する
     *
     * @param string $authToken
     * @return static
     */
    public function setAuthToken(string $authToken): static
    {
        $this->authToken = $authToken;

        return $this;
    }
}
