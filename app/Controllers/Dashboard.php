<?php
	
	namespace App\Controllers;

	use App\Core\Controller;
	use App\Liblaries\Sesion;
	use App\Models\Siswa;
	use App\Models\Angkatan;
	use App\Models\Kelas;
	use App\Models\User;
	use App\Core\Request;

	Class Dashboard extends Controller
	{
		public function __construct() {
			Sesion::cekBelum();
		}

		public function index() {
			$siswa = new Siswa;
			$angkatan = new Angkatan;
			$kelas = new Kelas;
			$user = new User;
			$dsiswa = $siswa->all();
			$dangkatan = $angkatan->all();
			$dkelas = $kelas->all();
			$duser = $user->all();

			$data['title'] = 'Role';
			$data['dsiswa'] = $siswa->result_array($dsiswa);
			$data['dangkatan'] = $angkatan->result_array($dangkatan);
			$data['dkelas'] = $kelas->result_array($dkelas);
			$data['duser'] = $user->result_array($duser);

			view('page.dashboard', $data);
		}
	}