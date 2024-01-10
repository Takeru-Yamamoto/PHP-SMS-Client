<?php

namespace SMSClient\Laravel;

use SMSClient\Laravel\Interface\ResponseInterface;

use SMSClient\BaseResponse as PHPBaseResponse;

/**
 * \SMSClient\BaseResponseを継承し、Laravel用に拡張したSMSResponse
 * SMSを送信した際のレスポンスを保持する基底クラス
 * 
 * @package SMSClient\Laravel
 */
abstract class BaseResponse extends PHPBaseResponse implements ResponseInterface
{
}
