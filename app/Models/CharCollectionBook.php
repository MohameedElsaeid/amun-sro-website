        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharCollectionBook extends Model
        {
            protected $table = '_CharCollectionBook';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'ThemeID', 'SlotIndex', 'RegDate'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'ThemeID' => 'integer',
        'SlotIndex' => 'integer',
        'RegDate' => 'datetime',
    ];
        }