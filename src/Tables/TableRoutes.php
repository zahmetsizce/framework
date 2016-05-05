<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TableRoutes extends Model {

		protected $table = 'routes';

		protected $primaryKey = 'id';

		protected $fillable = [ 'route_code', 'title' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];
		
	}
