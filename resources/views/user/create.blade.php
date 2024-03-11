<x-navbar>

    <ol class="breadcrumb">
        <a href="/ordens">
            <i class="fa-solid fa-house"></i>
        </a>
        <li class="breadcrumb-item active"> / Criar Usuario</li>
    </ol>





    <section class="h-100 d-flex justify-content-center align-items-center background-gradient">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card border border-light-subtle rounded-3 card-shadow">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            
                          
                            <form action="/user/store" method="POST">

                                @csrf

                                <div class="row gy-2 overflow-hidden">

                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="name@example.com" required>
                                            <label for="name" class="form-label">Nome</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                                            <label for="email" class="form-label">Email</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-grid my-3">
                                            <button class="btn btn-success btn-lg" type="submit">Entrar</button>
                                        </div>
                                    </div>

                                    <x-whatsAppBtn />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


        






</x-navbar>
