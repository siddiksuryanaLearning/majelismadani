<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Participant;
use Awcodes\FilamentTableRepeater\Components\TableRepeater;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Livewire\Component;

class RegisterComponent extends Component implements HasForms
{
    use InteractsWithForms;

    public $data;

    protected function getFormSchema()
    {
        return [
            Grid::make()
                ->schema([
                    TextInput::make('name')
                        ->debounce(1000)
                        ->required()
                        ->label("Nama")
                        ->maxLength(255),
                    TextInput::make('phone')
                        ->required()
                        ->debounce(1000)
                        ->label('No. WA/ Telephone')
                        ->maxLength(14),
                    Textarea::make('address')
                        ->required()
                        ->label("Alamat")
                        ->rows(2)
                        ->maxLength(65535),
                    Radio::make('vehicle')
                        ->label("Kendaraan")
                        ->required()
                        ->options([
                            'private'   =>  'Pribadi',
                            'bus'   =>  'BIS'
                        ])
                        ->descriptions([
                            'private'   =>  'Gratis',
                            'bus'   =>  'Rp.60.000 / Orang'
                        ]),
                    TableRepeater::make('participants')
                        ->label("Peserta")
                        ->required()
                        ->headers(['Nama Peserta', 'Nomor Telpon'])
                        ->minItems(1)
                        ->schema([
                            TextInput::make('name')
                                // ->dehydrateStateUsing(fn ($state, $get, $set) => $set('name', $get('../../name')))
                                ->afterStateHydrated(fn ($state, $get, $set) => $set('name', $get('../../name')))
                                ->debounce(1000)
                                ->required()
                                ->disableLabel()
                                ->maxLength(255),
                            TextInput::make('phone')
                                // ->afterStateUpdated(fn ($state, $get, $set) => $set('phone', $get('../../phone')))
                                ->afterStateHydrated(fn ($state, $get, $set) => $set('phone', $get('../../phone')))
                                ->debounce(1000)
                                ->required()
                                ->disableLabel()
                                ->maxLength(24)
                        ])
                ])
                ->columns(1)
        ];
    }

    protected function getFormStatePath(): string
    {
        return 'data';
    }

    public function submit()
    {
        $data = $this->form->getState();
        $order = Order::query()->create(
            Arr::only($data, [
                'name',
                'phone',
                'address',
                'vehicle'
            ])
        );

        collect(Arr::get($data, 'participants'))->each(function ($participant) use ($order) {
            Participant::query()->create([
                'order_id'   =>  $order->id,
                'name'   =>  data_get($participant, 'name'),
                'phone'   =>  data_get($participant, 'phone'),
            ]);
        });

        $order->update([
            'qty'   =>  count(data_get($data, 'participants'))
        ]);

        // Redirect To
        redirect()->route('order.detail', $order);
    }

    public function render(): View
    {
        return view('form.register');
    }
}
