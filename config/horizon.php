<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Horizon Domain
    |--------------------------------------------------------------------------
    |
    | Set a subdomain for Horizon if desired. Otherwise, leave as null so that
    | Horizon runs under your main app domain.
    |
    */
    'domain' => env('HORIZON_DOMAIN'),

    /*
    |--------------------------------------------------------------------------
    | Horizon Path
    |--------------------------------------------------------------------------
    |
    | The URI path where Horizon will be accessible.
    |
    */
    'path' => env('HORIZON_PATH', 'horizon'),

    /*
    |--------------------------------------------------------------------------
    | Horizon Redis Connection
    |--------------------------------------------------------------------------
    |
    | The Redis connection that Horizon will use.
    |
    */
    'use' => 'default',

    /*
    |--------------------------------------------------------------------------
    | Horizon Redis Prefix
    |--------------------------------------------------------------------------
    |
    | This prefix will be used for all Horizon data stored in Redis.
    |
    */
    'prefix' => env(
        'HORIZON_PREFIX',
        Str::slug(env('APP_NAME', 'laravel'), '_') . '_horizon:'
    ),

    /*
    |--------------------------------------------------------------------------
    | Horizon Route Middleware
    |--------------------------------------------------------------------------
    |
    | Middleware applied to all Horizon routes.
    |
    */
    'middleware' => ['web'],

    /*
    |--------------------------------------------------------------------------
    | Queue Wait Time Thresholds
    |--------------------------------------------------------------------------
    |
    | Configure when the LongWaitDetected event is fired.
    |
    */
    'waits' => [
        'redis:default' => 60,
    ],

    /*
    |--------------------------------------------------------------------------
    | Job Trimming Times
    |--------------------------------------------------------------------------
    |
    | Define how long Horizon should persist recent and failed jobs.
    |
    */
    'trim' => [
        'recent' => 60,        // Keep recent jobs for 1 hour.
        'pending' => 60,
        'completed' => 60,
        'recent_failed' => 10080,  // Keep recent failed jobs for 1 week.
        'failed' => 10080,
        'monitored' => 10080,
    ],

    /*
    |--------------------------------------------------------------------------
    | Silenced Jobs
    |--------------------------------------------------------------------------
    |
    | Specify jobs that should not be displayed on the Horizon dashboard.
    |
    */
    'silenced' => [
        // Add any job classes here to silence them.
    ],

    /*
    |--------------------------------------------------------------------------
    | Metrics
    |--------------------------------------------------------------------------
    |
    | Configure how many snapshots are kept for metrics.
    |
    */
    'metrics' => [
        'trim_snapshots' => [
            'job' => 24,
            'queue' => 24,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Fast Termination
    |--------------------------------------------------------------------------
    |
    | Enable fast termination to allow quick deployments.
    |
    */
    'fast_termination' => false,

    /*
    |--------------------------------------------------------------------------
    | Memory Limit (MB)
    |--------------------------------------------------------------------------
    |
    | Maximum memory for the Horizon master supervisor before restart.
    |
    */
    'memory_limit' => 64,

    /*
    |--------------------------------------------------------------------------
    | Queue Worker Configuration
    |--------------------------------------------------------------------------
    |
    | Define the settings used by your queue workers in all environments.
    | Adjust these settings in the production environment for high volume.
    |
    */
    'defaults' => [
        'supervisor-1' => [
            'connection' => 'redis',
            'queue' => ['default', 'emails'],
            'maxProcesses' => 2,
            'maxTime' => 0,
            'maxJobs' => 5,
            'memory' => 128,
            'tries' => 5,
            'timeout' => 90,
            'nice' => 0,
            'balance' => 'auto',
            'autoScalingStrategy' => 'time',
            'minProcesses' => 1,
            'balanceMaxShift' => 1,
            'balanceCooldown' => 3,
        ],
        'supervisor-2' => [
            'connection' => 'redis',
            'queue' => ['pixel-event'],
            'maxProcesses' => 15,
            'maxTime' => 0,
            'maxJobs' => 5,
            'memory' => 512,
            'tries' => 5,
            'timeout' => 90,
            'nice' => 0,
            'balance' => 'auto',
            'autoScalingStrategy' => 'time',
            'minProcesses' => 1,
            'balanceMaxShift' => 1,
            'balanceCooldown' => 3,
        ],
        'supervisor-3' => [
            'connection' => 'redis',
            'queue' => ['notification'],
            'maxProcesses' => 5,
            'maxTime' => 0,
            'maxJobs' => 5,
            'memory' => 128,
            'tries' => 5,
            'timeout' => 90,
            'nice' => 0,
            'balance' => 'auto',
            'autoScalingStrategy' => 'time',
            'minProcesses' => 1,
            'balanceMaxShift' => 1,
            'balanceCooldown' => 3,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Environment Specific Supervisor Settings
    |--------------------------------------------------------------------------
    |
    | You can define settings per environment. Below is an example for production.
    |
    */
    'environments' => [
        'production' => [
            'supervisor-1' => [
                'maxProcesses' => 10,
                'balanceMaxShift' => 1,
                'balanceCooldown' => 3,
            ],
            'supervisor-2' => [
                'maxProcesses' => 50,
                'balanceMaxShift' => 5,
                'balanceCooldown' => 3,
            ],
            'supervisor-3' => [
                'maxProcesses' => 10,
                'balanceMaxShift' => 1,
                'balanceCooldown' => 3,
            ],
        ],
        'local' => [
            'supervisor-1' => [
                'maxProcesses' => 3,
            ],
        ],
    ],
];
