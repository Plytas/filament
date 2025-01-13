<?php

namespace Filament\Auth\MultiFactor\Contracts;

use Filament\Schemas\Components\Component;
use Illuminate\Contracts\Auth\Authenticatable;

interface MultiFactorAuthenticationProvider
{
    public function isEnabled(Authenticatable $user): bool;

    public function getId(): string;

    public function getLoginFormLabel(): string;

    /**
     * @return array<Component>
     */
    public function getManagementSchemaComponents(): array;

    /**
     * @return array<Component>
     */
    public function getChallengeFormComponents(Authenticatable $user): array;
}
