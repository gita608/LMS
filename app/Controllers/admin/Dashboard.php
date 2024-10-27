<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index(): string
    {   
        $this->data['title'] = 'Dashboard';
        $this->data['page_name'] = 'dashboard/index';
        return view('admin/index',$this->data);
    }
}
