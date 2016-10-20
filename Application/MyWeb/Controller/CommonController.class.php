<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
   public function _initialize()
   {
        layout('Layout/public');
        $this->has_login()->menu()->newsType();

   }

       public function menu()
    {
        $menu = C('adminmenu');
        $this->assign('menu', $menu);
        return $this;
    }

    public function newsType()
    {
        $types = C('newstype');
        $this->assign('types',$types);
        return $this;
    }

    public function has_login()
    {
        if (session('?username')) {

            return $this;
        } else {
            $this->redirect('Login/index');
        }
    }

}