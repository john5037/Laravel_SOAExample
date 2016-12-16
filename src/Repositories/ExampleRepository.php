<?php
namespace TechFrndz\SoaExample\Repositories;

// Uncomment Below Like and Use your Model
#use App\Models\Example;

class ExampleRepository
{
	/** Add Below Variable For Testing Purpose */
    
    protected $count = 0;
    public    $message = "<br>Hello We called This Repository Class Variable  %d times!";

    public function getAll()
    {
        // Uncomment Below Like to Get Data By Using Eloquent Model
        //return AgeGroup::get();   
        echo sprintf($this->message, $this->count);
        $this->count++;     
        return 'Call From DataBase';
    }
    
}
