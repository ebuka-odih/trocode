<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class Fund extends Model
{
    protected $fillable = ['user_id','amount','confirm_payment','payment_code','currency','reference'];

    public function transId()
    {
        return "#0".$this->id."83".$this->id;
    }

    public function status()
    {
        if ($this->confirm_payment == 0){
            return "<span class='badge bg-warning'>Pending</span>";
        }
        return "<span class='badge bg-success'>Successful</span>";
    }
}
