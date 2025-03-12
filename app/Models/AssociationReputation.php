        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class AssociationReputation extends Model
        {
            protected $table = '_AssociationReputation';
            public $timestamps = false;

            protected $fillable = [
                'AssociationCodeName', 'AssociationTypeName', 'Reputation', 'PriorOccupation'
            ];

            protected $casts = [
                'Reputation' => 'integer',
        'PriorOccupation' => 'integer',
    ];
        }