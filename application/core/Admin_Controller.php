<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();	
		if(!$this->session->userdata('user_id')){		
			$this->uri->segment(2)=='login'||$this->uri->segment(2)=='forgot-password'||$this->uri->segment(2)=='reset-password'?'':redirect('admin/login');
		}    	

        $data = array();
        $data['table'] = 'settings';
        $data['output_type'] = 'row';
        $data['where'] = array('settings_id' => 1);
        $this->settings = $this->general->get($data);

        $this->header_logo = $this->settings->settings_logo;  
        $this->site_title = $this->settings->settings_site_title;         
        $this->settings_email_from = $this->settings->settings_email_from;      
        $this->favicon = $this->settings->settings_favicon;         
        $this->settings_email_to = $this->settings->settings_email_to;  

        $this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
        
        if($this->session->userdata('user_id')){ 

            $data = array();
            $data['table'] = 'user';
            $data['output_type'] = 'row';
            $data['where'] = array('user_id' => $this->session->userdata('user_id'));
            $this->user = $this->general->get($data);

            $this->user_image = $this->user->user_image;
            $this->user_name = $this->user->user_name;
            $this->adminrole = $this->session->userdata('user_role');
            $this->user_role = $this->session->userdata('user_role');
    	

            $this->user_roles = array(
                1 => array(
                    'dashboard' => array(
                        'name' => 'Dashboard',
                        'icon' => 'icon-main icon-speedometer',
                    ),
                    'settings' => array(
                        'name' => 'Settings',
                        'icon' => 'icon-main icon-settings',                    
                        'sub_modules' => array(
                            'profile' => 'Profile',
                            'settings' => 'General',
                            'seo' => 'SEO Meta Elements',
                            'robots' => 'Robots.txt',
                            'sitemap' => 'Sitemap.xml',                             
                        ),   
                    ),
                    '#' => array(
                        'name' => 'Content',
                        'icon' => 'icon-main icon-docs',
                        'sub_modules' => array(            
                            'header_navbar' => 'Header Navbar',
                            'header_navbar/sort' => 'Header Navbar Sort',   
                        ),  
                    ),
                    '#eCommerce' => array(
                        'name' => 'eCommerce',
                        'icon' => 'icon-main icon-basket',
                        'sub_modules' => array(            
                            'customer' => 'Customers',   
                            'order' => 'Order',
                        ),  
                    ),
                    'crud_generator' => array(),
                    'development_task' => array(),
                    'test' => array(),
                    'gallery' => array(),
                    'faq' => array(),
                    'profile' => array(),
                    'logout' => array(),
                ),

                2 => array(
                    'dashboard' => array(
                        'name' => 'Dashboard',
                        'icon' => 'icon-main icon-speedometer',
                    ),
                    'settings' => array(
                        'name' => 'Settings',
                        'icon' => 'icon-main icon-settings',                    
                        'sub_modules' => array(
                            'profile' => 'Profile',
                            'settings' => 'General',
                            'seo' => 'SEO Meta Elements',
                            'robots' => 'Robots.txt',
                            'sitemap' => 'Sitemap.xml',                             
                        ),   
                    ),
                    '#' => array(
                        'name' => 'Content',
                        'icon' => 'icon-main icon-docs',
                        'sub_modules' => array(            
                            'header_navbar' => 'Header Navbar',
                            'header_navbar/sort' => 'Header Navbar Sort',   
                        ),  
                    ),
                    'crud_generator' => array(),
                    'profile' => array(),
                    'logout' => array(),
                ),

                3 => array(
                    'dashboard' => array(
                        'name' => 'Dashboard',
                        'icon' => 'icon-main icon-speedometer',
                    ),
                    'settings' => array(
                        'name' => 'Settings',
                        'icon' => 'icon-main icon-settings',                    
                        'sub_modules' => array(
                            'profile' => 'Profile',
                            'settings' => 'General',
                            'seo' => 'SEO Meta Elements',
                            'robots' => 'Robots.txt',
                            'sitemap' => 'Sitemap.xml',                             
                        ),   
                    ),
                    '#' => array(
                        'name' => 'Content',
                        'icon' => 'icon-main icon-docs',
                        'sub_modules' => array(            
                            'header_navbar' => 'Header Navbar',
                            'header_navbar/sort' => 'Header Navbar Sort',   
                        ),  
                    ),
                    'crud_generator' => array(),
                    'profile' => array(),
                    'logout' => array(),
                ),

                4 => array(
                    'dashboard' => array(
                        'name' => 'Dashboard',
                        'icon' => 'icon-main icon-speedometer',
                    ),
                    'settings' => array(
                        'name' => 'Settings',
                        'icon' => 'icon-main icon-settings',                    
                        'sub_modules' => array(
                            'profile' => 'Profile',
                            'settings' => 'General',
                            'seo' => 'SEO Meta Elements',
                            'robots' => 'Robots.txt',
                            'sitemap' => 'Sitemap.xml',                             
                        ),   
                    ),
                    '#' => array(
                        'name' => 'Content',
                        'icon' => 'icon-main icon-docs',
                        'sub_modules' => array(            
                            'header_navbar' => 'Header Navbar',
                            'header_navbar/sort' => 'Header Navbar Sort',   
                        ),  
                    ),
                    'crud_generator' => array(),
                    'profile' => array(),
                    'logout' => array(),
                ),
                 
            );

            $this->allowed_url = array();

            foreach ($this->user_roles[$this->user_role] as $module_url => $module_data) {
                $this->allowed_url[] = $module_url;   
                if(!empty($module_data['sub_modules'])){
                    foreach ($module_data['sub_modules'] as $sub_module_url => $sub_module_data) {
                        $this->allowed_url[] = $sub_module_url;   
                    }
                }         
            }
            
            $this->uri1 = $this->uri->segment(1);
            $this->uri2 = $this->uri->segment(2);


            if(!in_array($this->uri2,$this->allowed_url)){
                $this->session->set_flashdata('error', 'You are not allowed to visit this module.');
                redirect($_SERVER['HTTP_REFERER']);
            }
        }  
	} 
}





    	    
    	   
    	    

        	
        	