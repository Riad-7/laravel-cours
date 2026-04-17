@props(['profile'])
<div class="col-sm-6 mt-2">
  <div class="card">
    <h5 class="card-header">Profile N{{ $profile->id }}</h5>
    <div class="card-body">
        <h5 class="card-title">{{ $profile->name }}</h5>
        <a href="{{ route('profile.show', $profile->id) }}" class="btn btn-primary">Afficher Plus</a>
    </div>
</div>
</div>
