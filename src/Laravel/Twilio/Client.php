<?php

namespace SMSClient\Laravel\Twilio;

use SMSClient\Twilio\Client as BaseClient;

use SMSClient\Laravel\Twilio\Interface\ClientInterface;

use SMSClient\Laravel\Twilio\Response;

/**
 * \SMSClient\Twilio\Clientを継承し、Laravel用に拡張したSMSClient
 * Twilioを使用したSMS送信機能を持つ基底クラス
 * 
 * @package SMSClient\Laravel\Twilio
 */
class Client extends BaseClient implements ClientInterface
{
    /**
     * SMSを送信する
     *
     * @throws \RuntimeException
     * @return \SMSClient\Laravel\Twilio\Response
     */
    public function send(): Response
    {
        $response = $this->getResponse();

        return new Response($response);
    }
}
