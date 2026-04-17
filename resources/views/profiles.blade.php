<x-app title="profil">
    <div class="row my-5 ">
        @foreach ($profiles as $profile)
            <x-card :profile="$profile" />
        @endforeach
    </div>
    {{ $profiles->links() }}
</x-app>

