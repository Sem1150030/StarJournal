<?php

namespace App\Enums;

enum JournalStatus: string
{
    case DRAFT = 'draft';
    case PUBLISHED = 'published';
    case PRIVATE = 'private';

    public function label(): string
    {
        return match ($this) {
            self::DRAFT => 'Draft',
            self::PUBLISHED => 'Published',
            self::PRIVATE => 'Private',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::DRAFT => 'text-amber-600 bg-amber-100',
            self::PUBLISHED => 'text-emerald-600 bg-emerald-100',
            self::PRIVATE => 'text-slate-600 bg-slate-100',
        };
    }

    public static function options(): array
    {
        return array_map(fn($case) => [
            'value' => $case->value,
            'label' => $case->label(),
        ], self::cases());
    }
}

