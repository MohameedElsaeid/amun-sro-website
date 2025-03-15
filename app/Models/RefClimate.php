<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefClimate newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefClimate newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefClimate query()
 * @mixin \Eloquent
 */
class RefClimate extends Model
{
    public $timestamps = false;
    protected $table = '_RefClimate';
    protected $fillable = [
        'ID', 'InitialWeather', 'InitialAmount', 'ChangeWeather', 'Division', 'Duration', 'DurationVariance', 'Snowfall', 'SnowfallVariance', 'ProbSnow', 'Rainfall', 'RainfallVariance', 'ProbRain'
    ];

    protected $casts = [
        'ID' => 'integer',
        'InitialWeather' => 'integer',
        'InitialAmount' => 'integer',
        'ChangeWeather' => 'integer',
        'Division' => 'integer',
        'Duration' => 'integer',
        'DurationVariance' => 'integer',
        'Snowfall' => 'integer',
        'SnowfallVariance' => 'integer',
        'ProbSnow' => 'integer',
        'Rainfall' => 'integer',
        'RainfallVariance' => 'integer',
        'ProbRain' => 'integer',
    ];
    protected $connection = 'proxy';
}
