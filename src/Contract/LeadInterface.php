<?php

namespace Likemusic\YandexFleetTaxi\LeadRepository\Contract;

interface LeadInterface
{
    public function getDriverPostData(): array;
    public function getCarPostData(): array;
}
