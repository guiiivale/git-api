<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Repository;

class RepositoryTable extends DataTableComponent
{
    protected $model = Repository::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable()
                ->searchable(),
            Column::make("Reference id", "reference_id")
                ->sortable()
                ->searchable(),
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Private", "private")
                ->sortable()
                ->searchable(),
            Column::make("Archived", "archived")
                ->sortable()
                ->searchable(),
            Column::make("Disabled", "disabled")
                ->sortable()
                ->searchable(),
            Column::make("Reference created at", "reference_created_at")
                ->sortable()
                ->searchable(),
            Column::make("Reference pushed at", "reference_pushed_at")
                ->sortable()
                ->searchable(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->searchable(),
            Column::make("Updated at", "updated_at")
                ->sortable()
                ->searchable(),
        ];
    }
}
