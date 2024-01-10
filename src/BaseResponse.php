<?php

namespace SMSClient;

use SMSClient\Interface\ResponseInterface;

use SMSClient\Trait\Response\Result;

/**
 * SMSを送信した際のレスポンスを保持する基底クラス
 * 
 * @package SMSClient
 */
abstract class BaseResponse implements ResponseInterface
{
    use Result;
}
