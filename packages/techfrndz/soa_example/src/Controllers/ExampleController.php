<?php

namespace TechFrndz\SoaExample\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// Need to Define Only Contracts
use TechFrndz\SoaExample\Contracts\ExampleContract;

class ExampleController extends Controller
{
	protected $exampleObj;
    
    public function __construct(ExampleContract $exampleObj)
    {
        $this->exampleObj = $exampleObj;
    }

    /**
     * Create Function to Call Service Method
     * @return [type] [description]
     */
    public function index(){
        echo $this->exampleObj->index();

        // For Test Purpose We called it Second TIme
        // If its Incremented that means we are using same Object each time
        // So rather than initiate new object of class we use same service class
        
        echo $this->exampleObj->index();
    }
}
