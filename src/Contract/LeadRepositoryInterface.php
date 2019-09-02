<?php

namespace Likemusic\YandexFleetTaxi\LeadRepository\Contract;

interface LeadRepositoryInterface
{
    public function getNewLeads();
    public function updateLeadStatus(string $leadId, string $leadStatus, string $statusMessage = null);
}
