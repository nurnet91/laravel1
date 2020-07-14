<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController {
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public $bredcrumb = [];
    public $title = '';
    public $action = 'test';
    public function getBrend($bred = false){
        if ($bred) {
            $this->bredcrumb[] = ['link' => $this->action, 'title' => $this->title];
        }
    	if (!empty($this->bredcrumb) AND empty($this->title)) {
            $i = 0;
    		foreach ($this->bredcrumb as $key => $value) {
                if (!array_key_exists('link', $value)) {
                    $this->title = isset($value['title']) ? $value['title'] : '';
                }
    		}
    	}
    	return [
            'bredcrumb' => $this->bredcrumb, 
            'title' => $this->title, 
            'action' => $this->action, 
            'count_message' => $this->getCountMessage()
        ];
    }
    public function getStatus($value=''){
        return !empty($value) ? 1 : 0;
    }
    public function getCountMessage(){
        return \App\Models\Message::where('view', 0)->count();
    }
}
