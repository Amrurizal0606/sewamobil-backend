<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingTransaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'proof',
        'booking_trx_id',
        'started_at',
        'total_amount',
        'price',
        'total_tax_amount',
        'insurance',
        'duration',
        'is_paid',
        'vehicle_id',
        'amru_store_id',
    ];

    public static function generateUniqueTrxId()
    {
        $pretix = 'AMRUU';
        do {
            $rendomstring = $pretix . mt_rand(1000, 999);
        } while (self::where('booking_trx_id', $rendomstring)->exists());
        return $rendomstring;
    }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    // public function amruStore(): BelongsTo
    // {
    //     return $this->belongsTo(AmruStore::class, 'amru_store_id');
    // }
}
