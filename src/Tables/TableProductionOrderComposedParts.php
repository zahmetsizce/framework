<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TableProductionOrderComposedParts extends Model {

		protected $table = 'production_order_composed_parts';

		protected $primaryKey = 'id';

		protected $fillable = [ 'production_order_id', 'part_id', 'quantity' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];

	}
