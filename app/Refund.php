<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $fillable = [
	'pax_nombre', 
	'pax_apellido', 
	'cliente_factura', 
	'negocio', 
	'factura', 
	'providers_id', 
	'n_tkt', 
	'tramo', 
	'moneda', 
	'valor_servicio', 
	'tax', 
	'multa', 
	'regulaciones',
	'file',
	'fecha_limite_envio',
	'motives_id', 
	'destinations_id',
	'obs_ventas',
	'users_id',
	'statu_sends_id',
	'status_id',
	'obs_rechazo',
	'fecha_correccion',
	'n_refound',
	'estado_factura',
	'forma_pago_factura',
	'fecha_envio_bsp',
	'nc_proveedor',
	'fecha_recepcion_nc',
	'monto_estimado_bsp',
	'obs_auditoria',
	'fechaRecepcionBSP',
	'voucher_ingreso',
	'obs_tesoreria',
	'voucher_devolucion',
	'fecha_devolucion',
	'destino_final',
	'nc_cliente',
	'monto_devolucion',
	'obs_final',
	];

    public function providers()
    {	
    	return $this->belongsTo(Provider::Class);
    }

    public function users()
    {	
    	return $this->belongsTo(User::Class);
    }

    public function motives()
    {
    	return $this->belongsTo(Motive::Class);
    }

    public function destinations()
    {
    	return $this->belongsTo(Destination::Class);
    }

    public function statu_sends()
    {
    	return $this->belongsTo(StatuSend::Class);
    }

    public function status()
    {
    	return $this->belongsTo(Statu::Class);
    }

}
