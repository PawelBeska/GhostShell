<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Orders extends Model
{
    protected $fillable = [
        'name', 'description','value','users_id','stages_id','statuses_id','contract_file','contract'
    ];
    public function getOrders()
    {
        return $this->where('users_id',Auth::id())->get();

    }
    public function stage()
    {
        return $this->hasOne('App\Stages','orders_id','id')->latest('id');
    }
    public function status()
    {
        return $this->hasOne('App\Statuses','id','statuses_id')->latest('id');
    }
    public static function createOrder($request)
    {
        $status = Statuses::create(['name'=>'Oczekuje','color'=>'danger']);
        $order =  self::create(array_merge($request,[ 'statuses_id'=>$status->id]));

        Stages::create(['name' =>'Projekt czeka na akceptacje','orders_id'=>$order->id,'progress'=>0,'started_at'=>date('Y-m-d')]);
        return $order->id;
    }
}
