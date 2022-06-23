<?php 

namespace QuickHelp\UsersLoader;

use SomaGestao\Base\AncillaryClass;

class UsersLoader extends AncillaryClass {
    
    public function load($user)
    {
        $CI = self::getCI();
        $CI->load->model('UsersModel');
        $data = $CI->UsersModel->getUser($user->id);

        
    }

}