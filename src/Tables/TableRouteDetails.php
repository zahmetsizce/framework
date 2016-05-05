<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TableRouteDetails extends Model {

		protected $table = 'route_details';

		protected $primaryKey = 'id';

		protected $fillable = [ 'route_id', 'operation' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];

	}
