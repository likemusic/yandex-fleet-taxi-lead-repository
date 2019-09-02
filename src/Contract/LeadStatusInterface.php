<?php

namespace Likemusic\YandexFleetTaxi\Contract\LeadRepository;

interface LeadStatusInterface
{
    const PROCESSING = 'processing';
    const REGISTERED = 'registered';
    const ERROR = 'error';
}
