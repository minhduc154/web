<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class qlbh_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}




	public function getidLoaihang()
	{
		$this->db->select('*');
		$this->db->from('loaihang');
		return $this->db->get()->result_array();
	}
	
	public function getidNhanvien()
	{
		$this->db->select('*');
		$this->db->from('nhanvien');
		return $this->db->get()->result_array();
	}
	public function getidKhachhang()
	{
		$this->db->select('*');
		$this->db->from('khachhang');
		return $this->db->get()->result_array();
	}
	public function getidNhacc()
	{
		$this->db->select('*');
		$this->db->from('nhacungcap');
		return $this->db->get()->result_array();
	}












public function kiemtra_guests($username,$password)
	{
	 	$this -> db -> select('*');
        $this -> db -> from('khachhang');
        $this -> db -> where('password',md5($password));
        $this -> db -> where('dienthoai', $username);
        $this -> db -> or_where('email', $username);
        $this -> db -> limit(1);
        $query = $this -> db -> get();           
            if($query -> num_rows() == 1)
                {
                 return $query->result();
                }
	}





	public function kiemtra_users($username,$password)
	{
	 	$this -> db -> select('*');
        $this -> db -> from('users');
        $this -> db -> where('username', $username);
        $this -> db -> where('password',md5($password));
        $this -> db -> limit(1);
        $query = $this -> db -> get();           
            if($query -> num_rows() == 1)
                {
                 return $query->result();
                }
	}
	public function getIduser($user)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username = ', $user);
	return	$this->db->get()->result_array();
	}
	
	public function getIdguest($user)
	{
		$this->db->select('*');
		$this->db->from('khachhang');
		$this->db->where('email = ', $user);
		$this->db->or_where('dienthoai = ', $user);
	return	$this->db->get()->result_array();
	}
	public function thongtinGuest()
	{
		$this->db->select('*');
		$this->db->from('khachhang');
		$this->db->where('id_khachhang = ', $_SESSION['id_khachhang']);
	return	$this->db->get()->result_array();
	}
	public function thongtinUser()
	{
		$this->db->select('*');
		$this->db->from('nhanvien');
		$this->db->where('id_nhanvien = ', $_SESSION['id_nhanvien']);
	return	$this->db->get()->result_array();
	}
 










	public function getallUser()
	{
		$this-> db ->select('*');
		$this-> db ->from('users');
		return $this->db->get()->result_array();
	}
	public function themUser($dataUser)
	{	
		$dataUser['password']  = md5($dataUser['password']);
		$dataUser['ngaytao'] = date('y:m:d');
		$this->db->insert('users', $dataUser);
			
    {
    redirect('qlbh_controller/taikhoan');
    }
    
	}
	public function xoaUser($id)
	{
		$this->db->delete('users','id='.$id);
	}

	public function timkiemUser($timkiem)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->like('username', $timkiem);
		$this->db->or_like('id_nhanvien',$timkiem);
		return $this->db->get()->result_array();
	}









	public function getallMathang()
	{
		$this->db->select('*');
		$this->db->from('mathang');
		return $this->db->get()->result_array();
	}
	public function themMathang($dataHang)
	{	

 		$dataHang['hinhanh'] = $this->uploadHang($data);
 		$dataHang['ngaynhap'] = date('y:m:d');
		$this->db->insert('mathang', $dataHang);
	}
	public function uploadHang()
	{
		

				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('hinhanh')){
					$error = array('error' => $this->upload->display_errors());
				}
				else{
					 $data = $this->upload->data();
  						return "./uploads/".$data['file_name'];
				}
		}
	
	public function getbyIdhang($id_hang)
	{
		$this->db->select('*');
		$this->db->from('mathang');
		$this->db->where('id_mathang =', $id_hang);
		return $this->db->get()->result_array()['0'];
	}
	public function suaMathang($data,$id_hang)
	{
		$hang = $this->getbyIdhang($id_hang);
		if(file_exists($hang['hinhanh'])&&isset($data['hinhanh']))
			{
				unlink($hang['hinhanh']);
			}

		$data['hinhanh'] = $this->uploadHang();
		$this->db->update('mathang', array_filter($data),'id_mathang ='.$id_hang);
	}
	public function xoaMathang($id_hang)
	{
		$this->db->delete('mathang','id_mathang='.$id_hang);
	}












	public function getallNhanvien()
	{
		$this->db->select('*');
		$this->db->from('nhanvien');
		return $this->db->get()->result_array();
	}
	public function themNhanvien($dataNv)
  {
  	$dataNv['avatar'] = $this->uploadNv($data);
  	$dataNv['ngaysinh'] = date('y:m:d',strtotime($dataNv['ngaysinh']));
  	$dataNv['ngaylamviec'] = date('y:m:d');
    $this->db->insert('nhanvien', $dataNv);
  }
  	public function suaNhanvien($data,$id_nv)
  {
  	
  	$nv = $this->getbyIdnhanvien($id_nv);
  	if (file_exists($nv['avatar']) && isset($avatar))
  	    {
  			unlink($nv['avatar']);
  		}

  	$data['avatar'] = $this->uploadNv();
  	$data['ngaysinh'] = date('y:m:d',strtotime($data['ngaysinh']));
	$this->db->update('nhanvien',array_filter($data),'id_nhanvien='.$id_nv);  


  }
  public function getbyIdnhanvien($id_nv)
  {
  	$this->db->select('*');
  	$this->db->from('nhanvien');
  	$this->db->where('id_nhanvien =', $id_nv);
  	return $this->db->get()->result_array()['0'];
  }

  public function xoaNhanvien($id_nv)
  {
  	$nv = $this->getbyIdnhanvien($id_nv);
  	if (file_exists($nv['avatar'])) {
  		unlink($nv['avatar']);
  	}
  	$this->db->delete('users','id_nhanvien ='.$id_nv);
  	$this->db->delete('nhanvien','id_nhanvien ='.$id_nv);
  }
  public function uploadNv()
  {
  	$config['upload_path'] = './uploads/';
  	$config['allowed_types'] = 'gif|jpg|png';
  	
  	$this->load->library('upload', $config);
  	
  	if ( ! $this->upload->do_upload('avatar')){
  		$error = array('error' => $this->upload->display_errors());
  	}
  	else{
  		$data =  $this->upload->data();
  		return "./uploads/".$data['file_name'];
  	}
  }
  	public function timkiemNhanvien($timkiem)
	{
		$this->db->select('*');
		$this->db->from('nhanvien');
		$this->db->like('dienthoai', $timkiem);
		$this->db->or_like('hoten',$timkiem);
		$this->db->or_like('diachi', $timkiem);
		$this->db->or_like('email', $timkiem);
		return $this->db->get()->result_array();
	}
  










   public function getallHoadon()
  {
    $this->db->select('*');
    $this->db->from('dondathang');
   return $this->db->get()->result_array();
  }
  public function capnhatHoadon($data,$id_donhang)
  {
 
  	$data['ngaygiaohang'] = date('y:m:d',strtotime($data['ngaygiaohang']));
	$this->db->update('dondathang',array_filter($data),'id_donhang='.$id_donhang);  


  }
  public function getbyIddonhang($id_donhang)
  {
  	$this->db->select('*');
  	$this->db->from('dondathang');
  	$this->db->where('id_donhang =', $id_donhang);
  	return $this->db->get()->result_array()['0'];
  }
  public function getChitiet($id_donhang)
  {
  	$this->db->select('*');
  	$this->db->from('chitietdathang');
  	$this->db->where('id_donhang =', $id_donhang);
  	return $this->db->get()->result_array();
  }






//---------------------------------------------------------------------------------






  




	public function viewhome()
       {
       $this->db->select('*');
       $this->db->from('mathang');
       return $this->db->get()->result_array();
   		}
   		public function timkiem($tenhang)
		{
			$this->db->select('*');
			$this->db->from('mathang');
			$this->db->like('tenhang', $tenhang);
			return $this->db->get()->result_array();
		}
   	public function getLoaihang()
   	{
   		$this->db->select('*');
       $this->db->from('loaihang');
       return $this->db->get()->result_array();
   	}
   	public function timLoaihang($id_loaihang)
      {
        $this->db->select('*');
       $this->db->from('mathang');
       $this->db->where('id_loaihang', $id_loaihang);
       return $this->db->get()->result_array();
      }
      public function donhangCuatoi()
      {
      	$this->db->select('*');
       $this->db->from('dondathang');
       $this->db->where('id_khachhang',$_SESSION['id_khachhang']);
       return $this->db->get()->result_array();
      }
   
	



		public function themHoadon($data)
		{	
			$data['ngaydathang'] = date('y:m:d');
			$data['tinhtrang'] = 'Chờ Xử Lý';
			$this->db->insert('dondathang', $data);
			$id = $this->db->insert_id();
			return $id;
		}

		public function themChitiet($cart)
		{	
			$this->db->insert('chitietdathang',$cart);
			$this->cart->destroy();
		}
		public function timkiemHoadon($timkiem)
		{
			$this->db->select('*');
			$this->db->from('dondathang');
			$this->db->like('id_donhang', $timkiem);
			$this->db->or_like('id_khachhang',$timkiem);
			return $this->db->get()->result_array();
		}











public function getallNhacc()
	{
		$this->db->select('*');
		$this->db->from('nhacungcap');
		return $this->db->get()->result_array();
	}
	public function themNhacc($dataCc)
  {
    $this->db->insert('nhacungcap', $dataCc);
  }
   public function getbyIdNhacc($id_Cc)
  {
  	$this->db->select('*');
  	$this->db->from('nhacungcap');
  	$this->db->where('id_congty =', $id_Cc);
  	return $this->db->get()->result_array()['0'];
  }
  	public function suaNhacc($dataCc,$id_Cc)
  {
  	$Cc = $this->getbyIdNhacc($id_Cc);
	$this->db->update('nhacungcap',array_filter($dataCc),'id_congty='.$id_Cc);  
  }
  public function xoaNhacc($id_Cc)
	{	
		$this->db->delete('nhacungcap','id_congty='.$id_Cc);
	}
public function timNhacc($timkiem)
{
    $this->db->like('tencongty',$timkiem);
    $this->db->or_like('diachi',$timkiem);
    $this->db->from('nhacungcap');
    return $this->db->get()->result_array();
    
}











public function getallKhachhang()
	{
		$this->db->select('*');
		$this->db->from('khachhang');	
		return $this->db->get()->result_array();
	}
public function themKhachhang($dataKh)
  {
  	$dataKh['password'] = md5($dataKh['password']);
  	$dataKh['ngaythem'] = date('y:m:d');
    $this->db->insert('khachhang', $dataKh);
  }
   public function getbyIdKhachhang($id_Kh)
  {
  	$this->db->select('*');
  	$this->db->from('khachhang');
  	$this->db->where('id_khachhang =', $id_Kh);
  	return $this->db->get()->result_array()['0'];
  }
  public function timkiemKhachhang($timkiem)
	{
		$this->db->select('*');
		$this->db->from('khachhang');
		$this->db->like('dienthoai', $timkiem);
		$this->db->or_like('hoten',$timkiem);
		$this->db->or_like('id_khachhang', $timkiem);
		$this->db->or_like('diachi',$timkiem);
		$this->db->or_like('email',$timkiem);
		return $this->db->get()->result_array();
	}
  





public function themLoaihang($data)
{
	$this->db->insert('loaihang',$data);
}
public function xoaLoaihang($id_loaihang)
{
	$this->db->where('id_loaihang', $id_loaihang);
	$this->db->delete('loaihang');
}




}

/* End of file qlbh_model.php */
/* Location: ./application/models/qlbh_model.php */