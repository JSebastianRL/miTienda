<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
			$table->id();
			$table->text('img')->nullable();
			$table->bigInteger('category_id')->unsigned();
			$table->string('nombre');
			$table->integer('precio');
			$table->string('stock');
			$table->string('descripcion');
			$table->timestamps();
            $table->softDeletes();

			$table->foreign('category_id')
				->references('id')
				->on('categories')
				->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
