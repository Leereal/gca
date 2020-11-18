<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->id();
            $table->decimal('amount');
            $table->decimal('balance');  
            $table->unsignedBigInteger('bank_id');
            $table->unsignedBigInteger('investment_id');
            $table->unsignedBigInteger('user_id');
            $table->text('comment')->nullable();            
            $table->integer('status')->default(2);
            $table->ipAddress('ipaddress');
            $table->timestamps();
            $table->softDeletes();   

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');            
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
            $table->foreign('investment_id')->references('id')->on('investments')->onDelete('cascade');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auctions');
    }
}
