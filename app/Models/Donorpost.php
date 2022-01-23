<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donorpost extends Model
{
    use HasFactory;
    protected $table="donorposts";
    // protected $fillable = [
    //         'image',
    //         'Donor_Name',
    //         'user_id',
    //         'Date_of_Birth',
    //         'Blood_group',
    //         'Contact',
    //         'Email',
     
    //         'NID_Number',
    //         'Address',
    //         'Organ_wants_to_donate',
    //         'Quantity',
    //         'Details',
    //         'Post_Date',
    //     ];
    
    protected $guarded=[];
    public function organ()
    {
        return $this-> belongsTo(Organ::class,'organ_id','id');
    }
}
