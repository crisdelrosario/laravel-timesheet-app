<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;

    const TIMESHEET_STATUS_DRAFT = 'draft';
    const TIMESHEET_STATUS_FOR_APPROVAL = 'pending';
    const TIMESHEET_STATUS_APPROVED = 'approved';
    const TIMESHEET_STATUS_REJECTED = 'rejected';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($timesheet) {
            if (!$timesheet->id) {
                $timesheet->id = Str::uuid()->toString();
            }

            if (!$timesheet->status) {
                $timesheet->status = self::TIMESHEET_STATUS_DRAFT;
            }
        });
    }
}
