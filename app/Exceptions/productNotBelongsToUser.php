<?php

namespace App\Exceptions;

use Exception;

class productNotBelongsToUser extends Exception
{
    public function render($request)
    {
    	return [
    		'errors'=>"product doesn't belong to user"];
    		
        
       
    }
}
