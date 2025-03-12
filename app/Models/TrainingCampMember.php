        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TrainingCampMember extends Model
        {
            protected $table = '_TrainingCampMember';
            public $timestamps = false;

            protected $fillable = [
                'CampID', 'CharID', 'RefObjID', 'CharName', 'JoinDate', 'MemberClass', 'CharJoinedLevel', 'CharCurLevel', 'CharMaxLevel', 'HonorPoint'
            ];

            protected $casts = [
                'CampID' => 'integer',
        'CharID' => 'integer',
        'RefObjID' => 'integer',
        'JoinDate' => 'datetime',
        'MemberClass' => 'integer',
        'CharJoinedLevel' => 'integer',
        'CharCurLevel' => 'integer',
        'CharMaxLevel' => 'integer',
        'HonorPoint' => 'integer',
    ];
        }