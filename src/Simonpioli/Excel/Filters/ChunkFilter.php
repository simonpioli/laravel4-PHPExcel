<?php

namespace Simonpioli\Excel\Filters;

use \PHPExcel_Reader_IReadFilter;

class ChunkFilter implements PHPExcel_Reader_IReadFilter
{
    private $_startRow = 0;
    private $_endRow   = 0;

    /**  Set the list of rows that we want to read  */
    public function setRows($chunkSize, $startRow = 0) {
        $this->_startRow = $startRow;
        $this->_endRow   = $startRow + $chunkSize;
    }

    public function readCell($column, $row, $worksheetName = '') {
        //  Only read the heading row, and the configured rows
        if (($row == 1) || ($row >= $this->_startRow && $row < $this->_endRow)) {
            return true;
        }
        return false;
    }
}