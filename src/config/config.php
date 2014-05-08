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
    | Cache Type
    |--------------------------------------------------------------------------
    |
    |PHPExcel_CachedObjectStorageFactory::cache_in_memory
    |
    |The default. If you don't initialise any caching method, then this is the method that PHPExcel will use. Cell objects are maintained in PHP memory as at present.
    |
    |PHPExcel_CachedObjectStorageFactory::cache_in_memory_serialized
    |
    |Using this caching method, cells are held in PHP memory as an array of serialized objects, which reduces the memory footprint with minimal performance overhead.
    |
    |PHPExcel_CachedObjectStorageFactory::cache_in_memory_gzip
    |
    |Like cache_in_memory_serialized, this method holds cells in PHP memory as an array of serialized objects, but gzipped to reduce the memory usage still further, although access to read or write a cell is slightly slower.
    |
    |PHPExcel_CachedObjectStorageFactory::cache_igbinary
    |
    |Uses PHPs igbinary extension (if its available) to serialize cell objects in memory. This is normally faster and uses less memory than standard PHP serialization, but isnt available in most hosting environments.
    |
    |PHPExcel_CachedObjectStorageFactory::cache_to_discISAM
    |
    |When using cache_to_discISAM all cells are held in a temporary disk file, with only an index to their location in that file maintained in PHP memory. This is slower than any of the cache_in_memory methods, but significantly reduces the memory footprint. By default, PHPExcel will use PHP's temp directory for the cache file, but you can specify a different directory when initialising cache_to_discISAM.
    |
    */

    'cacheType' => 'cache_in_memory',

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
