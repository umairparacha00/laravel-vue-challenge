<?php

namespace App\Enums;

enum TicketStatus: string
{
    case Open = 'open';
    case InProgress = 'in_progress';
    case Closed = 'closed';

    public static function toSelectArray(): array
    {
        return [
            self::Open->value => self::Open->name,
            self::InProgress->value => self::InProgress->name,
            self::Closed->value => self::Closed->name,
        ];
    }
}
