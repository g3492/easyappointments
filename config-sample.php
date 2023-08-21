<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config {

    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL      = 'http://url-to-easyappointments-directory';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = FALSE;

    // ------------------------------------------------------------------------
    // SPANISH TRANSLATIONS CONSTANTS
    // ------------------------------------------------------------------------

    const AGN_SERVICE       = 'Servicio';
    const AGN_SERVICES      = 'Servicios';
    const AGN_THE_SERVICE   = 'el Servicio';
    const AGN_THE_SERVICES  = 'los Servicios';
    const AGN_PROVIDER      = 'Prestador';
    const AGN_PROVIDERS     = 'Prestadores';
    const AGN_THE_PROVIDER  = 'el Prestador';
    const AGN_THE_PROVIDERS = 'los Prestadores';
    const AGN_CUSTOMER      = 'Cliente';
    const AGN_CUSTOMERS     = 'Clientes';
    const AGN_THE_CUSTOMER  = 'el Cliente';
    const AGN_THE_CUSTOMERS = 'los Clientes';

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST       = 'localhost';
    const DB_NAME       = 'easyappointments';
    const DB_USERNAME   = 'root';
    const DB_PASSWORD   = 'root';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE   = FALSE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = '';
    const GOOGLE_CLIENT_ID      = '';
    const GOOGLE_CLIENT_SECRET  = '';
    const GOOGLE_API_KEY        = '';
}

/* End of file config.php */
/* Location: ./config.php */
