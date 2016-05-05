<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TablePartBom extends Model {

		protected $table = 'part_bom';

		protected $primaryKey = 'id';

		protected $fillable = [ 'part_id', 'bom_id', 'default' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];
		
	}
