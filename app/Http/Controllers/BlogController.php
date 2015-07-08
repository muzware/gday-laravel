<?php
/**
 * 	Blog Controller is the base class for all 
 */


namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class BlogController extends BaseController
{
    use DispatchesJobs, ValidatesRequests;
    
}
