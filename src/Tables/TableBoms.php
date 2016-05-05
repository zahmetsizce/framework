<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TableBoms extends Model {

		protected $table = 'boms';

		protected $primaryKey = 'id';

		protected $fillable = [ 'bom_code', 'title' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];

	}
