<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
	class AdminModel extends CI_Model{
		
	// $returnmessage can be num_rows, result_array, result
		public function isRowExist($tableName,$data, $returnmessage, $user_id = NULL){
		
				$this->db->where($data);
				if($user_id !== NULL) {
						$this->db->where('userId',$user_id);
				}
				if($returnmessage == 'num_rows'){
						return $this->db->get($tableName)->num_rows();
				}else if($returnmessage == 'result_array'){
						return $this->db->get($tableName)->result_array();
				}else{
						return $this->db->get($tableName)->result();
				}
		}
			// saveDataInTable table name , array, and return type is null or last inserted ID.
		public function saveDataInTable($tableName, $data, $returnInsertId = 'false'){
		
				$this->db->insert($tableName,$data);
				if($returnInsertId == 'true'){
						return $this->db->insert_id();
				}else{
						return -1;
				}
		}
			
		public function check_campaign_ambigus($start_date, $end_date){
					
				if(date_format(date_create($start_date),"Y-m-d") > date_format(date_create($end_date),"Y-m-d")){
						return -2;
					}
		
				$this -> db -> limit(1);
				$this -> db -> where('end_date >=', $start_date);
				$this -> db -> where('available_status', 1);
				$query = $this->db->get('create_campaign')->num_rows();
				if($query > 0){
						return -1;
				}
				return 1;
		}
		
		public function end_date_extends($end_date, $id){
		
				$this -> db -> limit(1);
				$this -> db -> where('start_date >=', $end_date);
				$this -> db -> where('id', $id);
				$this -> db -> where('available_status', 1);
				$query = $this->db->get('create_campaign')->num_rows();
				if($query > 0){
						return -1;
				}
				$this -> db -> limit(1);
				$this -> db -> where('end_date >=', $end_date);
				$this -> db -> where('id !=', $id);
				$this -> db -> where('available_status', 1);
				$query2 = $this->db->get('create_campaign')->num_rows();
				if($query2 > 0){
						return -1;
				}
				return 1;
		}
		public function fetch_data_pageination($limit, $start, $table, $search=NULL, $approveStatus=NULL, $user_id =NULL) {
				
				$this->db->limit($limit, $start);
	
			if($approveStatus!==NULL ){
						$this->db->where('approveStatus',$approveStatus);
				}
	
				if($user_id !== NULL ){
						$this->db->where('userId', $user_id);
				}
	
				if($search !== NULL){
						$this->db->like('title',$search);
						$this->db->or_like('body',$search);
						$this->db->or_like('date',$search);
				}
	
				$this->db->order_by('date','desc');
				$query = $this->db->get($table);
	
				if ($query->num_rows() > 0) {
						foreach ($query->result_array() as $row) {
								$data[] = $row;
						}
						return $data;
				}
				return false;
		}
		public function fetch_images($limit=18, $start=0, $table, $search=NULL,$where_data=NULL) {
				
				$this->db->limit($limit, $start);
	
				if($search !== NULL){
						$this->db->like('date',$search);
						$this->db->or_like('photoCaption',$search);
				}
				if($where_data !== NULL){
						$this->db->where($where_data);
				}
				$this->db->group_by('photo');
				$this->db->order_by('date','desc');
				$query = $this->db->get($table);
	
				if ($query->num_rows() > 0) {
						foreach ($query->result_array() as $row) {
								$data[] = $row;
						}
						return $data;
				}
				return false;
		}
		
		public function usersCategory($userId){
	
				$this->db->select('category.*');
				$this->db->join('category' , 'category_user.categoryId = category.id', 'left');
				$this->db->where('category_user.userId',$userId);
				return $this->db->get('category_user')->result_array();
		}
		
		
		public function get_user($user_id)
		{
			 $query = $this->db->select('user.*,tbl_upozilla.*')
							->where('user.id',$user_id)
							->from('user')
							->join('tbl_upozilla','user.address = tbl_upozilla.id', 'left')
							->get();
	
				return $query->row();
		}
		
		public function update_pro_info($update_data, $user_id)
		{
			 return $this->db->where('id',$user_id)->update('user',$update_data);
		}

		public function update_contact_manage($data, $id)
		{
			return $this->db->where('id',$id)->update('tbl_contact_manage',$data);
		}

		public function slider_update($data, $id)
		{
			if (isset($data['photo']) && file_exists($data['photo'])) {

				$file = $this->db->where('id',$id)
								 ->get('tbl_slider')
								 ->row()->photo;

				if (file_exists($file)) unlink($file);

			}

			return $this->db->where('id',$id)->update('tbl_slider',$data);
		}

		public function slider_delete($id)
		{

			$file = $this->db->where('id',$id)
							 ->get('tbl_slider')
							 ->row()->photo;

			if (file_exists($file)) unlink($file);

			return $this->db->where('id',$id)->delete('tbl_slider');
		}

		public function testimonials_add($data)
		{
			return $this->db->insert('tbl_testimonials',$data);
		}

		public function testimonials_update($data, $id)
		{
			if (isset($data['photo']) && file_exists($data['photo'])) {

				$result = $this->db->select('photo')
									->get_where('tbl_testimonials',array('id'=>$id))
									->row()->photo;

				if (file_exists($result)) {
					unlink($result);
				}					
			}

			return $this->db->where('id',$id)->update('tbl_testimonials',$data);
		}

		public function testimonials_delete($id)
		{
			
			$result = $this->db->select('photo')
								->get_where('tbl_testimonials',array('id'=>$id))
								->row()->photo;

			if (file_exists($result)) {
				unlink($result);
			}

			return $this->db->where('id',$id)->delete('tbl_testimonials');
		}

		public function add_package($data)
		{
			return $this->db->insert('tbl_packages',$data);
		}

		public function package_update($data, $id)
		{
			if (isset($data['photo']) && file_exists($data['photo'])) {

				$result = $this->db->select('photo')
									->get_where('tbl_packages',array('id'=>$id))
									->row()->photo;

				if (file_exists($result)) {
					unlink($result);
				}					
			}

			return $this->db->where('id',$id)->update('tbl_packages',$data);
		}

		public function package_delete($id)
		{
			$result = $this->db->select('photo')
									->get_where('tbl_packages',array('id'=>$id))
									->row()->photo;

			if (file_exists($result)) {
				unlink($result);
			}

			return $this->db->where('id',$id)->delete('tbl_packages');
		}

		public function portfolio_add($data)
		{
			return $this->db->insert('tbl_portfolio',$data);
		}

		public function portfolio_update($data, $id)
		{
			if (isset($data['photo']) && file_exists($data['photo'])) {

				$result = $this->db->select('photo')
									->get_where('tbl_portfolio',array('id'=>$id))
									->row()->photo;

				if (file_exists($result)) {

					unlink($result);

				}
			}

			return $this->db->where('id',$id)->update('tbl_portfolio',$data);
		}

		public function portfolio_delete($id)
		{

			$result = $this->db->select('photo')
								->get_where('tbl_portfolio',array('id'=>$id))
								->row()->photo;

			if (file_exists($result)) {

				unlink($result);

			}

			return $this->db->where('id',$id)->delete('tbl_portfolio');
		}

		public function blog_add($data){

			return $this->db->insert('tbl_blog',$data);
		}

		public function blog_update($data,$id)
		{
			if (isset($data['photo']) && file_exists($data['photo'])) {

				$result = $this->db->select('photo')
								   ->from('tbl_blog')
								   ->where('id',$id)
								   ->get()
								   ->row()->photo;
				if (file_exists($result)) {

					unlink($result);
				}
			}

			return $this->db->where('id',$id)->update('tbl_blog',$data);
		}

		public function get_blogs()
		{
			return $this->db->select('*')
							->from('tbl_blog')
							->get()
							->result();
		}

		public function blog_delete($id)
		{
			$result = $this->db->select('photo')
								->from('tbl_blog')
								->where('id',$id)
								->get()
								->row()->photo;
			if (file_exists($result)) {

				unlink($result);
			}
			return $this->db->where('id',$id)->delete('tbl_blog');
		}

		public function teammember_update($data, $id)
		{
			if (isset($data['photo']) && file_exists($data['photo'])) {

				$result = $this->db->select('photo')
									->get_where('tbl_teammember',array('id'=>$id))
									->row()->photo;

				if (file_exists($result)) {

					unlink($result);

				}
			}

			return $this->db->where('id',$id)->update('tbl_teammember',$data);
		}

		public function teammember_delete($id)
		{
			$result = $this->db->select('photo')
									->get_where('tbl_teammember',array('id'=>$id))
									->row()->photo;

			if (file_exists($result)) {

				unlink($result);

			}

			return $this->db->where('id',$id)->delete('tbl_teammember');
		}

	}
	
?>

