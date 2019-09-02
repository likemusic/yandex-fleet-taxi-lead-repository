<?php

namespace Likemusic\YandexFleetTaxi\LeadRepository\Contract;

interface LeadStatusInterface
{
    const PROCESSING = 'processing';
    const REGISTERED = 'registered';
    const ERROR = 'error';
}
