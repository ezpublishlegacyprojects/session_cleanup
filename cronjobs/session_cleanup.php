<?php
    
    // include_once( 'lib/ezutils/classes/ezsession.php' );
    
    if( !$isQuiet )
        $cli->output( 'Removing expired sessions from database...' );
    
    eZSession::garbageCollector();

    if( !$isQuiet )
        $cli->output( 'Finished.' );
        
?>