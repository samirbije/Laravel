<?php

class Menu extends \Eloquent {
	
	protected $primaryKey = 'id';

	
	protected $table = 'menus';
	
	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];
	
	
	protected $fillable = ['parent_id','name', 'name_nepali', 'menu_order', 'link','is_active'];			
	
 	public function parent() {
        return $this->hasOne('Menu', 'id', 'parent_id');
    }	
	
	public function children() {
        return $this->hasMany('Menu', 'parent_id', 'id');
    } 		
	
	public static function tree() {
			return static::with(implode('.', array_fill(0, 10, 'children')))
											->where('parent_id', '=', 0)
											->get();			
	}
	
	public static function front_tree() {
			return static::with(implode('.', array_fill(0, 10, 'children')))
											->where('is_active', '=', 1)
											->where('parent_id', '=', 0)
											->get();			
	}	
}