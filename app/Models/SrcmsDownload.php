        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SrcmsDownload extends Model
        {
            protected $table = 'srcms_downloads';
            public $timestamps = false;

            protected $fillable = [
                'link', 'name', 'description'
            ];

            protected $casts = [
            ];
        }