<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCookostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cookosts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('server_ip');
            $table->string('server_port');
            $table->string('server_uid');
            $table->string('type');
            $table->string('playerone');
            $table->string('playerone_ip')->nullable();
            $table->string('playertwo')->nullable();
            $table->string('playertwo_ip')->nullable();
            $table->string('extra')->nullable();
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
        Schema::dropIfExists('cookosts');
    }
}
