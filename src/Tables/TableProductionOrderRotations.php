<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TableProductionOrderRotations extends Model {

		protected $table = 'production_order_rotations';

		protected $primaryKey = 'id';

		protected $fillable = [ 'production_order_id', 'part_id', 'status', 'operation' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];
		
	}
