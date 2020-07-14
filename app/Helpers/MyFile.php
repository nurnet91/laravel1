<?php

namespace App\Helpers;
use \File;

class MyFile{

	public $url;

    function __construct($modelfile, $path = '', $file = '', $addon = ''){

    	$this->url = $modelfile;

        if (!empty($file)) {
	        $file_name = $addon.$file->getClientOriginalName();
	        if($file->move($path, $file_name)){
	        	$this->delete();
		        $this->url = $path.$file_name;
	        }
        }

    }
    public function delete(){
    	$file = $this->url;
    	if (!empty($file) AND File::exists($file)) {
            File::delete($file);
        }
    }
}