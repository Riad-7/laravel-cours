@props(['users'])
<div>
    <table class="table" border="1px">
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['email'] }}</td>
                <td>
                    <a href={{ route('profil.show', $user) }}>Voir detaille</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
