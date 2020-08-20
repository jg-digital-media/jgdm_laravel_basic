<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Photos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        create::Schema('photos', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("photo_id");
            $table->string("photo_title");
            $table->string("photo_url");
            //photo_url
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
        //
    }
}
