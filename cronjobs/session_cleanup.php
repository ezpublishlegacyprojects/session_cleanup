<?php

    include_once( 'lib/classes/ezsession.php' );
    
    if( !$isQuiet )
        $cli->output( 'Removing expired sessions from database...' );
    
    eZSessionGarbageCollector();

    if( !$isQuiet )
        $cli->output( 'Finished.' );
?>
