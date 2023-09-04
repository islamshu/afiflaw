<?php

use App\Models\General;

function get_general_value($key)
{
   $general = General::where('key', $key)->first();
   if($general){
       return $general->value;
   }
   return '';
}
function trans__($key,$local){
    if($local != 'ar'){
        return GoogleTranslate::trans($key,$local);
    }else{
        return $key;
    }
}