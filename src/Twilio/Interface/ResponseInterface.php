<?php

namespace SMSClient\Twilio\Interface;

use SMSClient\Interface\ResponseInterface as BaseResponseInterface;

use Twilio\Rest\Api\V2010\Account\MessageInstance;

/**
 * TwilioResponseのInterface
 * 
 * @package SMSClient\Twilio\Interface
 */
interface ResponseInterface extends BaseResponseInterface
{
    /*----------------------------------------*
     * Property
     *----------------------------------------*/

    /**
     * レスポンスを取得する
     *
     * @return MessageInstance
     */
    public function response(): MessageInstance;

    /**
     * プロパティの配列を取得する
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array;

    /**
     * レスポンスのSenderを取得する
     * 
     * @return string|null
     */
    public function sender(): ?string;

    /**
     * レスポンスのRecipientを取得する
     * 
     * @return string|null
     */
    public function recipient(): ?string;

    /**
     * レスポンスのBodyを取得する
     * 
     * @return ?string
     */
    public function body(): ?string;

    /**
     * レスポンスのStatusを取得する
     * 
     * @return string
     */
    public function status(): string;

    /**
     * レスポンスのErrorCodeを取得する
     * 
     * @return int|null
     */
    public function errorCode(): ?int;

    /**
     * レスポンスのErrorMessageを取得する
     * 
     * @return ?string
     */
    public function errorMessage(): ?string;

    /**
     * レスポンスのSidを取得する
     * 
     * @return string|null
     */
    public function sid(): ?string;

    /**
     * レスポンスのAccountSidを取得する
     * 
     * @return string|null
     */
    public function accountSid(): ?string;

    /**
     * レスポンスのApiVersionを取得する
     * 
     * @return string|null
     */
    public function apiVersion(): ?string;

    /**
     * レスポンスのDateCreatedを取得する
     * 
     * @return \DateTime|null
     */
    public function dateCreated(): ?\DateTime;

    /**
     * レスポンスのDateCreatedを文字列で取得する
     * 
     * @param string $format
     * @return string|null
     */
    public function dateCreatedString(string $format = "Y-m-d H:i:s"): ?string;

    /**
     * レスポンスのDateUpdatedを取得する
     * 
     * @return \DateTime|null
     */
    public function dateUpdated(): ?\DateTime;

    /**
     * レスポンスのDateUpdatedを文字列で取得する
     * 
     * @param string $format
     * @return string|null
     */
    public function dateUpdatedString(string $format = "Y-m-d H:i:s"): ?string;

    /**
     * レスポンスのDateSentを取得する
     * 
     * @return \DateTime|null
     */
    public function dateSent(): ?\DateTime;

    /**
     * レスポンスのDateSentを文字列で取得する
     * 
     * @param string $format
     * @return string|null
     */
    public function dateSentString(string $format = "Y-m-d H:i:s"): ?string;

    /**
     * レスポンスのPriceを取得する
     * 
     * @return string|null
     */
    public function price(): ?string;

    /**
     * レスポンスのPriceをfloatで取得する
     * 
     * @return float|null
     */
    public function priceFloat(): ?float;

    /**
     * レスポンスのPriceUnitを取得する
     * 
     * @return string|null
     */
    public function priceUnit(): ?string;

    /**
     * レスポンスのPriceUnitをfloatで取得する
     * 
     * @return float|null
     */
    public function priceUnitFloat(): ?float;

    /**
     * レスポンスのUriを取得する
     * 
     * @return string|null
     */
    public function uri(): ?string;

    /**
     * レスポンスのNumSegmentsを取得する
     * 
     * @return string|null
     */
    public function numSegments(): ?string;

    /**
     * レスポンスのDirectionを取得する
     * 
     * @return string
     */
    public function direction(): string;

    /**
     * レスポンスのMessagingServiceSidを取得する
     * 
     * @return string|null
     */
    public function messagingServiceSid(): ?string;

    /**
     * レスポンスのNumMediaを取得する
     * 
     * @return string|null
     */
    public function numMedia(): ?string;

    /**
     * レスポンスのSubresourceUrisを取得する
     * 
     * @return array<string, string>|null
     */
    public function subresourceUris(): ?array;
}
