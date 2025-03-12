        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreatePaypalTable extends Migration
        {
            public function up(): void
            {
                Schema::create('paypal', function (Blueprint $table) {
            $table->text('txn_id')->nullable();
            $table->text('payer_email')->nullable();
            $table->float('mc_gross')->nullable();
            $table->text('username')->nullable();
            $table->text('date')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('paypal');
            }
        }