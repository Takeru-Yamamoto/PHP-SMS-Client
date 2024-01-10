<?php

namespace SMSClient\Twilio\Trait\Response;

use Twilio\Rest\Api\V2010\Account\MessageInstance;

/**
 * TwilioResponseのコンストラクタを管理する
 * 
 * @package SMSClient\Twilio\Trait\Response
 */
trait Constructor
{
    /**
     * Twilioのレスポンス
     *
     * @var MessageInstance
     */
    protected MessageInstance $response;


    /**
     * TwilioResponseのコンストラクタ
     *
     * @param MessageInstance $response
     */
    public function __construct(MessageInstance $response)
    {
        $this->response = $response;
    }
}
