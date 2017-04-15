<?php

Class Controller_Validation extends Controller{
    public function forge_validation()
    {
        $form = Fieldset::forge("survey");
        
        // radio
        $ops = array('Extremely sarfistied', 
            'Sarfistied',
            'Somewhat satisfied',
            'Dissatisfied',
            'Totally dissatisfied');
        $form->add(
            'q1', 
            'Question 1',
            array('options' => $ops, 
                'type' => 'radio', 
                'value' => 'false'),
            array('required')
        );
        
        return $form->validation();
    }
    
    public function action_index(){
        $val = $this->forge_validation();
        
        if($val->run()){
            $data['input'] = $val->validated();
            
            print_r($data['input']);
            die();
        }
        else
        {
            die($val->show_errors());
        }
    }
}