<?php


namespace tangwei666\PhpExcelTemplator;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\IWriter;

class PhpExcelTemplatorXls extends PhpExcelTemplator
{
    /**
     * {@inheritDoc}
     */
    protected static function getWriter(Spreadsheet $spreadsheet): IWriter
    {
        return IOFactory::createWriter($spreadsheet, 'Xls');
    }
}
