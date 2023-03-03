<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('restaurant_type', function (Blueprint $table) {
            //relazione Many to Many tra restaurants e types
            $table->id();
            $table->unsignedBigInteger("restaurant_id");
            $table->foreign("restaurant_id")->references("id")->on("restaurants");

            //relazione Many to Many tra restaurants e types
            $table->unsignedBigInteger("type_id");
            $table->foreign("type_id")->references("id")->on("types");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
          Schema::dropIfExists('restaurant_type');
      
    }
};
