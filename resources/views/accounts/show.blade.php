<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="text-xl text-gray-300">
                {{ ($account->name) }}
                <p>Account Type: {{ $account->type }}</p>
                <p>Account Currency: {{ $account->name }}</p>
            </h2>
            <a href="{{ route('accounts.edit', $account->id) }}">
                <x-primary-button class="ms-4 button">
                    {{ ('Edit') }}
                </x-primary-button>
            </a>
        </div>
    </x-slot>
</x-app-layout>
