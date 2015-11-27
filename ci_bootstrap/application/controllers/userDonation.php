<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserDonation extends CI_Controller {

	public function index()
	{
		$this->load->view('donation/userDonationForm');
	}

    public function success(){
        $this->load->view('donation/donationSuccess');
    }

}

?>
