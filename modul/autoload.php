<?php
function autoload($className)
{
  if (file_exist("./{$className}".php)){
    require "./{$className}.php";
  }
}
spl_autoload_register("autoload");
?>
