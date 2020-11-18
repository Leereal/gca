<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount');
            $table->string('description');
            $table->decimal('expected_profit');
            $table->decimal('balance');
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('user_id');
            $table->date('due_date'); 
            $table->unsignedBigInteger('bank_id');        
            $table->integer('status')->default(101);
            $table->ipAddress('ipaddress');
            $table->timestamps();
            $table->softDeletes();          
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')->on('plans')->onDelete('cascade');
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investments');
    }
}
