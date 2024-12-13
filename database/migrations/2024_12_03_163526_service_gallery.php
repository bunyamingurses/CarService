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
        Schema::create("serviceGallery",function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger("serviceId")->nullable(false);
            $table->string("imageBefore")->nullable(false);
            $table->string("imageBeforeWebp")->nullable(false);
            $table->string("imageAfter")->nullable(false);
            $table->string("imageAfterWebp")->nullable(false);
            $table->dateTime("created_at")->nullable(false);
            $table->dateTime("updated_at")->nullable(false);

            $table->foreign("serviceId")->on("service")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("serviceGallery");
    }
};
