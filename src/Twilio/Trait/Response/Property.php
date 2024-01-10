<?php

namespace SMSClient\Twilio\Trait\Response;

use Twilio\Rest\Api\V2010\Account\MessageInstance;

/**
 * Twilioのレスポンスに含まれるプロパティを管理する
 * 
 * @package SMSClient\Twilio\Trait\Response
 * 
 * @property-read MessageInstance $response
 */
trait Property
{
    /**
     * レスポンスを取得する
     *
     * @return MessageInstance
     */
    public function response(): MessageInstance
    {
        return $this->response;
    }

    /**
     * プロパティの配列を取得する
     * 
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->response->toArray();
    }

    /**
     * レスポンスのSenderを取得する
     * 
     * @return string|null
     */
    public function sender(): ?string
    {
        return $this->response->from;
    }

    /**
     * レスポンスのRecipientを取得する
     * 
     * @return string|null
     */
    public function recipient(): ?string
    {
        return $this->response->to;
    }

    /**
     * レスポンスのBodyを取得する
     * 
     * @return ?string
     */
    public function body(): ?string
    {
        return $this->response->body;
    }

    /**
     * レスポンスのStatusを取得する
     * 
     * @return string
     */
    public function status(): string
    {
        return $this->response->status;
    }

    /**
     * レスポンスのErrorCodeを取得する
     * 
     * @return int|null
     */
    public function errorCode(): ?int
    {
        return $this->response->errorCode;
    }

    /**
     * レスポンスのErrorMessageを取得する
     * 
     * @return ?string
     */
    public function errorMessage(): ?string
    {
        return $this->response->errorMessage;
    }

    /**
     * レスポンスのSidを取得する
     * 
     * @return string|null
     */
    public function sid(): ?string
    {
        return $this->response->sid;
    }

    /**
     * レスポンスのAccountSidを取得する
     * 
     * @return string|null
     */
    public function accountSid(): ?string
    {
        return $this->response->accountSid;
    }

    /**
     * レスポンスのApiVersionを取得する
     * 
     * @return string|null
     */
    public function apiVersion(): ?string
    {
        return $this->response->apiVersion;
    }

    /**
     * レスポンスのDateCreatedを取得する
     * 
     * @return \DateTime|null
     */
    public function dateCreated(): ?\DateTime
    {
        return $this->response->dateCreated;
    }

    /**
     * レスポンスのDateCreatedを文字列で取得する
     * 
     * @param string $format
     * @return string|null
     */
    public function dateCreatedString(string $format = "Y-m-d H:i:s"): ?string
    {
        $dateCreated = $this->dateCreated();

        return is_null($dateCreated) ? null : $dateCreated->format($format);
    }

    /**
     * レスポンスのDateUpdatedを取得する
     * 
     * @return \DateTime|null
     */
    public function dateUpdated(): ?\DateTime
    {
        return $this->response->dateUpdated;
    }

    /**
     * レスポンスのDateUpdatedを文字列で取得する
     * 
     * @param string $format
     * @return string|null
     */
    public function dateUpdatedString(string $format = "Y-m-d H:i:s"): ?string
    {
        $dateUpdated = $this->dateUpdated();

        return is_null($dateUpdated) ? null : $dateUpdated->format($format);
    }

    /**
     * レスポンスのDateSentを取得する
     * 
     * @return \DateTime|null
     */
    public function dateSent(): ?\DateTime
    {
        return $this->response->dateSent;
    }

    /**
     * レスポンスのDateSentを文字列で取得する
     * 
     * @param string $format
     * @return string|null
     */
    public function dateSentString(string $format = "Y-m-d H:i:s"): ?string
    {
        $dateSent = $this->dateSent();

        return is_null($dateSent) ? null : $dateSent->format($format);
    }

    /**
     * レスポンスのPriceを取得する
     * 
     * @return string|null
     */
    public function price(): ?string
    {
        return $this->response->price;
    }

    /**
     * レスポンスのPriceをfloatで取得する
     * 
     * @return float|null
     */
    public function priceFloat(): ?float
    {
        $price = $this->price();

        return is_null($price) ? null : (float) $price;
    }

    /**
     * レスポンスのPriceUnitを取得する
     * 
     * @return string|null
     */
    public function priceUnit(): ?string
    {
        return $this->response->priceUnit;
    }

    /**
     * レスポンスのPriceUnitをfloatで取得する
     * 
     * @return float|null
     */
    public function priceUnitFloat(): ?float
    {
        $priceUnit = $this->priceUnit();

        return is_null($priceUnit) ? null : (float) $priceUnit;
    }

    /**
     * レスポンスのUriを取得する
     * 
     * @return string|null
     */
    public function uri(): ?string
    {
        return $this->response->uri;
    }

    /**
     * レスポンスのNumSegmentsを取得する
     * 
     * @return string|null
     */
    public function numSegments(): ?string
    {
        return $this->response->numSegments;
    }

    /**
     * レスポンスのDirectionを取得する
     * 
     * @return string
     */
    public function direction(): string
    {
        return $this->response->direction;
    }

    /**
     * レスポンスのMessagingServiceSidを取得する
     * 
     * @return string|null
     */
    public function messagingServiceSid(): ?string
    {
        return $this->response->messagingServiceSid;
    }

    /**
     * レスポンスのNumMediaを取得する
     * 
     * @return string|null
     */
    public function numMedia(): ?string
    {
        return $this->response->numMedia;
    }

    /**
     * レスポンスのSubresourceUrisを取得する
     * 
     * @return array<string, string>|null
     */
    public function subresourceUris(): ?array
    {
        return $this->response->subresourceUris;
    }
}
