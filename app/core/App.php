<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() 
    {
        $url = $this->parseURL();

        // Controller
        if($url == NULL){
            $url = [$this->controller];
        }

        // Mencari file di folder controllers
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            // Jika ada, maka controller akan diubah sesuai dengan url
			$this->controller = $url[0] ;
            // Unset url index ke 0 jadi hilang
			unset($url[0]);
		}

        // Memanggil controller yang sudah diubah
        require_once '../app/controllers/' . $this->controller . '.php';
        // Membuat objek dari controller
		$this->controller = new $this->controller;

        // Method 

        // Cek apakah ada method di url index ke 1
        if(isset($url[1])){
            // Cek apakah method ada di controller
			if(method_exists($this->controller, $url[1])){
                // Jika ada, maka method akan diubah sesuai dengan url
				$this->method = $url[1];
                // Unset url index ke 1 jadi hilang
				unset($url[1]);
			}
		}

        // Params

        // Cek apakah ada params di url
		if(!empty($url)){
            // Jika ada, maka params akan diubah sesuai dengan url
			$this->params = array_values($url);
		}

        // Jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);



    }

    public function parseURL()
    {
		if( isset($_GET['url'])){
            // Membersihkan / di akhir url
			$url = rtrim($_GET['url'], '/');
            // Membersihkan url dari karakter aneh
			$url = filter_var($url, FILTER_SANITIZE_URL);
            // Memecah url berdasarkan / menjadi array
			$url = explode('/',$url);
			return $url;
		}
	}
}