<?php

namespace App\Livewire\Item;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\Exportable;
use PowerComponents\LivewirePowerGrid\Footer;
use PowerComponents\LivewirePowerGrid\Header;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridFields;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\WithExport;
use Illuminate\Support\Facades\Blade;
use DateTime;


final class TableItem extends PowerGridComponent
{
    use WithExport;
    public string $tableName = 'TableItem';
    public function setUp(): array
    {
        $this->showCheckBox();
        $date = new DateTime();

        return [
            Exportable::make(fileName: 'export-' . str($date->format('Y-m-d H-i-s')) . '.xlsx')
                ->striped()
                ->columnWidth([
                    2 => 30,
                ])
                ->type(Exportable::TYPE_XLS, Exportable::TYPE_CSV),
            Header::make()->showSearchInput(),
            Footer::make()
                ->showPerPage()
                ->showRecordCount(),
        ];

    }


    public function datasource(): ?Builder
    {
        return Inventory::query()
            ->with('room');
    }

    public function relationSearch(): array
    {
        return [];
    }

    public function fields(): PowerGridFields
    {
        return PowerGrid::fields()
            ->add('room.room_name');
    }

    public function columns(): array
    {

        return [
            Column::make('Ruangan',"room.room_name")
                ->searchable()
                ->sortable(),
            Column::make('Nama Barang', 'item_name')
                ->sortable()
                ->searchable(),
            Column::make('Merk Barang', 'item_brand')
                ->sortable()
                ->searchable(),
            Column::make('type Barang', 'item_type')
                ->sortable()
                ->searchable(),
            Column::make('Serial Number', 'serial_number')
                ->sortable()
                ->searchable(),
            Column::make('Lokasi', 'lokasi')
                ->sortable()
                ->searchable(),
            Column::make('Tahun Perolehan', 'tahun_perolehan')
                ->sortable()
                ->searchable(),
            Column::make('Masa Habis Kalibrasi', 'masa_kalibrasi')
                ->sortable()
                ->searchable(),
            Column::make('Daya', 'daya')
                ->sortable()
                ->searchable(),
            Column::make('Stock', 'stock')
                ->sortable()
                ->searchable(),
            Column::make('keterangan', 'item_keterangan')
                ->sortable()
                ->searchable(),

            Column::action('Action')

        ];

    }

    public function filters(): array
    {
        return [
        ];
    }


    public function actions(Inventory $row): array
    {
        $id = $row->id;
        return [
            Button::add('edit')
            ->slot("<a href='/inventory/$id' wire:navigate class='pg-btn-white'>Edit</a>"),

            Button::add('delete')
            ->render(function ($row) {
                return Blade::render(<<<HTML
                    <button class="pg-btn-white" wire:confirm='Anda akan menghapus $row->item_name' wire:click="destroy($row->id)" >Delete</button>
                    HTML);
                })
            ];
        }
        public function destroy(Inventory $rowId): void
        {
            $post = Inventory::find($rowId);
            if ($post) {
                $post->each->delete();
                session()->flash('item-success', 'Berhasil Menghapus Barang');
                $this->redirectIntended('/inventory', navigate: true);
            }
    }
}
