<?php
class Search extends CI_Model {
    public function searchdata()
	{
		$flage = 0;
		$name = $this->input->post('name');
		$bedrooms = $this->input->post('bedrooms');
		$bathrooms = $this->input->post('bathrooms');
		$storeys = $this->input->post('storeys');
		$garages = $this->input->post('garages');
		$min = $this->input->post('min');
		$max = $this->input->post('max');
				
		if($name != "")
		{
			$flage = 1;
			$this->db->like('name', $name , 'both');
		}
		
		if($bedrooms != "")
		{
			$flage = 1;
			$this->db->where('bedrooms', $bedrooms);
		}
		
		if($bathrooms != "")
		{
			$flage = 1;
			$this->db->where('bathrooms', $bathrooms);
		}
		
		if($storeys != "")
		{
			$flage = 1;
			$this->db->where('storeys', $storeys);
		}
		
		if($garages != "")
		{
			$flage = 1;
			$this->db->where('garages', $garages);
		}
		
		if($min != "" && $max != "")
		{
			$flage = 1;
			$this->db->where("price BETWEEN $min AND $max");
		}
		
		if($flage == 1)
		{
			$query = $this->db->get('property');
			return $query->result_array();
		}
		else
			return array();
	}
}
?>