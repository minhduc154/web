<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class qlbh_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

    public function dangky()
      {
        $this->load->view('dangky_view');
      }

	  public function dangnhap()
      {
        if (isset($_SESSION['username'])) {
          $this->load->view('home2_view');
        }
	     else {
         redirect('qlbh_controller/index'); 
        }	
	    }
    public function dangxuat()
    {
      $this->session->sess_destroy();
      redirect('qlbh_controller/index');
    }

    public function dangxuat2()
    {
      $this->session->sess_destroy();
      $this->cart->destroy();
      redirect('qlbh_controller/index2');
    }
      
       public function viewthemUser()
       { 
        $this->load->model('qlbh_model');
        $id['nhanvien'] = $this->qlbh_model->getidNhanvien();
        $this->load->view('themUser_view',$id);
       }
    
     public function viewthemMathang()
       {
        $this->load->model('qlbh_model');
        $id['loaihang'] = $this->qlbh_model->getidLoaihang();
        $id['nhacc'] = $this->qlbh_model->getidNhacc();
        $this->load->view('themMathang_view',$id);
       }
     public function viewthemNhanvien()
       {
        $this->load->view('themNhanvien_view');
       }
       public function viewLienhe()
      {
        $this->load->view('contact_view');
        }

     public function viewGiohang()
       {
        $this->load->view('giohang_view');
       }
    public function viewthanhtoan()
      {
         $this->load->view('thanhtoan_view');
      }
           public function viewthemNhacc()
       {
        $this->load->model('qlbh_model');
        $id['nhacc'] = $this->qlbh_model->getidNhacc();
        $this->load->view('themNhacc_view',$id);
       }
          public function viewthemKhachhang()
       {
        $this->load->model('qlbh_model');
        $id['khachhang'] = $this->qlbh_model->getidKhachhang();
        $this->load->view('themKhachhang_view',$id);
       }







public function index2()
  {
            $this->form_validation->set_rules('username', 'Tài khoản', 'required');  
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required');

        if ($this->form_validation->run() == FALSE)
            {                                                                
            $this->load->view('loginGuest_view');                                   
            }
        else
              {
          $this->load->view('loginGuest_view');
                $username = $this->input->post('username');
                $password =  $this->input->post('password');
                if(isset($_POST['btndangnhap']))
                {
        $this->load->model('qlbh_model');
    $query = $this->qlbh_model->kiemtra_guests($username,$password);
    if ($query)
                  {   
                      $this->session->set_userdata( 'guestname',$username );
                     redirect('qlbh_controller/viewhome'); 
                  }
    else
    {
      echo '<script type="text/javascript">alert("Tài khoản hoặc Mật Khẩu không chính xác !")</script>';
    }
                  
                }
           
              }
           } 






	public function index()
	{
            $this->form_validation->set_rules('username', 'Tài khoản', 'required');  
            $this->form_validation->set_rules('password', 'Mật khẩu', 'required');

        if ($this->form_validation->run() == FALSE)
            {                                                                
            $this->load->view('loginUser_view');                                   
            }
        else
              {
   				$this->load->view('loginUser_view');
                $username = $this->input->post('username');
                $password =  $this->input->post('password');
                if(isset($_POST['btndangnhap']))
                {
      	$this->load->model('qlbh_model');
		$query = $this->qlbh_model->kiemtra_users($username,$password);
		if ($query)
                  {   
                      $this->session->set_userdata( 'username',$username );
                     redirect('qlbh_controller/dangnhap'); 
	                }
    else
    {
      echo '<script type="text/javascript">alert("Tài khoản hoặc Mật Khẩu không chính xác !")</script>';
    }
                  
                }
           
  	         	}
	         } 
  
    public function thongtinUser()
    {
      $this->load->model('qlbh_model');
      $user = $_SESSION['username'];
      $data['info'] = $this->qlbh_model->getIduser($user);
       foreach ($data['info'] as $value):
      $this->session->set_userdata( 'id_nhanvien',$value['id_nhanvien'] );
     endforeach;
     $tt['nv'] = $this->qlbh_model->thongtinUser();
     $this->load->view('thongtinUser_view',$tt);
    }
    public function thongtinGuest()
    {
      $this->load->model('qlbh_model');
      $user = $_SESSION['guestname'];
      $data['info'] = $this->qlbh_model->getIdguest($user);
       foreach ($data['info'] as $value):
      $this->session->set_userdata( 'id_khachhang',$value['id_khachhang'] );
     endforeach;
     $tt['kh'] = $this->qlbh_model->thongtinGuest();
     $this->load->view('thongtinGuest_view',$tt);
    }
    public function thongtinThanhtoan()
    {
      if(isset($_SESSION['guestname']))
      {
      $this->load->model('qlbh_model');
      $user = $_SESSION['guestname'];
      $data['info'] = $this->qlbh_model->getIdguest($user);
       foreach ($data['info'] as $value):
      $this->session->set_userdata( 'id_khachhang',$value['id_khachhang'] );
     endforeach;
     $tt['kh'] = $this->qlbh_model->thongtinGuest();
     $this->load->view('thanhtoan_view',$tt);
          }
     else {
      redirect('qlbh_controller/dangxuat2');
        }
    }









  public function taikhoan()
       {
        $this->load->model('qlbh_model');
        $listUser['list'] = $this->qlbh_model -> getallUser();
        $this->load->view('taikhoanUser_view',$listUser);
       }
  public function themUser()
  {
    $this->load->model('qlbh_model');
    $dataUser = $this->input -> post();
    $them = $this->qlbh_model->themUser($dataUser);
    
  }
  public function xoaUser()
  {
    $this->load->model('qlbh_model');
    $id = $this->uri->segment(3);
   $this->qlbh_model->xoaUser($id);
   redirect('qlbh_controller/taikhoan');
  }
  public function timkiemUser()
      {
        $timkiem = $this->input->post('timkiem');
        $this->load->model('qlbh_model');
       $data['list'] = $this->qlbh_model->timkiemUser($timkiem);
         $this->load->view('taikhoanUser_view',$data);
      }










  public function mathang()
  {
    $this->load->model('qlbh_model');
    $listHang['list'] = $this->qlbh_model->getallMathang(); 
    $this->load->view('mathang_view', $listHang);
  }
  public function themMathang()
  {
      $this->load->model('qlbh_model');
      $dataHang = $this->input->post();
      $this->qlbh_model->themMathang($dataHang);
      redirect('qlbh_controller/mathang');

  }
  public function suaMathang()
  {
      $id_hang = $this->uri->segment(3);
      $this->load->model('qlbh_model');
     $data['update'] = $this->qlbh_model->getbyIdhang($id_hang);
      $this->load->view('suaMathang_view', $data);
      if (isset($_POST['btnsuahang'])) {
         $data = $this->input->post();
         $this->qlbh_model->suaMathang($data, $id_hang);
        redirect('qlbh_controller/mathang');
    }
  }
  public function xoaMathang()
  {
    $id_hang = $this->uri->segment(3);
      $this->load->model('qlbh_model');
     $this->qlbh_model->xoaMathang($id_hang);
    redirect('qlbh_controller/mathang');
  }
  
    public function timkiemMathang()
      {
        $timkiem = $this->input->post('timkiem');
        $this->load->model('qlbh_model');
       $data['list'] = $this->qlbh_model->timkiem($timkiem);
         $this->load->view('mathang_view',$data);
      }











  public function nhanvien()
    {
      $this->load->model('qlbh_model');
      $listNv['list']= $this->qlbh_model->getallNhanvien();
      $this->load->view('nhanvien_view', $listNv);
    }
  public function themNhanvien()
   {
     $this->load->model('qlbh_model');
     $dataNv = $this->input->post();
     $this->qlbh_model->themNhanvien($dataNv);
    redirect('qlbh_controller/nhanvien');
   }
  public function suaNhanvien()
  {
     $id_nv = $this->uri->segment(3);
    $this->load->model('qlbh_model');
    $data['update'] = $this->qlbh_model->getbyIdnhanvien($id_nv);
    $this->load->view('suaNhanvien_view', $data);
    if (isset($_POST['btnsuanv'])) {
      $data= $this->input->post();
      $this->qlbh_model->suaNhanvien($data,$id_nv);
      redirect('qlbh_controller/nhanvien');
    }
  }
   public function suaNhanvien2()
  {
     $id_nv = $this->uri->segment(3);
    $this->load->model('qlbh_model');
      $data= $this->input->post();
      $this->qlbh_model->suaNhanvien($data,$id_nv);
      redirect('qlbh_controller/dangnhap');
  }
  public function xoaNhanvien()
  {
     $id_nv = $this->uri->segment(3);
    $this->load->model('qlbh_model');
    $this->qlbh_model->xoaNhanvien($id_nv);
    redirect('qlbh_controller/nhanvien');
  }
  public function capnhatNhanvien($id_nhanvien)
  {
    $this->load->model('qlbh_model');
      $data = array(
                'hoten' => $this->input->post('hoten'),
                'gioitinh' => $this->input->post('gioitinh'),
                'ngaysinh' => $this->input->post('ngaysinh'),
                'diachi' => $this->input->post('diachi'),
                'dienthoai' => $this->input->post('dienthoai'),
                'email' => $this->input->post('email')

            );
      $this->qlbh_model->capnhatNhanvien($data,$id_nhanvien);
      redirect('qlbh_controller/thongtinUser');  
  }

  






  public function hoadon()
    {
      $this->load->model('qlbh_model');
      $listHd['list'] = $this->qlbh_model->getallHoadon();
      $this->load->view('hoadon_view', $listHd);
    }
  public function capnhatHoadon()
    {
      $id_donhang = $this->uri->segment(3);
    $this->load->model('qlbh_model');
    $data['update'] = $this->qlbh_model->getbyIddonhang($id_donhang);
    $this->load->view('suaHoadon_view', $data);
    if (isset($_POST['btnsua'])) {
      $data= $this->input->post();
      $this->qlbh_model->capnhatHoadon($data,$id_donhang);
      redirect('qlbh_controller/hoadon');
         }
    }
    public function chitietHoadon($id_donhang)
    {
      $this->load->model('qlbh_model');
      $listChitiet['list'] = $this->qlbh_model->getChitiet($id_donhang);
      $this->load->view('chitiet_view', $listChitiet);
    }
    public function chitietHoadonCuatoi($id_donhang)
    {
      $this->load->model('qlbh_model');
      $listChitiet['list'] = $this->qlbh_model->getChitiet($id_donhang);
      $this->load->view('chitietCuatoi_view', $listChitiet);
    }

  public function timkiemHoadon()
      {
        $timkiem = $this->input->post('timkiem');
        $this->load->model('qlbh_model');
       $data['list'] = $this->qlbh_model->timkiemHoadon($timkiem);
         $this->load->view('hoadon_view',$data);
      }





//-----------------------------------------------------------------------------------------







     public function viewhome()
       {
        
        $this->load->model('qlbh_model');
        $data['hang'] = $this->qlbh_model->viewhome();
        $data['loaihang'] = $this->qlbh_model->getLoaihang();
         $this->load->view('home_view',$data);
       
       }

       public function timkiem()
      {
        $tenhang = $this->input->post('timkiem');
        $this->load->model('qlbh_model');
        $data['hang'] = $this->qlbh_model->timkiem($tenhang);
        $data['loaihang'] = $this->qlbh_model->getLoaihang();
         $this->load->view('home_view',$data);
      }


      public function timLoaihang($id_loaihang)
      {
        $this->load->model('qlbh_model');
        $data['hang'] = $this->qlbh_model->timLoaihang($id_loaihang);
        $data['loaihang'] = $this->qlbh_model->getLoaihang();
        $this->load->view('home_view', $data);

      }
      public function donhangCuatoi()
      {
        
      $this->load->model('qlbh_model');
      $user = $_SESSION['guestname'];
      $data['info'] = $this->qlbh_model->getIdguest($user);
     foreach ($data['info'] as $value):
      $this->session->set_userdata( 'id_khachhang',$value['id_khachhang'] );
     endforeach;
        $data['hoadon'] = $this->qlbh_model->donhangCuatoi();
        $this->load->view('hoadonCuatoi_view', $data);      
      }


    public function thanhtoan()
      {
        
     $this->load->model('qlbh_model');
     $data = array(
                'id_khachhang' => $_SESSION['id_khachhang'],
                'tongtien' => $this->input->post('tongtien'),
                'noigiaohang' => $this->input->post('diachi')

            );
     $id = $this->qlbh_model->themHoadon($data);
     $dataGiohang = $this->cart->contents();
     foreach ($dataGiohang as $value) {
      $cart = array(
                'id_donhang' => $id,
                'id_mathang' => $value['id'],
                'tenhang' => $value['name'],
                'soluong' => $value['qty'],
                'hinhanh' => $value['anh'],
                'giahang' => $value['price']

            );
       $this->qlbh_model->themChitiet($cart);
  
    }
    
    redirect('qlbh_controller/viewhome');
            

         
      }
      











 public function themGiohang()
        {
            $insert_data = array(
                'id' => $this->input->post('id'),
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'qty' => 1,
                'anh' => $this->input->post('anh')
            );
        $this->cart->insert($insert_data);
        redirect('qlbh_controller/viewhome');
        }
  public function huyGiohang()
        {
            $this->cart->destroy();
            redirect('qlbh_controller/viewhome');
        }
  public function xoaGiohang($rowid)
        {
                    $data = array(
                        'rowid' => $rowid,
                        'qty' => 0
                    );
                $this->cart->update($data);
            redirect('qlbh_controller/viewhome');
            
        }
  public function suaGiohang()
        {
            $cart_info = $_POST['cart'] ;
            foreach( $cart_info as $id => $cart)
                {
                    $rowid = $cart['rowid'];
                    $qty = $cart['qty'];
                    
                    $data = array(
                    'rowid' => $rowid,
                    'qty' => $qty
                    );       
                    $this->cart->update($data);
                }

            redirect('qlbh_controller/viewGiohang');
              
        }



// nha cung cap

  public function nhacc()
  {
    $this->load->model('qlbh_model');
    $listCc['list'] = $this->qlbh_model->getallNhacc(); 
    $this->load->view('nhaCungcap_view', $listCc);
  }
   public function themNhacc()
   {
     $this->load->model('qlbh_model');
     $dataCc = $this->input->post();
     $this->qlbh_model->themNhacc($dataCc);
    redirect('qlbh_controller/nhacc');
   }
    public function suaNhacc()
  {
     $id_Cc = $this->uri->segment(3);
    $this->load->model('qlbh_model');
    $dataCc['update'] = $this->qlbh_model->getbyIdNhacc($id_Cc);
    $this->load->view('suaNhacc_view', $dataCc);
    if (isset($_POST['btnsuaNhacc'])) {
      $dataCc= $this->input->post();
      $this->qlbh_model->suaNhacc($dataCc,$id_Cc);
      redirect('qlbh_controller/nhacc');
    }
  }
  public function xoaNhacc()
  {
    $id_Cc = $this->uri->segment(3);
      $this->load->model('qlbh_model');
     $this->qlbh_model->xoaNhacc($id_Cc);
    redirect('qlbh_controller/nhacc');
  }

  public function timNhacc()
      {
        $timkiem = $this->input->post('timkiem');
        $this->load->model('qlbh_model');
       $data['list'] = $this->qlbh_model->timNhacc($timkiem);
         $this->load->view('nhaCungcap_view',$data);
      }




//khach hang

public function khachhang()
  {
    $this->load->model('qlbh_model');
    $listKh['list'] = $this->qlbh_model->getallKhachhang(); 
    $this->load->view('khachHang_view', $listKh);
  }
 public function themKhachhang()
   {
     $this->load->model('qlbh_model'); 
     $dataKh = $this->input->post();
     $this->qlbh_model->themKhachhang($dataKh);
    redirect('qlbh_controller/khachhang');
   }
   public function themKhachhang2()
   {
     $this->load->model('qlbh_model');
     $dataKh = $this->input->post();
     $this->qlbh_model->themKhachhang($dataKh);
    redirect('qlbh_controller/index2');
   }
  
  public function suaKhachhang2()
  {
     $id_Kh = $this->uri->segment(3);
    $this->load->model('qlbh_model');
      $dataKh= $this->input->post();
      $this->qlbh_model->suaKhachhang($dataKh,$id_Kh);
      redirect('qlbh_controller/viewhome');
    
  }

  public function timkiemKhachhang()
      {
        $timkiem = $this->input->post('timkiem');
        $this->load->model('qlbh_model');
       $data['list'] = $this->qlbh_model->timkiemKhachhang($timkiem);
         $this->load->view('khachHang_view',$data);
      }








  public function viewLoaihang()
       {
        
        $this->load->model('qlbh_model');
        $data['loaihang'] = $this->qlbh_model->getLoaihang();
         $this->load->view('loaihang_view',$data);
       
       }
  public function viewthemLoaihang()
  {
    $this->load->view('themLoaihang_view');
  }
  public function themLoaihang()
  {
    $this->load->model('qlbh_model');
    $data = $this->input->post();
    $this->qlbh_model->themLoaihang($data);
    redirect('qlbh_controller/viewLoaihang');
  }
  public function xoaLoaihang()
  {
    $this->load->model('qlbh_model');
    $id = $this->uri->segment(3);
   $this->qlbh_model->xoaLoaihang($id);
   redirect('qlbh_controller/viewLoaihang');
  }


}

/* End of file qlns_controller.php */
/* Location: ./application/controllers/qlns_controller.php */