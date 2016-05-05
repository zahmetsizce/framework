<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TableProductionOrderNeededParts extends Model {

		protected $table = 'production_order_needed_parts';

		protected $primaryKey = 'id';

		protected $fillable = [ 'production_order_id', 'part_id', 'quantity', 'reserved', 'remainder', 'upper_part_id', 'coefficient', 'is_lower_part' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];


	}
