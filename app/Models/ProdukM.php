<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class ProdukM extends Model 
{
    // use \OwenIt\Auditing\Auditable;

    use HasFactory;
    protected $connection = '';
    protected $table = 'produk';

    protected $primaryKey = 'produk_id';

    /*MESSASSIGMENT : KOLOM APA SAJA YANG WAJIB DIISI*/
    //protected $fillable = [];

    /*MESSASSIGMENT : KOLOM APA SAJA YANG TIDAK WAJIB DIISI*/
    protected $guarded = [];

    /*Jika primary key tidak berifat increment value set to false*/
    //public $incrementing = false;

    /*Jika primary key tidak samadengan integer*/
    //protected $keyType = 'string';

    // /*Jika created_at dan updated_at tidak ingin diset auto oleh elequent*/
    public $timestamps = false;
}
