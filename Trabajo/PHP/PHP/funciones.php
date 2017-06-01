<?php


function getRealIP() {
    if (isset($_SERVER)) {

        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            return $_SERVER["HTTP_X_FORWARDED_FOR"];
        
        if (isset($_SERVER["HTTP_CLIENT_IP"]))
            return $_SERVER["HTTP_CLIENT_IP"];

        return $_SERVER["REMOTE_ADDR"];
    }

    if (getenv('HTTP_X_FORWARDED_FOR'))
        return getenv('HTTP_X_FORWARDED_FOR');

    if (getenv('HTTP_CLIENT_IP'))
        return getenv('HTTP_CLIENT_IP');

    return getenv('REMOTE_ADDR');
}





 
/**
 * Funcion que devuelve un array con los valores:
 *  os => sistema operativo
 *  browser => navegador
 *  version => version del navegador
 */
function detect()
{
    $browser=array("MSIE","MOZILLA","NETSCAPE","FIREFOX","SAFARI","CHROME","EDGE","OPR","WOW64","CHROMIUM");
    $os=array("WIN","MAC","LINUX","ANDROID","IPHONE","WINDOWS");
 
    # definimos unos valores por defecto para el navegador y el sistema operativo
    $info['browser'] = "OTHER";
    $info['os'] = "OTHER";
 
    # buscamos el navegador con su sistema operativo
    foreach($browser as $parent)
    {
        $s = strpos(strtoupper($_SERVER['HTTP_USER_AGENT']), $parent);
        $f = $s + strlen($parent);
        $version = substr($_SERVER['HTTP_USER_AGENT'], $f, 15);
        $version = preg_replace('/[^0-9,.]/','',$version);
        if ($s)
        {
            $info['browser'] = $parent;
            $info['version'] = $version;
        }
    }
 
    # obtenemos el sistema operativo
    foreach($os as $val)
    {
        if (strpos(strtoupper($_SERVER['HTTP_USER_AGENT']),$val)!==false)
            $info['os'] = $val;
    }
    
    if(strcmp($info['browser'],"OPR")==0){
        $name="OPERA";
        $info['browser']=$name;
    }
    if(strcmp($info['browser'],"WOW64")==0){
        $name="IEXPLORER64bit";
        $info['browser']=$name;
    } 
    if(strcmp($info['browser'],"MSIE")==0){
        $name="IEXPLORER32bit";
        $info['browser']=$name;
    } 
    if(strcmp($info['os'],"WIN")==0){
        $name="WINDOWS";
        $info['os']=$name;
    } 
    # devolvemos el array de valores
    return $info;
    
}













?>