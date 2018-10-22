<?php
    define('PERCH_LICENSE_KEY', 'P3-LOCAL-JBD181-VCL021-YLF021');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'sunshine');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "black_water");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'btsourcepdx@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'Nicholas Fazzolari');

    define('PERCH_LOGINPATH', '/black_water_bar/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
