<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestDonation extends CI_Controller {

	public function index()
	{
		$this->load->view('donation/guestDonationForm');
	}

    public function success(){
        $this->load->view('donation/donationSuccess');
    }

}

?>
