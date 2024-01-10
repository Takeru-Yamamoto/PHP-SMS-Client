<?php

namespace SMSClient;

use SMSClient\Interface\ClientInterface;

use SMSClient\Trait\Client\Sending;

use SMSClient\Trait\Client\Address;
use SMSClient\Trait\Client\Body;

/**
 * PHPでのSMS送信機能を持つ基底クラス
 * 
 * @package SMSClient
 */
abstract class BaseClient implements ClientInterface
{
    use Sending;

    use Address;
    use Body;
}
