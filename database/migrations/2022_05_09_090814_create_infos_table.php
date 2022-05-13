<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('Apropo')->default("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
            $table->longText('bienvenu')->default("Lorem Ipsum is simply dummy text of the printing and typesetting industry."); 
            $table->longText('vision')->default("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
            $table->longText('stratigie')->default("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
            $table->longText('programmes')->default("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
            $table->string('whatsapp')->default("https://whatsapp.com");
            $table->text('fb')->default("https://facebook.com");
            $table->text('instagram')->default("https://www.instagram.com/");
            $table->text('youtube')->default("https://www.youtube.com/");
            $table->text('Linkedin')->default("https://ma.linkedin.com/");
            $table->text('twitter')->default("https://twitter.com/i/flow/login");
            $table->longText('txtAdherent')->default("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");           
            $table->longText('txtSetunez')->default("Lorem Ipsum is simply dummy text of the printing and typesetting industry.");
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
        Schema::dropIfExists('infos');
    }
}
