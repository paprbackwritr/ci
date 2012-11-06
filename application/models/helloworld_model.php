<?php
class Helloworld_model extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}    
    function getData()
	{
		//Query the data table for every record and row
		$query = $this->db->get('data');
		if ($query->num_rows() > 0)
		{
			//echo "There is something out there.";
			return $query->result();
		}else{
			echo "Nope. Its blank.";
			//show_error('Database is empty!');
		}
	}
}
?>
