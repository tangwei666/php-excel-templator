<?php

namespace tangwei666\PhpExcelTemplator\setters;

use tangwei666\PhpExcelTemplator\InsertedCells;
use tangwei666\PhpExcelTemplator\params\SetterParam;

interface ICellSetter
{
	/**
     * Set values in the specified cell.
	 * @param SetterParam $setter_param
	 * @param InsertedCells $inserted_cells The object that stores the count of inserted cells
	 * @return InsertedCells
	 */
	public function setCellValue(SetterParam $setter_param, InsertedCells $inserted_cells): InsertedCells;
}
