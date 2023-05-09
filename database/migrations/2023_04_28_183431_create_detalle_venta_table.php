<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->nullable();         
            $table->string('total_in_tax');
            $table->double('total_tax');
            $table->string('seguimiento');
            $table->string('metodopago');
            $table->bigInteger('estado');        
            $table->timestamps();

            $table->foreign('users_id')
            ->references('id')->on('users')
            ->onDelete('set null');
           
        });

        Schema::create('detalle_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id')->nullable();
            $table->unsignedBigInteger('producto_id')->nullable();          
            $table->string('cantidad');
            $table->double('precio');
            $table->double('subtotal')->nullable();
            $table->bigInteger('estado');        
            $table->timestamps();

            $table->foreign('pedido_id')
            ->references('id')->on('pedidos')
            ->onDelete('set null');

            $table->foreign('producto_id')
            ->references('id')->on('products')
            ->onDelete('set null');
           

        });

        Schema::create('seguimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id')->nullable();

            $table->timestamp('fecha_pedido')->nullable(); 

            $table->timestamp('fecha_envio')->nullable(); 
            $table->bigInteger('estado_envio');         
            $table->timestamp('fecha_entrega')->nullable(); 
            $table->bigInteger('estado_entrega');     

            $table->foreign('pedido_id')
            ->references('id')->on('pedidos')
            ->onDelete('set null');
           

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_venta');
    }
};
