<x-app title="Profile {{ $profile->id }}">
    <div class="card">
        <h5 class="card-header">Profile N{{ $profile->id }}</h5>
        <div class="card-body">
            <h5 class="card-title">{{ $profile->name }}</h5>
            <p class="card-text">{{ $profile->email }}</p>
            <a href="/profiles" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</x-app>
