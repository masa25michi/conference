<?php

class Controller_Main extends Controller_Template
{
    public function before(){
        parent::before();
        
        $this->template->css = array();    
        $this->template->js  = array();   
        
    }
    
    public function action_index()
    {   
        $this->template->set_global('title','HK Conference 2017');
        $this->template->header = View::forge('layout/header');
        
        $data = array();
        $data['banner_title'] = 'Hi This is Mobile Test <br> with FuelPHP';
        
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('layout/index');
        $this->template->footer = View::forge('layout/footer');
        
    }

    public function forge_validation(){
        $val = Validation::forge();

        $val->add('tel', 'tel')
            ->add_rule('trim')
            ->add_rule('required')
            ->add_rule('max_length', 50);
        $val->add('pass', 'password')
            ->add_rule('trim')
            ->add_rule('required')
            ->add_rule('max_length', 50);

        return $val;
    }

}
