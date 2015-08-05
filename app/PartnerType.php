<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartnerType extends Model
{
    /**
     * @var string
     */
    protected $table = 'partner_types';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
