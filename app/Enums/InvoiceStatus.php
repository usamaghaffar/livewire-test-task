<?php

namespace App\Enums;

enum InvoiceStatus: string
{
    case DRAFT = 'draft';
    case OUTSTANDING = 'outstanding';
    case PAID = 'paid';
    case PAST_DUE = 'past_due';

    /**
     * Get human-readable labels for statuses.
     */
    public function label(): string
    {
        return match ($this) {
            self::DRAFT => 'Draft',
            self::OUTSTANDING => 'Outstanding',
            self::PAID => 'Paid',
            self::PAST_DUE => 'Past Due',
        };
    }

    /**
     * Get color classes for Tailwind or Bootstrap.
     */
    public function color(): string
    {
        return match ($this) {
            self::DRAFT => 'gray',
            self::OUTSTANDING => 'blue',
            self::PAID => 'green',
            self::PAST_DUE => 'red',
        };
    }

    /**
     * Get all values as an array
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
