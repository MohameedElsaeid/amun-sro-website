        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillBaoHiemTNET extends Model
        {
            protected $table = '_Skill_BaoHiem_TNET';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'CharName', 'SkillBaoHiem', 'Regdate', 'LastModified'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'SkillBaoHiem' => 'integer',
        'Regdate' => 'datetime',
        'LastModified' => 'datetime',
    ];
        }