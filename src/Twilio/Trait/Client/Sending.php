<?php

namespace SMSClient\Twilio\Trait\Client;

use SMSClient\Twilio\Response;

use Twilio\Rest\Client as TwilioClient;
use Twilio\Rest\Api\V2010\Account\MessageInstance;

/**
 * Twilioを使用したSMSの送信処理を管理する
 * 
 * @package SMSClient\Twilio\Trait\Client
 * 
 * @method ?string recipient()
 * @method ?string sender()
 * @method ?string body()
 * @method ?string accountSid()
 * @method ?string authToken()
 * @method ?string statusCallback()
 */
trait Sending
{
    /**
     * SMSを送信する
     *
     * @throws \RuntimeException
     * @return \SMSClient\Twilio\Response
     */
    public function send(): Response
    {
        $response = $this->getResponse();

        return new Response($response);
    }

    /**
     * SMS送信のレスポンスを取得する
     * 
     * @throws \RuntimeException
     * @return \Twilio\Rest\Api\V2010\Account\MessageInstance
     */
    public function getResponse(): MessageInstance
    {
        $recipient = $this->recipient();

        if (is_null($recipient)) throw new \RuntimeException("SMS recipient is not set.");

        $client  = $this->getClient();
        $options = $this->getOptions();

        $response = $client->messages->create($recipient, $options);

        return $response;
    }

    /**
     * Twilioクライアントを取得する
     *
     * @throws \RuntimeException
     * @return \Twilio\Rest\Client
     */
    protected function getClient(): TwilioClient
    {
        $accountSid = $this->accountSid();
        $authToken  = $this->authToken();

        if (is_null($accountSid)) throw new \RuntimeException("Twilio account SID is not set.");

        if (is_null($authToken)) throw new \RuntimeException("Twilio auth token is not set.");

        return new TwilioClient($accountSid, $authToken);
    }

    /**
     * 送信する際のオプションを取得する
     * 
     * @throws \RuntimeException
     * @return array
     */
    protected function getOptions(): array
    {
        $options = [];

        $sender         = $this->sender();
        $body           = $this->body();
        $statusCallback = $this->statusCallback();

        if (is_null($sender)) throw new \RuntimeException("SMS sender is not set.");

        if (is_null($body)) throw new \RuntimeException("SMS body is not set.");

        $options["from"] = $sender;
        $options["body"] = $body;

        if (!is_null($statusCallback)) $options["statusCallback"] = $statusCallback;

        return $options;
    }
}
