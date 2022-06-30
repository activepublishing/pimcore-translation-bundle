<?php

/**
 * @author Piotr Rugała <piotr@isedo.pl>
 * @copyright Copyright (c) 2021 Divante Ltd. (https://divante.co)
 */

declare(strict_types=1);

namespace DivanteTranslationBundle\Provider;

interface ProviderInterface
{
    public function translate(string $data, string $targetLanguage, $glossaryId): string;
    public function setApiKey(string $apiKey): self;
    public function getName(): string;
}
