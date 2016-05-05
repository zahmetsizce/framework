<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TableOrderDetails extends Model {

		protected $table = 'order_details';

		protected $primaryKey = 'id';

		protected $fillable = [ 'order_id', 'part_id', 'quantity', 'remainder', 'reserved' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];

	}
