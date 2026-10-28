<?php

namespace App\Enums;

enum StatusPelatih: string
{
    case Tersedia = 'Tersedia';
    case Disewa = 'Disewa';
    case Cuti = 'Cuti';

    public function warnaBadge(): string
    {
        return match($this) {
            self::Tersedia => 'bg-green-100 text-green-800 border-green-200',
            self::Disewa => 'bg-blue-100 text-blue-800 border-blue-200',
            self::Cuti => 'bg-yellow-100 text-yellow-800 border-yellow-200',
        };
    }
}