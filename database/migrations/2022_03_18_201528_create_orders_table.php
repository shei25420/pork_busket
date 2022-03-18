<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('ref')->unique();
            $table->unsignedTinyInteger('status')->default(0);
            $table->foreingId('waiter_id')->nullable();
            $table->foreingId('chef_id')->nullable();
            $table->foreingId('transaction_id')->nullable();
            $table->timestamp('placed');
            $table->timestamp('serviced')->nullable();
            $table->timestamp('in_progress')->nullable();
            $table->timestamp('done')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
