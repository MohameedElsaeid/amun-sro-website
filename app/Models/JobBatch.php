<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobBatch extends Model
{
    public $timestamps = false;
    protected $table = 'job_batches';
    protected $fillable = [
        'name', 'total_jobs', 'pending_jobs', 'failed_jobs', 'failed_job_ids', 'options', 'cancelled_at', 'created_at', 'finished_at'
    ];

    protected $casts = [
        'total_jobs' => 'integer',
        'pending_jobs' => 'integer',
        'failed_jobs' => 'integer',
        'cancelled_at' => 'integer',
        'created_at' => 'integer',
        'finished_at' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
