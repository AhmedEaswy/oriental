<?php

namespace App\DataTables;

use App\Models\Contact;
use Yajra\DataTables\DataTableAbstract;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ContactDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'admin::contact.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param Contact $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Contact $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return Builder
     */
    public function html()
    {
        return $this->builder()
            ->setTableId('contact-table')
            ->columns($this->getColumns())
            ->addAction(['width' => '220px', 'printable' => false, 'title' => 'action'])
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->buttons(
                Button::make('export'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id' => new Column(['title' => 'id', 'data' => 'id']),
            'content' => new Column(['title' => 'content', 'data' => 'content']),
            'name' => new Column(['title' => 'name', 'data' => 'name']),
            'phone_code' => new Column(['title' => 'phone_code', 'data' => 'phone_code']),
            'phone' => new Column(['title' => 'phone', 'data' => 'phone']),
            'interest' => new Column(['title' => 'interest', 'data' => 'interest']),
            'email' => new Column(['title' => 'email', 'data' => 'email']),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Contact_' . date('YmdHis');
    }
}
