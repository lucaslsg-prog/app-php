<?php

namespace App\DataTables;

use App\Models\Smartphone;
use Collective\Html\FormFacade;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class SmartphoneDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($s) {
                $actions = link_to(route('smartphones.edit', $s),'Edite', ['class' => 'btn btn-sm btn-primary mr-1']);
                $actions .= FormFacade::button('Excluir', ['class' => 'btn btn-sm btn-danger', 'onclick' => "excluir('" . route('smatphones.destroy', $s) . "')"]);

                return $actions;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Smartphone $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Smartphone $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('smartphone-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create')
                            ->addClass('btn btn-primary')
                            ->text('<i class="fas fa-plus-circle"></i> Cadastrar Novo'),
                        Button::make('export')
                            ->addClass('btn btn-primary')
                            ->text('<i class="fas fa-download"></i> Exportar'),
                        Button::make('print')
                            ->addClass('btn btn-primary')
                            ->text('<i class="fas fa-print"></i> Imprimir')
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
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('Actions'),
            Column::make('esim'),
            Column::make('remarks')->name('observations.remarks'),
            Column::make('name')->name('tss_samples.name')
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Smartphone_' . date('YmdHis');
    }
}
