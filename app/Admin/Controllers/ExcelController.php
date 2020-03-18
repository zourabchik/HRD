<?php

namespace App\Admin\Controllers;


class ExcelController
{
    public function index(Content $content)
    {
        return $content
            ->title('Dashboard')
            ->description('Description...')
            ->row(function (Row $row) {
                $row->column(12, function (Column $column) {
                    $column->append();
                });
            });
    }
}
