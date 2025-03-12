        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class UniquesLog extends Model
        {
            protected $table = '_UniquesLog';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'Type', 'CodeName128', 'Killer', 'Date'
            ];

            protected $casts = [
                'ID' => 'integer',
        'Type' => 'integer',
    ];
        }