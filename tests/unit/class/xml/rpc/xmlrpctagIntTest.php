<?php
require_once(dirname(__FILE__).'/../../../init_new.php');

/**
* PHPUnit special settings :
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/
class XoopsXmlRpcIntTest extends \PHPUnit_Framework_TestCase
{
    protected $myclass = 'XoopsXmlRpcInt';
    
    public function test___construct()
	{
		$value = 1;
		$x = new $this->myclass($value);
		$this->assertInstanceof($this->myclass, $x);
		$this->assertInstanceof('XoopsXmlRpcTag', $x);
	}

    public function test_render()
    {
		$value = 71;
		$instance = new $this->myclass($value);
        
        $result = $instance->render();
        $this->assertSame('<value><int>' . $value . '</int></value>', $result);
    }
}
