<x-navbar>

        <div class="d-flex justify-content-between align-item-center">
            <ol class="breadcrumb">
                <a href="ordens">
                    <i class="fa-solid fa-house"></i>
                </a>
                <li class="breadcrumb-item active"> / Funcionarios</li>
            </ol>

            <div class="">
                <a href="/order/create" type="button" class="btn btn-success btn-circle btn-xl" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="left"  title="Adicionar ordem de serviço">+</a>
            </div>

        </div>

        <div class="mb-3 mt-4">

                <form class="d-flex teste" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>

          </div>



          <table class="table table-striped shadow rounded">
            <thead>
                <tr>
                    <th scope="col">Funcionario</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>

                
    
        
                @foreach ( $usersWithEmployees as $user)
    
                    <tr>
                        <td>{{ $user->user->name}}</td>
                        <td>{{ $user->email }}</td>
                        
                        <td>
                            <a href="{{ route('user.show', ['id' => $user->id]) }}" class="link-success link-offset-2 link-underline-opacity-10 link-underline-opacity-100-hover">Acessar</a>
                        </td>
                    </tr>
                        
                @endforeach      
    
            </tbody>
        </table>
    
        {{  $usersWithEmployees->links() }}


       


        


          

        


       

            
</x-navbar>
