<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('refunds', function (Blueprint $table) {

            //envio ventas
            $table->increments('id');
            $table->string('pax_nombre', 250);
            $table->string('pax_apellido', 250);
            $table->string('cliente_factura', 250);
            $table->integer('negocio');
            $table->integer('factura');
            $table->integer('providers_id')->unsigned();
            $table->string('n_tkt', 250);
            $table->string('tramo', 250);
            $table->string('moneda', 250);
            $table->float('valor_servicio');
            $table->float('tax');
            $table->float('multa');
            $table->text('regulaciones');
            $table->string('file', 250)->nullable();
            $table->dateTime('fecha_limite_envio');
            $table->integer('motives_id')->unsigned();
            $table->integer('destinations_id')->unsigned();
            $table->text('obs_ventas');
            $table->timestamps();
            $table->integer('users_id')->unsigned();
            $table->integer('statu_sends_id')->unsigned();
            $table->integer('status_id')->unsigned();

            //rechazo
            $table->text('obs_rechazo')->nullable();;
            $table->dateTime('fecha_correccion')->nullable();;

            //envio bsp
            $table->string('n_refound', 50)->nullable();
            $table->string('estado_factura', 250)->nullable();;
            $table->string('forma_pago_factura', 250)->nullable();;
            $table->dateTime('fecha_envio_bsp')->nullable();;
            $table->integer('nc_proveedor')->nullable();;
            $table->dateTime('fecha_recepcion_nc')->nullable();;
            $table->float('monto_estimado_bsp')->nullable();;
            $table->text('obs_auditoria')->nullable();;

            //recepcion bsp
            $table->dateTime('fechaRecepcionBSP')->nullable();;

            //tesoreria
            $table->string('voucher_ingreso', 250)->nullable();;
            $table->text('obs_tesoreria')->nullable();;

            
            //finiquito
            $table->string('voucher_devolucion', 250)->nullable();;
            $table->dateTime('fecha_devolucion')->nullable();;
            $table->string('destino_final', 250)->nullable();;
            $table->string('nc_cliente', 250)->nullable();;
            $table->float('monto_devolucion')->nullable();;
            $table->text('obs_final')->nullable();;
        
            //Relations

            $table->foreign('providers_id')->references('id')->on('providers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('motives_id')->references('id')->on('motives')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('destinations_id')->references('id')->on('destinations')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('statu_sends_id')->references('id')->on('statu_sends')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('status_id')->references('id')->on('status')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('users_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('refunds');
    }
}
