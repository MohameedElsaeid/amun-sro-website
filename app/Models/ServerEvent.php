        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ServerEvent extends Model
        {
            protected $table = '_ServerEvent';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'CompletionValue', 'AchievementCondition', 'ProgressCount'
            ];

            protected $casts = [
                'ID' => 'integer',
        'CompletionValue' => 'integer',
        'AchievementCondition' => 'integer',
        'ProgressCount' => 'integer',
    ];
        }