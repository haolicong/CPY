<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //定义与模型关联的数据表
		protected $table="goods";
		//主键
		protected $primaryKey="id";
		//设置是否需要自动维护时间戳 created_at updated_at
		public $timestamps =true;
		/**
		* 可以被批量赋值的属性。
		* *
		@var array
		*/
		protected $fillable = ['name','news','price','num','d_price','pic','descr','cate_id','new_price','brank'];
}
