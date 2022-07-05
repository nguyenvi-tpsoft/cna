<?php

namespace App\Http\Controllers;





class AdminController extends Controller
{

    public function dieuhuong()
    {
        echo 'hello';
        // header('Location:../../../public/backend/index.php');
        return redirect()->to('public/backend/index.php')->send();
    }
}
