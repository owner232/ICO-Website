<?php 
defined('BASEPATH') OR exit('No direct script access allowed.');

class Config_loader 
{
    protected $CI;

    public function __construct()
    {


        $this->CI =& get_instance(); //read manual: create libraries
        $this->CI->load->database();

        $this->CI->db->from('site_settings');
        $this->CI->db->where('site_settingskey', 'site_name');       
        $query = $this->CI->db->get();
        $sitetitle=$query->result_array();
        $sitetitle=$sitetitle[0]['site_settingsvalue'];
       
        $this->CI->db->from('site_settings');
        $this->CI->db->where('site_settingskey', 'user_sitelogo');       
        $query = $this->CI->db->get();
        $site_logo=$query->result_array();
        $site_logo=$site_logo[0]['site_settingsvalue'];

        $this->CI->db->from('site_settings');
        $this->CI->db->where('site_settingskey', 'admin_sitelogo');       
        $query = $this->CI->db->get();
        $admin_site_logo=$query->result_array();
        $admin_site_logo=$admin_site_logo[0]['site_settingsvalue'];


        $this->CI->db->from('site_settings');
        $this->CI->db->where('site_settingskey', 'footer_content');       
        $query = $this->CI->db->get();
        $footer_content=$query->result_array();
        $footer_content=$footer_content[0]['site_settingsvalue'];
       
        
        $this->CI->db->from('site_settings');
        $this->CI->db->where('site_settingskey', 'favicon_logo');       
        $query = $this->CI->db->get();
        $favicon =$query->result_array();
        $favicon =$favicon[0]['site_settingsvalue'];



        $this->CI->db->from('site_settings');
        $this->CI->db->where('site_settingskey', 'meta_title');       
        $query = $this->CI->db->get();
        $meta_title =$query->result_array();
        $meta_title =$meta_title[0]['meta_title'];

        $this->CI->db->from('site_settings');
        $this->CI->db->where('site_settingskey', 'meta_description');       
        $query = $this->CI->db->get();
        $meta_description =$query->result_array();
        $meta_description =$meta_description[0]['site_settingsvalue'];

        $this->CI->db->from('site_settings');
        $this->CI->db->where('site_settingskey', 'meta_key');       
        $query = $this->CI->db->get();
        $meta_key =$query->result_array();
        $meta_key =$meta_key[0]['site_settingsvalue'];
      
        $this->CI->db->from('site_settings');
        $this->CI->db->where('site_settingskey', 'copyright');       
        $query = $this->CI->db->get();
        $copyright =$query->result_array();
        $copyright =$copyright[0]['site_settingsvalue'];

        $this->CI->db->from('site_settings');
        $this->CI->db->where('site_settingskey', 'site_url');       
        $query = $this->CI->db->get();
        $site_url =$query->result_array();
        $site_url =$site_url[0]['site_settingsvalue'];


      
        $dataX['sitetitle'] = $sitetitle;
        $dataX['site_logo'] = base_url().''.$site_logo;
        $dataX['favicon'] = base_url().''.$favicon ;
        $dataX['footer_content '] = $footer_content;
        $dataX['meta_title'] = $meta_title;
        $dataX['meta_description '] = $meta_description;
        $dataX['meta_key'] = $meta_key;
        $dataX['copyright'] = $copyright;
        $dataX['admin_site_logo'] = base_url().''.$site_logo;
        $dataX['site_url'] =$site_url;


        $this->CI->load->vars($dataX);
    }
}

?>