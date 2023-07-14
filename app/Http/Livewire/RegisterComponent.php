<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Participant;
use Awcodes\FilamentTableRepeater\Components\TableRepeater;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Hidden;
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
                        ->label('No. WA/Telepon')
                        ->maxLength(14)
                        ->tel()
                        ->numeric()
                        ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/'),
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
                            'bus'   =>  'BUS'
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
                                // ->dehydrateStateUsing(function ($state, $get, $set, $statePath) {
                                //     dd($get('../../participants'), $statePath);
                                //     $set('name', $get('../../name'));
                                // })
                                ->afterStateHydrated(function ($state, $get, $set, $livewire) {
                                    $participants = collect($get('../../participants'));
                                    $first_key = $participants->keys()->first();
                                    $participants->each(fn ($value, $key) => ($key == $first_key) ? data_set($livewire, 'data.participants.' . $first_key . '.name', $get('../../name')) : '');
                                })
                                ->debounce(1000)
                                ->required()
                                ->disableLabel()
                                ->maxLength(255),
                            TextInput::make('phone')
                                // ->afterStateUpdated(fn ($state, $get, $set) => $set('phone', $get('../../phone')))
                                // ->afterStateHydrated(fn ($state, $get, $set) => $set('phone', $get('../../phone')))
                                ->afterStateHydrated(function ($state, $get, $set, $livewire) {
                                    $participants = collect($get('../../participants'));
                                    $first_key = $participants->keys()->first();
                                    $participants->each(fn ($value, $key) => ($key == $first_key) ? data_set($livewire, 'data.participants.' . $first_key . '.phone', $get('../../phone')) : '');
                                })
                                ->debounce(1000)
                                ->required()
                                ->disableLabel()
                                ->maxLength(24)
                                ->unique(ignoreRecord: true),
                            Hidden::make('vehicle')
                                // ->afterStateUpdated(fn ($state, $get, $set) => $set('phone', $get('../../phone')))
                                ->afterStateHydrated(fn ($state, $get, $set) => $set('vehicle', $get('../../vehicle')))
                                ->debounce(1000)
                                ->required()
                                ->disableLabel()
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
        $data['phone'] = (substr($data['phone'], 0, 4) === '+628') ? '628' . substr($data['phone'], 4) : ((substr($data['phone'], 0, 2) === '08') ? '628' . substr($data['phone'], 2) : ((substr($data['phone'], 0, 4) === '6208') ? '628' . substr($data['phone'], 4) : ((substr($data['phone'], 0, 1) === '8') ? '628' . substr($data['phone'], 1) : $data['phone'])));
        $order = Order::query()->create(
            Arr::only($data, [
                'name',
                'phone',
                'address',
                'vehicle'
            ])
        );

        collect(Arr::get($data, 'participants'))->each(function ($participant) use ($order) {
            // $data = $this->form->getState();
            $participant['phone'] = (substr($participant['phone'], 0, 4) === '+628') ? '628' . substr($participant['phone'], 4) : ((substr($participant['phone'], 0, 2) === '08') ? '628' . substr($participant['phone'], 2) : ((substr($participant['phone'], 0, 4) === '6208') ? '628' . substr($participant['phone'], 4) : ((substr($participant['phone'], 0, 1) === '8') ? '628' . substr($participant['phone'], 1) : $participant['phone'])));
            // dd($participant);
            Participant::query()->create([
                'order_id'   =>  $order->id,
                'name'   =>  data_get($participant, 'name'),
                'phone'   =>  data_get($participant, 'phone'),
                'vehicle'   =>  data_get($participant, 'vehicle'),

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
