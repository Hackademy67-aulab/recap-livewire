<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Benvenuto, registrati</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}" class="shadow p-5">

                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfirm" class="form-label">Reinserisci la password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordConfirm">
                    </div>

                    <button type="submit" class="btn btn-primary">Iscriviti</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>
