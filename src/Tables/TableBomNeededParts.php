<?php

	namespace Zahmetsizce\Tables;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;

	class TableBomNeededParts extends Model {

		protected $table = 'bom_needed_parts';

		protected $primaryKey = 'id';

		protected $fillable = [ 'bom_id', 'part_id', 'quantity' ];

		public $timestamps = true;

		use SoftDeletes;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at' ];

	}
