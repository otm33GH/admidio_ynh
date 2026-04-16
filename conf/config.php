<?php
/**
 ***********************************************************************************************
 * Configuration file of Admidio
 *
 * @copyright The Admidio Team
 * @see https://www.admidio.org/
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0 only
 ***********************************************************************************************
 */

// Select your database system for example 'mysql' or 'pgsql'
$gDbType = 'mysql';

// Access to the database of the SQL-Server
$g_adm_srv  = 'localhost';     // Host
$g_adm_port = 3306;     // Port
$g_adm_db   = '__DB_NAME__';     // Database-Name
$g_adm_usr  = '__DB_USER__'; // Username
$g_adm_pw   = '__DB_PWD__'; // Password

// Table prefix for Admidio-Tables in database
// Example: 'adm'
$g_tbl_praefix = 'adm';

// URL to this Admidio installation
// Example: 'https://www.admidio.org/example'
$g_root_path = 'https://__DOMAIN____PATH__';

// The name of the timezone in which your organization is located.
// This must be one of the strings that are defined here https://www.php.net/manual/en/timezones.php
// Example: 'Europe/Berlin'
$gTimezone = 'Etc/UTC';
