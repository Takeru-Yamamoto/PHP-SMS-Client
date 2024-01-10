<?php

namespace SMSClient\Twilio;

use SMSClient\BaseResponse;

use SMSClient\Twilio\Interface\ResponseInterface;

use SMSClient\Twilio\Trait\Response\Constructor;
use SMSClient\Twilio\Trait\Response\Property;
use SMSClient\Twilio\Trait\Response\Result;

/**
 * Twilioを使用してSMSを送信した際のレスポンスを拡張したクラス
 * 
 * @package SMSClient\Twilio
 */
class Response extends BaseResponse implements ResponseInterface
{
    use Constructor;
    use Property;
    use Result;
}
