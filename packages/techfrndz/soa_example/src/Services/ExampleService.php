<?php

namespace TechFrndz\SoaExample\Services;

use TechFrndz\SoaExample\Contracts\ExampleContract;
use TechFrndz\SoaExample\Repositories\ExampleRepository;


class ExampleService implements ExampleContract
{
    protected $exampleRepoObj;

    /** Add Below Variable For Testing Purpose */
    
    protected $count = 0;
    public    $message = "<br>Hello We called This service Class Variable  %d times!";

    public function __construct(ExampleRepository $exampleRepoObj)
    {
        $this->exampleRepoObj = $exampleRepoObj;
    }

     /*
     * Get All Data From Database
     *
     * @param  array $api_key,$state,$type
     * @return response
     */
    public function index()
    {
        echo sprintf($this->message, $this->count);
        $this->count++;

        return $this->exampleRepoObj->getAll();
    }   
}
