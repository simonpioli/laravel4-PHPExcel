<?php

namespace Simonpioli\Excel\Filters;

use \PHPExcel_Reader_IReadFilter;

class RangeFilter implements PHPExcel_Reader_IReadFilter
{
    private $_startRow = 0;
    private $_endRow   = 0;
    private $_columns  = array();

    /**  Get the list of rows and columns to read  */
    public function setRange($startRow, $endRow, $columns)
    {
        $this->_startRow = $startRow;
        $this->_endRow   = $endRow;
        $this->_columns  = $columns;
    }

    public function readCell($column, $row, $worksheetName = '')
    {
        //  Only read the rows and columns that were configured
        if ($row >= $this->_startRow && $row <= $this->_endRow) {
            if (in_array($column,$this->_columns)) {
                return true;
            }
        }
        return false;
    }
}