<x-app title="Home">
    <x-alert type='danger'>
        <strong>Danger</strong>
    </x-alert>
    <h1>Home</h1>

    <x-users-table :users="$users" />
</x-app>

