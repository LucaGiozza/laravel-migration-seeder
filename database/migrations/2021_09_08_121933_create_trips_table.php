<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('agenzia', 100);
            $table->string('durata_viaggio', 50);
            $table->float('prezzo', 7,2);
            $table->string('destinazione',100);
            // $table->string('numero_rimborso', 30);
            $table->float('numero_viaggio', 8,2 );
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * 
     * Reverse the migrations
     *
     * @return void
     */
    public function down()

    {
        Schema::dropIfExists('trips');
    }
}
