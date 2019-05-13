<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convert extends CI_Controller 
{
	private function Cipher($ch, $key)
	{
		if (!ctype_alpha($ch))
			return $ch;
			$offset = ord(ctype_upper($ch) ? 'A' : 'a');
			return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
	}

	private function Encipher($input, $key)
	{
		$output = "";
		$inputArr = str_split($input);
		foreach ($inputArr as $ch)
			$output .= $this->Cipher($ch, $key);
		return $output;
	}

	private function stringBinary($text){
		$bin = [];
		for($i=0; strlen($text)>$i; $i++)
			$bin[] = decbin(ord($text[$i]));
		return implode(' ',$bin);
	}

	private function binaryString($bin){
		$text = [];
		$bin = explode(" ", $bin);
		for($i=0; count($bin)>$i; $i++)
			$text[] = chr(bindec($bin[$i]));	
		return implode($text);
	}

	private function loadView($title, $result, $caption, $main = 'main')
	{
		$data['title'] = $title;
		$data['menu'] = $this->db->get('tbl_menu')->result_array();
		$data['submenu'] = $this->db->get('tbl_submenu')->result_array();
		$data['result'] = $result;
		$this->load->view('convert/header', $data);
		$this->load->view('convert/sidebar', $data);
		$this->load->view('convert/'.$main, $data);
		$this->load->view('caption/'.$caption, $data);
		$this->load->view('convert/footer', $data);
	}
	
	public function decimalBinaryConverter()
	{
		$result = decbin($this->input->post('input'));
		$this->loadView("Decimal to Binary Converter", $result, 'decbin');
	}
	public function decimalHexaConverter()
	{	
		$result = strtoupper(dechex($this->input->post('input')));
		$this->loadView("Decimal to Hexadecimal Converter", $result, 'dechex');
	}
	public function decimalOctalConverter()
	{
		$result = decoct($this->input->post('input'));
		$this->loadView("Decimal to Octal Converter", $result, 'decoct');
	}
	public function binaryDecimalConverter()
	{
		$result = base_convert($this->input->post('input'), 2, 10);
		$this->loadView("Binary to Decimal Converter", $result, 'bindec');
	}
	public function binaryOctalConverter()
	{
		$result = base_convert($this->input->post('input'), 2, 8);
		$this->loadView("Binary to Octal Converter", $result, 'binoct');
	}
	public function binaryHexaConverter()
	{
		$result = strtoupper(base_convert($this->input->post('input'), 2, 16));
		$this->loadView("Binary to Hexadecimal Converter", $result, 'binoct');
	}
	public function octalDecimalConverter()
	{
		$result = base_convert($this->input->post('input'), 8, 10);
		$this->loadView("Octal to Decimal Converter", $result, 'octdec');
	}
	public function octalBinaryConverter()
	{
		$result = base_convert($this->input->post('input'), 8, 2);
		$this->loadView("Octal to Binary Converter", $result, 'octbin');
	}
	public function octalHexaConverter()
	{
		$result = strtoupper(base_convert($this->input->post('input'), 8, 16));
		$this->loadView("Octal to Hexadecimal Converter", $result, 'octhex');
	}
	public function hexaDecimalConverter()
	{
		$result = base_convert($this->input->post('input'), 16, 10);
		$this->loadView("Hexadecimal to Decimal Converter", $result, 'hexdec');
	}
	public function hexaBinaryConverter()
	{
		$result = base_convert($this->input->post('input'), 16, 2);
		$this->loadView("Hexadecimal to Binary Converter", $result, 'hexbin');
	}
	public function hexaOctalConverter()
	{
		$result = base_convert($this->input->post('input'), 16, 8);
		$this->loadView("Hexadecimal to Octal Converter", $result, 'hexoct');
	}
	public function stringBinaryConverter()
	{
		$result = $this->stringBinary($this->input->post('input'));
		$this->loadView("String to Binary Converter", $result, 'strbin');
	}
	public function binaryStringConverter()
	{
		$result = $this->binaryString($this->input->post('input'));
		$this->loadView("Binary to String Converter", $result, 'binstr');
	}
	public function caesarCipher()
	{
		$key = $this->input->post('key');
		$delimiter = $this->input->post('delimiter');
		$text = $this->input->post('text');
		$key  = empty($_POST['key']) ? 2 : $_POST['key'];
  		$delimiter = empty($_POST['delimiter']) ? ' ' : $_POST['delimiter'];
  		$result = $this->Encipher(str_replace(" ", $delimiter, $text), $key);
		$this->loadView("Caesar Cipher Encryption", $result, 'cipher', 'caesarview');
	}
	public function md5HashGenerator()
	{
		$result = md5($this->input->post('input'));
		$this->loadView("MD5 Hash Generator", $result, 'md5');
	}
	public function sha1HashGenerator()
	{
		$result = sha1($this->input->post('input'));
		$this->loadView("SHA1 Hash Generator", $result, 'sha1');
	}
	public function base64Encode()
	{
		$result = base64_encode($this->input->post('input'));
		$this->loadView("Base64 Encode", $result, 'base64encode');
	}
	public function base64Decode()
	{
		$result = base64_decode($this->input->post('input'));
		$this->loadView("Base64 Decode", $result, 'base64decode');
	}
}
