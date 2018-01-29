<?php
/**
 * Common Model
 * @package Alphabettechs Pvt Ltd
 * @subpackage Trading India
 * @category Models
 * @author Princy
 * @version 1.0
 * @link http://alphabettechs.com/
 * 
 */
 class Common_model extends CI_Model {
 	// Constructor 
 	function Common_model()
	{
		parent::__construct();
	}
	/**
	 * INSERT data into table model
	 * 
	 * @access Public
	 * @param $tableName - Name of the table(required)
	 * @param $data - Specifies the insert data(required)
	 * @return Last insert ID
	 */
	public function insertTableData($tableName = '', $data = array())
	{
		$this->db->insert($tableName, $data);
		return $this->db->insert_id();
	}
	/**
	 * DELETE data from table
	 * 
	 * @access Public
	 * @param $tableName - Name of the table(required)
	 * @param $where - Specifies the which row will be delete(optional)
	 * @return Affected rows
	 */
	public function deleteTableData($tableName = '', $where = array())
	{
		if ((is_array($where)) && (count($where) > 0)) {
			$this->db->where($where);
		}
		$this->db->delete($tableName);
		return $this->db->affected_rows();
	}
	/**
	 * UPDATE data to table
	 * 
	 * @access Public
	 * @param $tableName - Name of the table(required)
	 * @param $where - Specifies the where to update(optional)
	 * @param $data - Modified data(required) 
	 * @return Affected rows
	 */
	public function updateTableData($tableName = '', $where = array(), $data = array())
	{
		if ((is_array($where)) && (count($where) > 0)) {
			$this->db->where($where);
		}
		return $this->db->update($tableName, $data);
	}
	/**
	 * SELECT data from table
	 * 
	 * @access Public
	 * @param $tableName - Name of the table(required)
	 * @param $where - Specifies the where to update(optional)
	 * @param $data - Modified data(required) 
	 * @return Affected rows
	 */
	public function getTableData($tableName = '', $where = array(), $selectFields = '', $like = array(), $where_or = array(), $like_or = array(), $offset = '', $limit = '', $orderBy = array(), $groupBy = array())
	{
		// WHERE AND conditions
		if ((is_array($where)) && (count($where) > 0)) {
			$this->db->where($where);
		}
		// WHERE OR conditions
		if ((is_array($where_or)) && (count($where_or) > 0)) {
			$this->db->or_where($where_or);
		}
		//LIKE AND 
		if ((is_array($like)) && (count($like) > 0)) {
			$this->db->like($like);
		}
		//LIKE OR 
		if ((is_array($like_or)) && (count($like_or) > 0)) {
			$this->db->or_like($like_or);
		}
		//SELECT fields
		if ($selectFields != '') {
			$this->db->select($selectFields);
		}
		//Group By
		if (is_array($groupBy) && (count($groupBy) > 0)) {
			$this->db->group_by($groupBy[0]);
		}
		//Order By
		if (is_array($orderBy) && (count($orderBy) > 0)) {
			$this->db->order_by($orderBy[0], $orderBy[1]);
		}
		//OFFSET with LIMIT
		if($limit != '' && $offset != '')
		{
			$this->db->limit($limit, $offset);
		}
		// LIMIT
		if($limit != '' && $offset == ''){
			$this->db->limit($limit);
		}
		
		return $this->db->get($tableName);
	}  
	/**
	 * CUSTOM SQL query
	 * 
	 * @access Public
	 * @param SQL query
	 * @return Response  
	 */
	public function customQuery($query) {
		return $this->db->query($query);
	}
	
	//select records from joined tables
	public function getJoinedTableData($tableName = '', $joins = array(),  $where = array(), $selectFields = '', $like = array(), $where_or = array(), $like_or = array(), $offset = '', $limit = '', $orderBy = array())
	{
		
		$this->db->from($tableName);		
		//join tables list
		if ((is_array($joins)) && (count($joins) > 0)) {
			foreach($joins as $jointb=>$joinON){
				$this->db->join($jointb, $joinON);
			}
		}
		
		// WHERE AND conditions
		if ((is_array($where)) && (count($where) > 0)) {
			$this->db->where($where);
		}
		// WHERE OR conditions
		if ((is_array($where_or)) && (count($where_or) > 0)) {
			$this->db->or_where($where_or);
		}
		//LIKE AND 
		if ((is_array($like)) && (count($like) > 0)) {
			$this->db->like($like);
		}
		//LIKE OR 
		if ((is_array($like_or)) && (count($like_or) > 0)) {
			$this->db->or_like($like_or);
		}
		//SELECT fields
		if ($selectFields != '') {
			$this->db->select($selectFields, false);
		}
		//Order By
		if (is_array($orderBy) && (count($orderBy) > 0)) {
			$this->db->order_by($orderBy[0], $orderBy[1]);
		}
		//OFFSET with LIMIT
		if($limit != '' && $offset != ''){
			$this->db->limit($limit, $offset);
		}
		// LIMIT
		if($limit != '' && $offset == ''){
			$this->db->limit($limit);
		}
		
		return $this->db->get();
		
	} 
	
	//select records from joined tables
	public function getleftJoinedTableData($tableName = '', $joins = array(),  $where = array(), $selectFields = '', $like = array(), $where_or = array(), $like_or = array(), $offset = '', $limit = '', $orderBy = array())
	{
		
		$this->db->from($tableName);		
		//join tables list
		if ((is_array($joins)) && (count($joins) > 0)) {
			foreach($joins as $jointb=>$joinON){
				$this->db->join($jointb, $joinON, 'LEFT');
			}
		}
		
		// WHERE AND conditions
		if ((is_array($where)) && (count($where) > 0)) {
			$this->db->where($where);
		}
		// WHERE OR conditions
		if ((is_array($where_or)) && (count($where_or) > 0)) {
			$this->db->or_where($where_or);
		}
		//LIKE AND 
		if ((is_array($like)) && (count($like) > 0)) {
			$this->db->like($like);
		}
		//LIKE OR 
		if ((is_array($like_or)) && (count($like_or) > 0)) {
			$this->db->or_like($like_or);
		}
		//SELECT fields
		if ($selectFields != '') {
			$this->db->select($selectFields);
		}
		//Order By
		if (is_array($orderBy) && (count($orderBy) > 0)) {
			$this->db->order_by($orderBy[0], $orderBy[1]);
		}
		//OFFSET with LIMIT
		if($limit != '' && $offset != ''){
			$this->db->limit($limit, $offset);
		}
		// LIMIT
		if($limit != '' && $offset == ''){
			$this->db->limit($limit);
		}
		
		return $this->db->get();
		
	} 
	
	
	function generateThumbnail($source, $destination, $width, $height)
    {
    	$this->load->library('image_lib');
        // Checking if the file exists, otherwise we use a default image
 
        // If the thumbnail already exists, we just read it
        // No need to use the GD library again
       // $destination = $path.$width.'_'.$height.'_'.$img;
       // $source = $path.$img
        if( !is_file($destination) )
        {
        	$config['image_library'] = 'gd2';
            $config['source_image'] =  $source;
            $config['new_image'] = $destination;
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['width'] = $width;
            $config['height'] = $height;
             
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            return $destination;
        }else{
        	return $destination;
        }
    }

   function getRecordsFull($tablename, $array, $selectFields = '')
	{	
		//SELECT fields
		if ( !empty($selectFields) ) 
			$this->db->select($selectFields);

		if(isset($array) && !empty($array))
			$this->db->where($array);  

		return $this->db->get($tablename)->result();
	}

 	function emptyTable($tablename)
	{
		return $this->db->truncate($tablename);
	}

	function get_userdetails($user_id)
	{ 
		$this->db->where('member_id',$user_id);  
		$query=$this->db->get('membertable'); 
		if($query->num_rows >= 1)
		{                
			return $query->row();			 
		}   
		else
		{      
			return false;		
		}
	}

	/*function fetch_currency()
	{		 
	    $this->db->where('status','active');
		$res=$this->db->get('currency_pair');
		$this->db->limit(1);
		if($res->num_rows()>0)
		{
			$row=$res->row();
			return $row->pair;	
	    }
	}*/

	/*function fetchuserbalanceByCurrency($currency)
	{
		$customer_user_id	=	$this->session->userdata('customer_user_id');
		$this->db->select($currency);
		$this->db->where('userId',$customer_user_id);  
		$query=$this->db->get('coin_userbalance'); 
		if($query->num_rows >= 1)
		{                
			$row = $query->row();	
			return $row->$currency;
		}   
		else
		{      
			return false;		
		}
	}*/

	/*added by revathyjr starts*/
	function gettablename($table,$where,$perpage,$pageno)
	{
		if($pageno>0)
		{
			$offset=($pageno - 1) * $perpage;
	    }
	    else
	    {
	    	$offset=0;	
	    }
	    // WHERE AND conditions
		if ((is_array($where)) && (count($where) > 0))
		{
			$this->db->where($where);
		}

		$this->db->limit($perpage,$offset);
		//$this->db->get($table);
		//echo $this->db->last_query();exit;
		return $this->db->get($table);

	}
	/*added by revathyjr ends*/
	
 }
 
/*
 * End of the file common_model.php
 * Location: application/models/common_model.php
 */
