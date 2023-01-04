<?php

$args = array(

   'Introduction' => <<<HEREDOC
 * The WPMUDEV Appointments+ configuration tool
 *
 * To fill the appontments+ configuration with some specific items which we receive from the administration panels. Intended to streamline and strongly simplify the process of configuration.
HEREDOC
,

   'Plugin Name' => getenv('ttt_Plugin_Name'),
   'Plugin Slug' => getenv('ttt_plugin_slug'),   
   'Plugin URI' => getenv('ttt_Plugin_URI'),
   'Github URI' => getenv('ttt_Github_URI'),
   'Description' => getenv('ttt_Description'),
   'Author' => getenv('ttt_Author'),
   'Author URI' => getenv('ttt_Author_URI'),
   'Version' => getenv('ttt_Version'),
   'Text Domain' => getenv('ttt_Text_Domain'),
   'License' => getenv('ttt_License'),
   'License URI' => getenv('ttt_License_URI'),
   'Provides' => getenv('ttt_Provides'),
  
   '@package' => getenv('ttt_package'),
   '@author' => getenv('ttt_author'),
   '@license' => getenv('ttt_license'),
   '@copyright' => getenv('ttt_copyright'),

   'Plugin Class' => 'KK71_Appointments_Filler',
   'plugin class' => getenv('ttt_plugin_class'),   
   
);