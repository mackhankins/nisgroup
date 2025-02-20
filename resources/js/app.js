import './bootstrap';
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import.meta.glob([
    '../images/**',
    '../fonts/**',
]);


window.Alpine = Alpine

Livewire.start()
