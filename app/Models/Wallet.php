<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $table = "wallet";
    protected $fillable = ["userid", "amount", "amount_freeze", "amount_availability"];
    public function changeMoney(float $amount, string $reson, int $type = 0)
    {
        $amountBefore = $this->amount;
        $this->amount = ($type == 0 ) ? $this->amount - $amount : $this->amount + $amount;
        $this->amount_availability = ($type == 0 ) ? $this->amount_availability - $amount : $this->amount_availability + $amount;
        $this->save();
        $dataHistory = array(
            'user_id' => $this->id,
            'type' => $type,
            'amount' => (int)($amount),
            'before' => (int)($amountBefore),
            'after' => (int)($this->amount),
            'reason' => $reson,
            'created_at' => now(),
            'updated_at' => now()
        );
        WalletHistory::insert($dataHistory);
    }
}
