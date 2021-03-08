<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();

            // Foreign key to the main model
            $table->unique(['product_id', 'locale']);
            $table->foreignID('product_id')->constrained()->onDelete('cascade');
     
            // Actual fields you want to translate
            $table->string('name');
            $table->longText('description');
            
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
        Schema::dropIfExists('product_translations');
    }
}
