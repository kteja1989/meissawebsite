<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Feedback extends Model
{
    use HasFactory;

    use LogsActivity;

    protected $table = 'feedbacks';

    protected $primaryKey = 'feedback_id';

	protected $fillable = [
		'name',
		'email',
		'message',
        'organisation',
		'status'
	];

    // Customize log name
    protected static $logName = 'Feedback';

    // Only defined attribute will store in log while any change
    protected static $logAttributes = [
        'contact_id',
		'name',
		'email',
		'message',
        'organisation',
		'status'
    ];
    // Customize log description
    public function getDescriptionForEvent(string $eventName): string
    {
        return "This model has been {$eventName}";
    }

    public function getActivitylogOptions(): getActivitylogOptions{
        return LogOptions::defaults();
    }
}
