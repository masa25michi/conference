<?php

class Controller_Main extends Controller_Template
{
	public function action_index()
	{
            $this->template->set_global('title','HK Conference 2017');
            $data = array();
            $data['banner_title'] = 'Hi This is Mobile Test <br> with FuelPHP';
            
            $this->template->header = View::forge('layout/header');
            $this->template->banner = View::forge('layout/banner', $data, false);
            $this->template->content = View::forge('layout/index');
            $this->template->footer = View::forge('layout/footer');
//            $this->template->signin = View::forge('layout/signin');
	}
        
        public function action_add()
	{
//		return Response::forge(View::forge('welcome/index'));
                die('ok. now in add');
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
