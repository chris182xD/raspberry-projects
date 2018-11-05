<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Raspberrypi extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('raspberry/index');
	}
	public function monitoreo()
	{
		$this->load->view('raspberry/monitoreo');
	}
	public function encenderled()
	{
		

		$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 3 out");
14         if(isset($_GET['on'])){
15                 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 3 1");
16                 echo "LED is on";
17         }
18         else if(isset($_GET['off'])){
19                 $gpio_off = shell_exec("/usr/local/bin/gpio -g write 3 0");
20                 echo "LED is off";
21         }
	}
}
