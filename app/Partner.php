<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Partner extends Model
{
        protected $fillable = ['photo','lien'];


       public function delete(){
	
	$file = public_path('/images/partners/').$this->attributes['photo'];


    if($file && $this->attributes['photo']!="default_partner.png"){

        if(File::isFile($file)){
            \File::delete($file);
        }
    }
    parent::delete();
}
}
