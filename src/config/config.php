<?php
/**
 * Part of the Laravel-4 PHPExcel package
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the LPGL.
 *
 * @package    Laravel-4 PHPExcel
 * @version    0.1.0
 * @author     Maatwebsite
 * @license    LGPL
 * @copyright  (c) 2013, Maatwebsite
 * @link       http://maatwebsite.nl
 */

return array(

    /*
    |--------------------------------------------------------------------------
    | Creator
    |--------------------------------------------------------------------------
    |
    | The default creator of a new Excel file
    |
    */

	'creator' => 'Simon Pioli',

    /*
    |--------------------------------------------------------------------------
    | Delimiter
    |--------------------------------------------------------------------------
    |
    | The default delimiter which will be used to read out a CSV file
    | If you would like to use an other delimiter only one time,
    | you can also use the `setDelimiter()` chain.
    |
    */

    'delimiter' => ',',

     /*
    |--------------------------------------------------------------------------
    | Calculate
    |--------------------------------------------------------------------------
    |
    | By default cells with formulas will not be calculated.
    |
    */

    'calculate' => false,

     /*
    |--------------------------------------------------------------------------
    | Ignore empty cells
    |--------------------------------------------------------------------------
    |
    | By default empty cells are not ignored
    |
    */

    'ignoreEmpty' => false,

    /*
    |--------------------------------------------------------------------------
    | Path
    |--------------------------------------------------------------------------
    |
    | The path we want to save excel file to
    |
    */

    'path' => base_path(),

    /*
    |--------------------------------------------------------------------------
    | Read sheet name
    |--------------------------------------------------------------------------
    |
    | Name of first sheet of the file. Parsing multi-sheet files can be too
    | memory hungry!
    |
    */

    'restrictSheetName' => 'Sheet1',

    /*
    |--------------------------------------------------------------------------
    | Read data only
    |--------------------------------------------------------------------------
    |
    | Set this to true to only read the data from the cells. No formatting etc.
    |
    */

    'dataOnly' => false,

    /*
    |--------------------------------------------------------------------------
    | Cache Settings
    |--------------------------------------------------------------------------
    |
    | Set the size of the cell cache
    |
    */

    'cacheSettings' => array(
            'memoryCacheSize' => '32MB'
        ),

);
