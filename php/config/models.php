<?php
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;



class Member  extends  Model  { 

        protected $table='members';
        protected  $primaryKey='id';
        public $timestamps = true;
        protected $guarded = array('id');
        //protected $fillable = [];
        //protected $hidden = [];
        //protected $connection = '';
        //use SoftDeletingTrait;
        //protected $dates = ['deleted_at'];

        //protected $casts = [
        //     ""       => '',
        //];

        //public static function boot()     {
        //    parent::boot();
        //}
        //
        public function jobs(){
            return $this->hasMany('Job','owner_id');
        }

        public function currentjob(){
            return $this->hasOne('Job','owner_id')->where('status',1)->orderBy('job_date','desc');
        }

        public function paytypes(){
            return $this->hasMany('Paytype','owner_id');
        }

        public function ownder_members() {
            return $this->belongsToMany('member','owner_members','owner_id','member_id');
        }

        public function  owners() {
            return $this->belongsToMany('member','owner_members','member_id','owner_id');
        }

        public function appconfig(){
            return $this->hasMany('App','owner_id');
        }


 }

 class Ownermember  extends  Model  { 

        protected $table='owner_members';
        protected  $primaryKey='id';
        //public $timestamps = true;
        //protected $guarded = array('id');
        //protected $fillable = [];
        //protected $hidden = [];
        //protected $connection = '';
        //use SoftDeletingTrait;
        //protected $dates = ['deleted_at'];

        //protected $casts = [
        //     ""       => '',
        //];

        //public static function boot()     {
        //    parent::boot();
        //}

 }

 class App  extends  Model  { 
 
         protected $table='apps';
         protected  $primaryKey='id';
         public $timestamps = true;
         protected $guarded = array('id');
         protected $fillable = [];
         protected $hidden = ['owner_id'];
         // protected $connection = '';
         // use SoftDeletingTrait;
         // protected $dates = ['deleted_at'];
 
         // protected $casts = [
         //     ""       => '',
         // ];
 
         // public static function boot()     {
         //    parent::boot();
         // }

  }


class Job  extends  Model  { 

        protected $table='jobs';
        protected  $primaryKey='id';
        public $timestamps = true;
        //protected $guarded = array('id');
        //protected $fillable = [];
        //protected $hidden = [];
        //protected $connection = '';
        //use SoftDeletingTrait;
        //protected $dates = ['deleted_at'];

        //protected $casts = [
        //     ""       => '',
        //];

        //public static function boot()     {
        //    parent::boot();
        //}

        public function owner() {
           return $this->hasOne('Member','id','owner_id');
        }        

 }

 class Paytype  extends  Model  { 
 
         protected $table='paytypes';
         protected  $primaryKey='id';
         public $timestamps = true;
         //protected $guarded = array('id');
         //protected $fillable = [];
         //protected $hidden = [];
         //protected $connection = '';
         //use SoftDeletingTrait;
         //protected $dates = ['deleted_at'];
 
         //protected $casts = [
         //     ""       => '',
         //];
 
         //public static function boot()     {
         //    parent::boot();
         //}
 
  }


class Lot  extends  Model  { 

        protected $table='lots';
        protected  $primaryKey='id';
        public $timestamps = true;
        //protected $guarded = array('id');
        //protected $fillable = [];
        //protected $hidden = [];
        //protected $connection = '';
        //use SoftDeletingTrait;
        //protected $dates = ['deleted_at'];

        //protected $casts = [
        //     ""       => '',
        //];

        //public static function boot()     {
        //    parent::boot();
        //}

 }


 class Notreceive  extends  Model  { 
 
         protected $table='notreceives';
         protected  $primaryKey='id';
         public $timestamps = true;
         //protected $guarded = array('id');
         //protected $fillable = [];
         //protected $hidden = [];
         //protected $connection = '';
         //use SoftDeletingTrait;
         //protected $dates = ['deleted_at'];
 
         //protected $casts = [
         //     ""       => '',
         //];
 
         //public static function boot()     {
         //    parent::boot();
         //}
 
  }