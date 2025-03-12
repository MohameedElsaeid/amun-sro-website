        <?php

        use Illuminate\Database\Migrations\Migration;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Support\Facades\Schema;

        class CreateTbPaygateTransTable extends Migration
        {
            public function up(): void
            {
                Schema::create('tb_paygate_trans', function (Blueprint $table) {
            $table->integer('trans_ID');
            $table->dateTime('trans_date')->nullable();
            $table->string('trans_type', 25)->nullable();
            $table->string('bank_id', 15)->nullable();
            $table->string('account_id', 15)->nullable();
            $table->string('order_no', 25)->nullable();
            $table->integer('moneyValue')->nullable();
            $table->integer('beforeMoney')->nullable();
            $table->integer('afterMoney')->nullable();
            $table->bigInteger('PG_TransID')->nullable();
        });
            }

            public function down(): void
            {
                Schema::dropIfExists('tb_paygate_trans');
            }
        }