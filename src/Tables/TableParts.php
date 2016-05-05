<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TableParts extends Model {

		protected $table = 'parts';

		protected $primaryKey = 'id';

		protected $fillable = [ 'part_code', 'title' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];

	}
