<div class="mb-3 mt-4">

            <input
                wire:model.live.debounce.300ms="search"
                class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">




    <table class="table table-striped shadow rounded">
        <thead>
            <tr>
                <th scope="col">Funcionario</th>
                <th scope="col">Email</th>
            </tr>
        </thead>
        <tbody>


            @foreach ($users as $user)

                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>

                    <td>
                        <a href="{{ route('user.show', ['id' => $user->id]) }}" class="link-success link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover">Acessar</a>
                    </td>
                </tr>

            @endforeach

        </tbody>
    </table>

    {{ $users->links() }}

</div>
