        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SKResetSkillLog extends Model
        {
            protected $table = 'SK_ResetSkillLog';
            public $timestamps = false;

            protected $fillable = [
                'JID', 'struserid', 'charname', 'SkillDown', 'NewSkill', 'SilkDown', 'server', 'TimeReset'
            ];

            protected $casts = [
                'JID' => 'integer',
        'TimeReset' => 'datetime',
    ];
        }