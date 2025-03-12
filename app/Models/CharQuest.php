        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharQuest extends Model
        {
            protected $table = '_CharQuest';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'QuestID', 'Status', 'AchievementCount', 'StartTime', 'EndTime', 'QuestData1', 'QuestData2'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'QuestID' => 'integer',
        'Status' => 'integer',
        'AchievementCount' => 'integer',
        'StartTime' => 'datetime',
        'EndTime' => 'datetime',
        'QuestData1' => 'integer',
        'QuestData2' => 'integer',
    ];
        }