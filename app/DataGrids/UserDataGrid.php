<?php

namespace App\DataGrids;

use BanhTrung\DataGridApi\DataGrid;
use Illuminate\Support\Facades\DB;

class UserDataGrid extends DataGrid
{

    protected $index = 'id';

    protected $itemsPerPage = 5;

    public function addColumns()
    {
        $this->addColumn([
            'index'      => 'id',
            'label'      => "ID",
            'type'       => 'number',
            'filterable' => false,
            'searchable' => false,
        ]);

        $this->addColumn([
            'index'      => 'name',
            'label'      => 'Name',
            'type'       => 'string',
            'filterable' => true,
            'searchable' => true,
        ]);

        $this->addColumn([
            'index'      => 'email',
            'label'      => 'Email',
            'type'       => 'string',
            'filterable' => true,
            'searchable' => true,
        ]);
    }

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('users')
            ->select(
                'id',
                'name',
                'email',
            );
        $this->setQueryBuilder($queryBuilder);
    }
}