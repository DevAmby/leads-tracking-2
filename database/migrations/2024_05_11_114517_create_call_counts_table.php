<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallCountsTable extends Migration
{
    public function up()
    {
        Schema::create('call_counts', function (Blueprint $table) {
            $table->id();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('telegram')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('office')->nullable();
            $table->string('event')->nullable();
            $table->string('street')->nullable();
            $table->string('snapchat')->nullable();
            $table->string('real_estate_agent')->nullable();
            $table->string('others')->nullable();
            $table->decimal('total_cold_calls', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('call_counts');
    }
}
