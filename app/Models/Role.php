<?php

namespace App\Models;


use Spatie\Activitylog\Traits\LogsActivity;
use  Spatie\Permission\Models\Role as RoleSpatie;

class Role extends RoleSpatie
{
    // To Change Description For Event it has
    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} Role";
    }
    // To Set Log Name for record on Activity_logs Table
    protected static $logName = 'roles';
    //To Log only those that has actually changed after the update
    protected static $logOnlyDirty = true;
    //End
    protected $table = 'roles';

    function last_updated_by_user()
    {
        return $this->belongsTo(User::class,"last_updated_by","id");
    }

    function role_permissions(){
        return $this->hasMany(RoleHasPermission::class);
    }

}
