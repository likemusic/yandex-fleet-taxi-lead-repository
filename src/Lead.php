<?php

namespace Likemusic\YandexFleetTaxi\LeadRepository;

use Likemusic\YandexFleetTaxi\LeadRepository\Contract\LeadInterface;

class Lead implements LeadInterface
{
    private $id;
    private $driverPostData;
    private $carPostData;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getDriverPostData(): array
    {
        return $this->driverPostData;
    }

    public function setDriverPostData(array $driverPostData): self
    {
        $this->driverPostData = $driverPostData;

        return $this;
    }

    public function getCarPostData(): array
    {
        return $this->carPostData;
    }

    public function setCarPostData(array $carPostData): self
    {
        $this->carPostData = $carPostData;

        return $this;
    }
}
