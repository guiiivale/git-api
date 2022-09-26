<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Repository;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\Views\Filters\SelectFilter;

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
            Column::make("Created at", "reference_created_at")
                ->sortable()
                ->searchable(),
            Column::make("Last push", "reference_pushed_at")
                ->sortable()
                ->searchable(),
        ];
    }

    public function filters(): array
    {
        return [
            SelectFilter::make('Private')
                ->options([
                    '' => 'All',
                    '1' => 'Yes',
                    '0' => 'No',
                ])
                ->filter(function(Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('private', true);
                    } elseif ($value === '0') {
                        $builder->where('private', false);
                    }
                }),
            SelectFilter::make('Archived')
                ->options([
                    '' => 'All',
                    '1' => 'Yes',
                    '0' => 'No',
                ])
                ->filter(function(Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('archived', true);
                    } elseif ($value === '0') {
                        $builder->where('archived', false);
                    }
                }),
            SelectFilter::make('Disabled')
                ->options([
                    '' => 'All',
                    '1' => 'Yes',
                    '0' => 'No',
                ])
                ->filter(function(Builder $builder, string $value) {
                    if ($value === '1') {
                        $builder->where('disabled', true);
                    } elseif ($value === '0') {
                        $builder->where('disabled', false);
                    }
                }),
        ];
    }
}
