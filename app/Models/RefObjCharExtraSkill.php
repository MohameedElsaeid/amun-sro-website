        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefObjCharExtraSkill extends Model
        {
            protected $table = '_RefObjCharExtraSkill';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'CharID', 'ExtraSkill_1', 'ExtraSkill_2', 'ExtraSkill_3', 'ExtraSkill_4', 'ExtraSkill_5', 'ExtraSkill_6', 'ExtraSkill_7', 'ExtraSkill_8', 'ExtraSkill_9', 'ExtraSkill_10', 'ExtraSkill_11', 'ExtraSkill_12', 'ExtraSkill_13', 'ExtraSkill_14', 'ExtraSkill_15', 'ExtraSkill_16', 'ExtraSkill_17', 'ExtraSkill_18', 'ExtraSkill_19', 'ExtraSkill_20'
            ];

            protected $casts = [
                'ID' => 'integer',
        'CharID' => 'integer',
        'ExtraSkill_1' => 'integer',
        'ExtraSkill_2' => 'integer',
        'ExtraSkill_3' => 'integer',
        'ExtraSkill_4' => 'integer',
        'ExtraSkill_5' => 'integer',
        'ExtraSkill_6' => 'integer',
        'ExtraSkill_7' => 'integer',
        'ExtraSkill_8' => 'integer',
        'ExtraSkill_9' => 'integer',
        'ExtraSkill_10' => 'integer',
        'ExtraSkill_11' => 'integer',
        'ExtraSkill_12' => 'integer',
        'ExtraSkill_13' => 'integer',
        'ExtraSkill_14' => 'integer',
        'ExtraSkill_15' => 'integer',
        'ExtraSkill_16' => 'integer',
        'ExtraSkill_17' => 'integer',
        'ExtraSkill_18' => 'integer',
        'ExtraSkill_19' => 'integer',
        'ExtraSkill_20' => 'integer',
    ];
        }