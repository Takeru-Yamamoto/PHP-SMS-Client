<?php

namespace SMSClient\Trait\Client;

/**
 * SMSの送信内容を管理する
 * 
 * @package SMSClient\Trait\Client
 */
trait Body
{
    /**
     * 送信内容
     *
     * @var array<string>
     */
    protected array $body = [];


    /**
     * 送信内容を取得する
     *
     * @return string
     */
    public function body(): string
    {
        return implode(PHP_EOL, $this->body);
    }

    /**
     * 送信内容を設定する
     *
     * @param array<string> $body
     * @return static
     */
    public function setBodyArray(array $body): static
    {
        $this->body = $body;

        return $this;
    }

    /**
     * 送信内容を設定する
     *
     * @param string $body
     * @return static
     */
    public function setBody(string $body): static
    {
        return $this->setBodyArray([$body]);
    }

    /**
     * 送信内容を追加する
     *
     * @param string $body
     * @return static
     */
    public function addBody(string $body): static
    {
        // $this->bodyが空の場合は、setBody()を実行する
        if (empty($this->body)) return $this->setBody($body);

        $this->body[] = $body;

        return $this;
    }

    /**
     * 送信内容をクリアする
     *
     * @return static
     */
    public function clearBody(): static
    {
        $this->body = [];

        return $this;
    }
}
