<?php

namespace SMSClient\Laravel\Twilio;

use SMSClient\Twilio\Response as BaseResponse;

use SMSClient\Laravel\Twilio\Interface\ResponseInterface;

/**
 * \SMSClient\Twilio\Responseを継承し、Laravel用に拡張したSMSResponse
 * Twilioを使用してSMSを送信した際のレスポンスを拡張したクラス
 * 
 * @package SMSClient\Laravel\Twilio
 */
class Response extends BaseResponse implements ResponseInterface
{
}
