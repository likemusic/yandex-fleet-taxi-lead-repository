<?php

namespace Likemusic\YandexFleetTaxi\Contract\LeadRepository;

interface LeadRepositoryInterface
{
    public function getNewLeads();
    public function updateLeadStatus(string $leadId, string $leadStatus);
}
