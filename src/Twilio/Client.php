<?php

namespace SMSClient\Twilio;

use SMSClient\BaseClient;

use SMSClient\Twilio\Interface\ClientInterface;

use SMSClient\Twilio\Trait\Client\Sending;
use SMSClient\Twilio\Trait\Client\Auth;
use SMSClient\Twilio\Trait\Client\StatusCallback;

/**
 * Twilioを使用したSMS送信機能を持つ基底クラス
 * 
 * @package SMSClient\Twilio
 */
class Client extends BaseClient implements ClientInterface
{
    use Sending;

    use Auth;
    use StatusCallback;
}
