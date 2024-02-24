<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class RoleHasPermission extends Model
{
    use HasFactory;
    protected $table = 'role_has_permissions';
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


    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function last_updated_by_user()
    {
        return $this->belongsTo(User::class, 'last_updated_by', 'id');
    }
}
