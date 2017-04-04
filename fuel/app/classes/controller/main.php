<?php

class Controller_Main extends Controller_Template
{
    public function before(){
        parent::before();
        
        $this->template->css = array();    
        $this->template->js  = array();   
        $this->template->set_global('title','HK Conference 2017');
    }
    
    public function action_index()
    {   
        $this->template->header = View::forge('layout/header');
        
        $data = array();
        $data['banner_title'] = 'Hi This is Mobile Test <br> with FuelPHP';
        
        $this->template->banner = View::forge('layout/banner', $data, false);
        $this->template->content = View::forge('menu/index');
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
    
    public function action_userpage(){
        $val = $this->forge_validation();
        
        $result = Model_User::find('all');
        $data = array('server' => $result);

        if($val->run()){
            $data['banner_title'] = 'HK Conference User Page';
            $data['input'] = $val->validated();
            $this->template->content = View::forge('menu/userpage', $data, FALSE);
            
        }else{
            $data['banner_title'] = 'Hi This is Mobile Test <br> with FuelPHP';
            $this->template->content = View::forge('menu/index', $data, FALSE);
            $this->template->content->set_safe('html_error', $val->show_errors());
        }
        $this->template->header = View::forge('layout/header');
        $this->template->footer = View::forge('layout/footer');
        $this->template->banner = View::forge('layout/banner', $data, FALSE);
        
    }

}