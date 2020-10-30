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
                return view('restrito.datatable.acoes_padrao', [
                    'editar' => route('restrito.smartphones.edit', $s),
                    'excluir' => route('restrito.smartphones.destroy', $s)
                ]);
            });
            // ->addColumn('action', function ($s) {
            //     $acoes = link_to(route('restrito.smartphones.edit', $s),'Edite', ['class' => 'btn btn-sm btn-primary mr-1']);
            //     $acoes .= FormFacade::button('Excluir', ['class' => 'btn btn-sm btn-danger', 'onclick' => "excluir('" . route('restrito.smatphones.destroy', $s) . "')"]);

            //     return $acoes;
            // });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Smartphone $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Smartphone $smartphone)
    {
        return $smartphone->newQuery();
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
                            ->text('<i class="fas fa-plus-circle"></i> Create new'),
                        Button::make('export')
                            ->addClass('btn btn-primary')
                            ->text('<i class="fas fa-download"></i> Export'),
                        Button::make('print')
                            ->addClass('btn btn-primary')
                            ->text('<i class="fas fa-print"></i> Print')
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
                  ->addClass('text-center')
                  ->title('Actions'),
            Column::make('model')->name('tss_samples.model'),
            Column::make('imei')->name('tss_samples.imei'),
            Column::make('tss')->name('tss_samples.tss'),
            Column::make('remarks')->text('observations.remarks'),
            Column::make('average_current')->decimal('avg_sleep_mode.average_current'),
            Column::make('esim'),
            Column::make('power_of_lock')
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
