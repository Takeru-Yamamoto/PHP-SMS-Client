<?php

namespace SMSClient\Laravel\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * SMSClientのFacade
 * SMSClientManagerのMethodをstaticに呼び出せるようにする
 * 
 * @package SMSClient\Laravel\Facade
 * 
 * @method static \SMSClient\Laravel\Twilio\Interface\ClientInterface twilio()
 * 
 * @see \SMSClient\Laravel\Interface\ManagerInterface
 */
class SMSClient extends Facade
{
    /** 
     * SMSClientManagerにアクセスするためのFacadeの名前を取得する
     * 
     * @return string 
     */
    protected static function getFacadeAccessor(): string
    {
        return static::class;
    }
}
