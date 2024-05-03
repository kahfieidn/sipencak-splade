<?php

namespace App\Tables\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use ProtoneMedia\Splade\SpladeTable;
use Spatie\QueryBuilder\QueryBuilder;
use ProtoneMedia\Splade\AbstractTable;
use Spatie\QueryBuilder\AllowedFilter;

class Users extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    

    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {

        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query
                        ->orWhere('name', 'LIKE', "%{$value}%");
                });
            });
        });

        $yearFilter = AllowedFilter::callback('year', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query->whereYear('tanggal_izin', $value);
                });
            });
        });

        $monthFilter = AllowedFilter::callback('month', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                Collection::wrap($value)->each(function ($value) use ($query) {
                    $query->whereMonth('tanggal_izin', $value);
                });
            });
        });

        $query = User::with('roles')->whereHas('roles', function ($query) {
            $query->where('name', 'user');
        });
        
        return QueryBuilder::for($query)
            ->allowedIncludes('')
            ->allowedSorts(['name'])
            ->allowedFilters(['name', $globalSearch, $yearFilter, $monthFilter]);
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['id'])
            ->column('id', sortable: true)
            ->column('name', sortable: true)
            ->column('nip', sortable: true)
            ->column('email', sortable: true)
            ->column('roles.name', sortable: true)
            ->paginate(10)
            ->column(label: 'Actions');
            // ->searchInput()
            // ->selectFilter()
            // ->withGlobalSearch()

            // ->bulkAction()
            // ->export()
    }
}
