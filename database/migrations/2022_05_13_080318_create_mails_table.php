<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMailsTable extends Migration
{

    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mail')->unique();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mails');
    }
}
