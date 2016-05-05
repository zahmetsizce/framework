<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TableProductionOrders extends Model {

		protected $table = 'production_orders';

		protected $primaryKey = 'id';

		protected $fillable = [ 'production_order_code', 'part_id', 'quantity' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];

	}
