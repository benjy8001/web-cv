<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;

enum SkillCategory: string implements HasLabel, HasColor, HasIcon
{
    case Backend = 'backend';
    case Frontend = 'frontend';
    case DevOps = 'devops';
    case Soft = 'soft';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Backend => 'Backend',
            self::Frontend => 'Frontend',
            self::DevOps => 'DevOps',
            self::Soft => 'Savoir-être',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Backend => 'primary',
            self::Frontend => 'success',
            self::DevOps => 'warning',
            self::Soft => 'info',
        };
    }

    public function getIcon(): string | \BackedEnum | \Illuminate\Contracts\Support\Htmlable | null
    {
        return match ($this) {
            self::Backend => Heroicon::OutlinedServerStack,
            self::Frontend => Heroicon::OutlinedPaintBrush,
            self::DevOps => Heroicon::OutlinedWrenchScrewdriver,
            self::Soft => Heroicon::OutlinedHeart,
        };
    }
}
