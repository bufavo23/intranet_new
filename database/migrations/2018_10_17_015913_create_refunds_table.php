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
            $table->increments('id');
            $table->string('n_refound', 50);
            $table->dateTime('fecha_solicitud');
            $table->dateTime('fechaRecepcionBSP');
            $table->dateTime('fecha_correccion');
            $table->dateTime('fecha_envio');
            $table->integer('negocio');
            $table->integer('factura');
            $table->string('pax_nombre', 250);
            $table->string('pax_apellido', 250);
            $table->string('cliente_factura', 250);
            $table->string('estado_factura', 250);
            $table->string('forma_pago_factura', 250);
            $table->string('n_tkt', 250);
            $table->text('detalle_servicio');
            $table->string('tramo', 250);
            $table->string('moneda', 250);
            $table->float('valor_servicio');
            $table->float('tax');
            $table->float('multa');
            $table->text('regulaciones');
            $table->integer('nc_proveedor');
            $table->dateTime('fecha_recepcion_nc');
            $table->string('voucher', 250);
            $table->float('monto');
            $table->dateTime('fecha_dev');
            $table->text('observacion_final');
            $table->string('destino_final', 250);
            $table->string('nc_cliente', 250);
            $table->string('voucher_devolucion', 250);
            $table->float('monto_estimado');
            $table->text('obs_auditoria');
            $table->text('obs_tesoreria');
            $table->text('obs_cobranzas');
            $table->text('obs_ventas');
            $table->text('rechazo');
            $table->integer('statu_sends_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('providers_id')->unsigned();
            $table->integer('motives_id')->unsigned();
            $table->integer('destinations_id')->unsigned();
   
            $table->timestamps();

            //Relations
            $table->foreign('statu_sends_id')->references('id')->on('statu_sends')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('status')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('users_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('providers_id')->references('id')->on('providers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('motives_id')->references('id')->on('motives')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('destinations_id')->references('id')->on('destinations')
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
