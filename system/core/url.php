<?php
/**
*
*/
class url
{
    private $behavior = [];
    function __construct()
    {
        $this->set_behavior();
    }
    private function set_behavior()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $this->behavior = explode('/',trim($_SERVER['PATH_INFO'], '/'));
        }
    }
    public function get_behavior($arg = 'param')
    {
        switch ($arg) {
            case 'controller':
                if (isset($this->behavior[0])) {
                    return $this->behavior[0];
                }
                return null;
                break;
            case 'method':
                if (isset($this->behavior[1])) {
                    return $this->behavior[1];
                }
                return null;
                break;
            default:
                if (isset($this->behavior[2])) {
                        return array_slice($this->behavior, 2);
                }
                return null;
                break;
        }
    }
}


 ?>