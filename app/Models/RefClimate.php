        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefClimate extends Model
        {
            protected $table = '_RefClimate';
            public $timestamps = false;

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
        }