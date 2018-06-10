<?php
class Base_controller extends CI_controller{
public function __construct(){
  parent::__construct();
  $this->load->model('BaseModel','bm');
  $this->load->helper(array('form'));
  $this->load->library('session');
  $this->load->library('pagination');
}



public function admin_dashboard(){
  $admin_email = $this->session->userdata('admin_email');
  if(empty($admin_email))
    redirect('admin');
  extract($_POST);
  if(isset($blog_submit) && empty($youtube_link)){
    $config['upload_path'] = "assets/uploads/";
    $config['allowed_types'] = "jpg|jpeg|png|bmp|gif";
    $config['file_name'] = rand(10000,99999);
    $this->load->library('upload',$config);
    if($this->upload->do_upload('blog_file')){
      $form_data = array(
        'blog_title'       => $blog_title,
        'blog_type'        => $blog_type,
        'blog_cat_name'    => $blog_cat_name,
        'tag_name'         => $tag_name,
        'blog_content'     => $blog_content,
        'meta_description' => $meta_description,
        'meta_keywords'    => $meta_keywords,
        'meta_author'      => $meta_author,
        'youtube_link'     => '',
        'blog_file'        => $this->upload->data('file_name')
      );
    $resp=$this->bm->common_insert($form_data,'admin_blogpost');
    redirect('dashboard');
  }else{
    $data['error'] = $this->upload->display_errors();
    print_r($data);
  }
}elseif(isset($blog_submit) && !empty($youtube_link)){

  $form_data = array(
    'blog_title'       => $blog_title,
    'blog_type'        => $blog_type,
    'blog_cat_name'    => $blog_cat_name,
    'tag_name'         => $tag_name,
    'blog_content'     => $blog_content,
    'meta_description' => $meta_description,
    'meta_keywords'    => $meta_keywords,
    'meta_author'      => $meta_author,
    'youtube_link'     => $youtube_link,
    'blog_file'        => ''
  );
$resp=$this->bm->common_insert($form_data,'admin_blogpost');
redirect('dashboard');

}elseif(isset($update_seo)){
  $form_data = array(
    'description' => $seo_description,
    'keywords'    => $seo_keywords,
    'author'      => $seo_author
  );
  $resp=$this->bm->common_update($form_data,'home_seo');
  redirect('dashboard');
}elseif(isset($blog_delete)){
  $form_data = array(
    'blog_title'=>$blog_title
  );
  $resp=$this->bm->common_update($form_data,'admin_blogpost');
  redirect('dashboard');
}else{
  $resp['data']=$this->bm->common_select('','admin_blogpost');
  $resp['seo']=$this->bm->common_select('','home_seo');


  $this->load->view('admin/dashboard.php',$resp);

}
}


public function admin(){
  $admin_email = $this->session->userdata('admin_email');
  if(!empty($admin_email)){
    redirect('dashboard');
  }

  extract($_POST);
  if(isset($login_button)){
    print_r($_POST);
    $form_data = array(
      'email'    => $email,
      'password' => $password
    );

    $resp=$this->bm->admin_login($form_data,'admin_login');
    if($resp==1){
      $set_session = array(
         'admin_email' => $email
     );
     $this->session->set_userdata($set_session);
     redirect('Base_controller/admin_dashboard');
     // header('location:http://monetimes.com/indexBase_controller');
    }
  }else{
  $this->load->view('admin/index.php');
}
}

public function index(){
  // $resp['data']=$this->bm->common_select('','admin_blogpost');
  // $resp['seo']=$this->bm->common_select('','home_seo');
  // $resp['related']=$this->bm->related_contents($this->uri->segment(3),'blog_id','DESC','admin_blogpost');

   $config['base_url'] =  base_url()."index.php/Base_controller/index";
   $config['total_rows']=$this->bm->count_all('admin_blogpost');
   $config['per_page'] = 5;
   $config['attributes'] = array('class' => 'plinks');
   $config['use_page_numbers'] = true;
   $config['cur_tag_open'] = "<b class='curpage'>";
   $config['cur_tag_close'] = "</b>";
   $config['next_link'] = ">>";
   $config['prev_link'] = "<<";

   $this->pagination->initialize($config);
   $links = $this->pagination->create_links();

  $seg = $this->uri->segment(3);
    if(empty($seg))
      $si = 0;
    else
      $si = $seg;
  $rs = $this->bm->limited_records($config['per_page'],$si,'admin_blogpost');

  $resp = array(
   'data' => $rs,
   'paginations' => $links,
   'seo'=>$this->bm->common_select('','home_seo'),
   'related'=>$this->bm->related_contents($this->uri->segment(3),'blog_id','DESC','admin_blogpost')
 );

  $this->load->view('index.php',$resp);
}

public function single_content(){
  $cond = array(
    'blog_id' => $this->uri->segment(3)
  );
  $resp['data']   =$this->bm->common_select($cond,'admin_blogpost');
  $resp['related']=$this->bm->related_contents($this->uri->segment(3),'blog_id','DESC','admin_blogpost');
  $this->load->view('single.php',$resp);
}

public function page_not_found(){
  $this->load->view('404.php');
}

}

?>
