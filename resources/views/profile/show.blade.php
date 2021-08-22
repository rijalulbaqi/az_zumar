<x-app-layout>
    <div>
        <div>
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div>
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border/>
            @endif
        </div>
    </div>
</x-app-layout>
