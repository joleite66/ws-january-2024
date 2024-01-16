<?php

namespace App\Twig\Extension;

use App\Repository\ConferenceRepository;
use Twig\Extension\RuntimeExtensionInterface;

class AppExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct(private readonly ConferenceRepository $conferenceRepository)
    {
    }

    public function getConferences(): array
    {
        return $this->conferenceRepository->findAll();
    }
}
