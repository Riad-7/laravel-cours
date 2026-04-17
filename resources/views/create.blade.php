<form method="POST" action={{ route('profil.store') }}>
    @csrf
    <table>
        <tr>
            <th>
                <label for="name" id="name"> Name : </label>
            </th>
            <th>
                <input type="text" name="name" id="name">
                @error('name')
                    {{ $message }}
                @enderror
            </th>
        </tr>
        <tr>
            <th>
                <label for="email" id="email"> Email : </label>
            </th>
            <th>
                <input type="email" name="email" id="email">
                @error('email')
                    {{ $message }}
                @enderror
            </th>
        </tr>
        <tr>
            <th>
                <label for="password" id="password"> Password : </label>
            </th>
            <th>
                <input type="password" name="password" id="password">
            </th>
        </tr>
        <tr>
            <th>
                <button type="submit">Ajouter Profil</button>
            </th>
        </tr>
    </table>
</form>
