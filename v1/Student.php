<?php


class Student 
{
    public $name = 'gopi';


    public function getStudentData(): array 
    {
        return [
            'sai' => [
                'ssc' => 500,
                'inter' => 900,
                'btech' => 70
            ],
            'vamsi' => [
                'ssc' => 600,
                'inter' => 800,
                'btech' => 80
            ],
            'gopi' => [
                'ssc' => 550,
                'inter' => 850,
                'btech' => 85
            ]
        ];
    }

    public function getSSCScore(string $name): ?int 
    {
        $result = null;
        
        $studentData = $this->getStudentData();
    
        // Iterating student array
        foreach ($studentData as $key => $value) {
            
            // Conditional Checks
            if($key === $name) {
                
                $result = $studentData[$key]['ssc'];
            
            }
        }
    
        return $result;
    }

    public function getInterScore(string $name): ?int 
    {
        $result = null;
    
        $studentData = $this->getStudentData();
    
        // Iterating student array
        foreach ($studentData as $key => $value) {
            
             // Conditional Checks
            if($key === $name) {
               
                $result = $studentData[$key]['inter'];
            }
            
        }
    
        // Function will exit and return value when ever it encounter "return" keyword
        return $result;
    }

}