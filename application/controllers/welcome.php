<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['tagline']=$this->model->tagline();
		$this->load->view('header',$data);
		$this->load->view('menu');
		$this->dashboard();
		$this->load->view('footer');
	}
	
	public function dashboard()
	{
		// JUMLAH KAMERA
		$jumlahkameraaktif=0;
		$jumlahkameradeaktif=0;
		$kamera1x='11d6b:0002';
		// $kamera2x=shell_exec("lsusb | grep 1d6b:0002 | awk '{print $6}'");
		// $kamera3x=shell_exec("lsusb | grep 1d6b:0002 | awk '{print $6}'");
		// $kamera4x=shell_exec("lsusb | grep 1d6b:0002 | awk '{print $6}'");
		$kamera1='11d6b:0002';
		// $kamera2='12d1:1001';
		// $kamera3='12d1:1001';
		// $kamera4='12d1:1001';
		if($kamera1x==$kamera1){
				$jumlahkameraaktif=$jumlahkameraaktif+1;
			}
			else{
				$jumlahkameradeaktif=$jumlahkameradeaktif+1;
			}
		if($kamera1x==$kamera1){
				$jumlahkameraaktif=$jumlahkameraaktif+1;
			}
			else{
				$jumlahkameradeaktif=$jumlahkameradeaktif+1;
			}
		if($kamera1x==$kamera1){
				$jumlahkameraaktif=$jumlahkameraaktif+1;
			}
			else{
				$jumlahkameradeaktif=$jumlahkameradeaktif+1;
			}
		if($kamera1x==$kamera1){
				$jumlahkameraaktif=$jumlahkameraaktif+1;
			}
			else{
				$jumlahkameradeaktif=$jumlahkameradeaktif+1;
			}
		$data['jumlahkameraaktif']=$jumlahkameraaktif;
		$data['jumlahkameradeaktif']=$jumlahkameradeaktif;
		// END JUMLAH KAMERA
		// INTERNET AKSES
		$internetx='1';
		$internety='2';
		// $internet=shell_exec("ping 8.8.8.8");
		if($internetx==$internety){
				$data['internet']='Yes';
			}
			else{
				$data['internet']='No';
			}
		// END INTERNET AKSES
		// DEVICE0930:6545
			$diskx=shell_exec("lsusb | grep 0930:6545 | awk '{print $6}'");
			$disky='0930:6545 ';
			$jumlahdisk=0;
			if($diskx==$disky){
				$jumlahdisk=$jumlahdisk+1;
			}
			$data['jumlahdisk']=$jumlahdisk;
		// END DEVICE

		//MEMORY
		$total=shell_exec("free | grep Mem: | awk '{print $2}'");
		$used=shell_exec("free | grep Mem: | awk '{print $3}'");
		$free=shell_exec("free | grep Mem: | awk '{print $4}'");
		$data['free']=$free;
		$data['used']=$used;
		$data['total']=$total;
		//ENDMEMORY

		//UPTIME
		$uptime=shell_exec("cat /proc/uptime | awk '{print $1}'");
		$data['seconds']=$uptime%60;
		$data['minutes']=$uptime/60%60;
		$data['hours']=$uptime/60/60%24;
		//END UPTIME


		//ENDUPTIME
		//INFO
		$data['board']=shell_exec("cat /proc/cpuinfo | grep system | awk '{print $4,$5,$6,$7.$8}'");
		$data['machine']=shell_exec("cat /proc/cpuinfo | grep machine | awk '{print $4,$5}'");
		$data['cpumodel']=shell_exec("cat /proc/cpuinfo | grep cpu | awk '{print $4,$5,$6}'");
		
		//END INFOdf | grep /dev/sda1 | awk '{print $3,$4,$5}'

		$dtotal=shell_exec("df | grep /dev/sda1 | awk '{print $4}'");
		$dused=shell_exec("df | grep /dev/sda1 | awk '{print $3}'");
		$data['dused']=$dused;
		$data['dtotal']=$dtotal;

		$this->load->view('content/dashboard',$data);
	}
	
	public function camera()
	{
		$data['kamera']=$this->model->kamera();
		$this->load->view('content/camera',$data);
		$this->post_log('Ganang','Melihat menu kamera','1');
	}
	
	public function storage($id=NULL)
	{
		if($id==NULL){
		$data['post'] = $this->model->get_storage_table();
		$this->load->view('content/storage', $data);
		$this->post_log('Ganang','Melihat menu storage','1');
		}else{
			$data['id']=$id;
			$this->load->view('content/storageview', $data);
		}
	}
	
	
	public function log()
	{
		//  $jml = $this->db->get('log');

		// //pengaturan pagination
		//  $config['base_url'] = base_url().'index.php/welcome/log/';
		//  $config['total_rows'] = $jml->num_rows();
		//  $config['per_page'] = '3';
		//  $config['first_page'] = 'Awal';
		//  $config['last_page'] = 'Akhir';
		//  $config['next_page'] = '&laquo;';
		//  $config['prev_page'] = '&raquo;';

		// //inisialisasi config
		//  $this->pagination->initialize($config);

		// //buat pagination
		//  $data['halaman'] = $this->pagination->create_links();

		// //tamplikan data
		//  $data['post'] = $this->model->get_post_pagi($config['per_page'], $id);
		//  $data['id']= $id;

		$data['post'] = $this->model->get_log_table();
		$this->load->view('content/log', $data);
		$this->post_log('Ganang','Melihat menu log','1');
	}
	
	public function post_log($user,$aktifitas,$status)
	{
		$this->model->insert_log($user,$aktifitas,$status);
	}
	public function setting($aksi=NULL,$id=NULL)
	{
		if($aksi=='jadwal'){
			$data['jam'] = $jam =$this->input->post('jam');
			$data['menit'] = $menit =  $this->input->post('menit');
			$this->model->backup($data);
			$this->post_log('Ganang','Mengkonfigurasi jadwal backup','1');
			shell_exec("/etc/init.d/cron stop | echo '".$jam." ".$menit." * * * sh /www/script/run.sh' >> /etc/crontabs/root | /etc/init.d/cron enable | /etc/init.d/cron start");
			redirect('');

		}
		
		if($aksi=='tagline'){
			$data['tagline'] = $jam =$this->input->post('tagline');
			$this->model->tagline($data);
			$this->post_log('Ganang','Mengkonfigurasi jadwal backup','1');
			redirect('');

		}

		if($aksi=='settingkamera'){
			if ($this->input->post('submit')) {
				$data['nama'] = $jam =$this->input->post('nama');
				$data['alamat'] = $menit =  $this->input->post('alamat');
				$data['ip'] = $menit =  $this->input->post('ip');
				$this->model->kamera($id,$data);
				$this->post_log('Ganang','Mengedit konfigurasi kamera','1');
			}else{
				$data['kamera']=$this->model->kamera($id);
				$this->load->view('content/settingkamera',$data);
			}
		}else{
			$data['tagline']=$this->model->tagline();
			$data['web']=$this->model->backup();
			$data['kamera']=$this->model->kamera();
			$this->load->view('content/setting',$data);
		}
	}
	
	public function about()
	{
		$this->load->view('content/about');
	}
	
	public function help()
	{
		$this->load->view('content/help');
	}
	
	public function stream($data)
	{
		redirect('http://'.$data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */