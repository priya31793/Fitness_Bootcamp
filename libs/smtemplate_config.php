/**
 * @file
 * Configuration file for the SMTemplate class
 */
  require_once('smarty/Smarty.class.php');
require_once('smtemplate_config.php');
 
class SMTemplate{
     
    private $_smarty;
     
    function __construct(){
        $this->_smarty = new Smarty();
         
        global $smtemplate_config;
        $this->_smarty->template_dir = $smtemplate_config['template_dir'];
        $this->_smarty->compile_dir = $smtemplate_config['compile_dir'];
        $this->_smarty->cache_dir = $smtemplate_config['cache_dir'];
        $this->_smarty->configs_dir = $smtemplate_config['configs_dir'];
    }
}
$smtemplate_config = 
    array(
        'template_dir' => 'views/',
        'compile_dir' => 'lib/smarty/templates_c/',
        'cache_dir' => 'lib/smarty/cache/',
        'configs_dir' => 'lib/smarty/configs/',
        );
		
		
		