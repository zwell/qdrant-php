<?php
/**
 * Qdrant PHP Client
 *
 * @since     Mar 2023
 * @author    Haydar KULEKCI <haydarkulekci@gmail.com>
 */

namespace Qdrant;

class Config
{

    protected ?string $apiKey = null;
    protected string $host;
    protected string $port;
    public function __construct(string $host, int $port = 6333)
    {
        $this->host = $host;
        $this->port = $port;
    }

    public function getDomain(): string
    {
        return $this->host . ':' . $this->port;
    }

    public function setApiKey($apiKey): Config
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getApiKey(): string
    {
        return $this->apiKey ?? '';
    }
}