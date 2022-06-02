<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname',
        'lname',
        'phone',
        'department_id',
        'business_size',
        'industry_id',
        'company_name',
        'country_id',
        'email',
        'password',
        'company_url',
        'desc',
        'city',
        'profile_img',
        'banner_img',


    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // functions
    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }



    // ------------ reverse

    public function socials()
    {
        return $this->hasMany(UserSocial::class);
    }


    public function services()
    {
        return $this->hasMany(UserService::class);
    }

    public function certificates()
    {
        return $this->hasMany(UserCertificate::class);
    }


    public function helps()
    {
        return $this->hasMany(UserHelp::class);
    }


    public function reviewers()
    {
        return $this->hasMany(UserRating::class, 'reviewed_id');
    }


    public function revieweds()
    {
        return $this->hasMany(UserRating::class, 'reviewer_id');
    }



    public function notification_sender()
    {
        return $this->hasMany(UserNotification::class);
    }


    public function notification_receiver()
    {
        return $this->hasMany(UserNotification::class);
    }


    // ----


    public function deals()
    {
        return $this->hasMany(UserDeal::class);
    }


    public function deal_requests()
    {
        return $this->hasMany(UserDealRequest::class);
    }

    public function request_items()
    {
        return $this->hasMany(UserDealRequestItem::class);
    }


    // ---

    public function blogs()
    {
        return $this->hasMany(UserBlog::class);
    }


    // ---

    public function requirements()
    {
        return $this->hasMany(UserRequirement::class);
    }



    public function requirement_quotations()
    {
        return $this->hasMany(UserRequirementQuotation::class);
    }

    public function quotation_clarifications()
    {
        return $this->hasMany(UserRequirementQuotationClarification::class);
    }


    public function quotation_items()
    {
        return $this->hasMany(UserRequirementQuotationItem::class);
    }


    // -----

    public function auctions()
    {
        return $this->hasMany(UserAuction::class);
    }



    public function auction_bids()
    {
        return $this->hasMany(UserAuctionBid::class);
    }


    public function bid_items()
    {
        return $this->hasMany(UserAuctionBidItem::class);
    }


    // ------

    



    // ---------


    

}
