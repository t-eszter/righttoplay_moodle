<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'postgres.railway.internal';
$CFG->dbname    = 'railway';
$CFG->dbuser    = 'postgres';
$CFG->dbpass    = 'ZDUhmTUHHCiedvRafqMLejiyuhFltywZ';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'https://righttoplaymoodle-production.up.railway.app';
$CFG->sslproxy  = true;
$CFG->themedesignermode = true;
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
