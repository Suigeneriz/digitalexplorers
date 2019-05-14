<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyDetails extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'company_details';

    protected $fillable = [
        'company_id','vat','manager','employees','average_salary','social_insurance_taxes','turnover','social_media_likes','social_media_followers','year'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function companyInfo()
    {
        return $this->belongsTo('App\Models\Company','company_id');
    }
}
