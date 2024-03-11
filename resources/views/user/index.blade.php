<x-navbar>

    <div class="d-flex justify-content-between align-item-center">
        <ol class="breadcrumb">
            <a href="ordens">
                <i class="fa-solid fa-house"></i>
            </a>
            <li class="breadcrumb-item active">  Gerenciar / Usuarios</li>
        </ol>

        <div class="">
            <a href="/user/create" type="button" class="btn btn-success btn-circle btn-xl" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="left"  title="Adicionar Usuario">+</a>
        </div>
    </div>

    <livewire:user-table>

</x-navbar>
