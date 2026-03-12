@props(['users'])
<div>
    <table class="table">
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nom</th>
            <th scope="col">Metier</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['nom'] }}</td>
                <td>{{ $user['metier'] }}</td>
            </tr>
        @endforeach
    </table>
</div>
