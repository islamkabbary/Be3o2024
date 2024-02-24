<?php

namespace App\Models;

use Spatie\Activitylog\Traits\LogsActivity;
use  Spatie\Permission\Models\Permission as PermissionSpatie;

class Permission extends PermissionSpatie
{
    // To Change Description For Event it has
    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} Permission";
    }
    // To Set Log Name for record on Activity_logs Table
    protected static $logName = 'permissions';
    //To Log only those that has actually changed after the update
    protected static $logOnlyDirty = true;
    //End
    function last_updated_by_user()
    {
        return $this->belongsTo(User::class,"last_updated_by","id");
    }
}
