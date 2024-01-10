<?php

namespace SMSClient\Proxy;

use StaticProxy\StaticProxy;

use SMSClient\Proxy\SMSClientManager;

/**
 * SMSClientのProxy
 * SMSClientManagerのMethodをstaticに呼び出せるようにする
 * 
 * @package SMSClient\Proxy
 * 
 * @method static \SMSClient\Twilio\Interface\ClientInterface twilio()
 * 
 * @see \SMSClient\Proxy\Interface\ManagerInterface
 */
class SMSClient extends StaticProxy
{
    /** 
     * SMSClientManagerの実クラス名を取得する
     * 
     * @return string 
     */
    public static function getRealInstanceName(): string
    {
        return SMSClientManager::class;
    }
}
