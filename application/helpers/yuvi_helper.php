<?php 

function is_logged_in()
{
	$ci = get_instance();
	// jika session email tidak ada kembalikan ke auth
	if(!$ci->session->userdata('email')) {
		redirect('auth');
	} else {
		// deklarasi session role_id
		$role_id = $ci->session->userdata('role_id');
		// deklarasi menu yang ingin di tuju dari url
		$menu = $ci->uri->segment(1);

		// select dari user menu , menu = menu yang ada dari url
		$queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
		// deklarasi id dari user menu yang telah di query di atas
		$menu_id = $queryMenu['id'];

		// select * from user_access_menu where role_id sama dgn session dan menu id sa,a dengan id menu nya
		$userAccess = $ci->db->get_where('user_access_menu',[ 
			'role_id' => $role_id,
			'menu_id' => $menu_id
		]);
				if($userAccess->num_rows() < 1) {
					redirect('auth/blocked');
				}
	}

	function check_access($role_id, $menu_id){
		$ci = get_instance();

		$ci->db->where('role_id', $role_id);
		$ci->db->where('menu_id', $menu_id);
		$result = $ci->db->get('user_access_menu');

		if($result->num_rows() > 0) {
			return "checked='checked'";
		}
	}
}
