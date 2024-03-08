<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row mt-4 justify-content-center">
                <div class="col-md-4">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">
                {{ session('success') }}
                    </div>
                @endif
                    <div class="card card-outline shadow-lg p-3 mb-5 bg-body-tertiary rounded mt-4">
                        <div class="card-header">
                            <div class="card-title text-center">
                                <h2>Register a User</h2>
                            </div>
                        </div>
                        <div class="card-body p-3">
                          
                            <form action="{{route('store')}}" method="post">
                                @csrf
                                <div class="mb-2">
                                    <label for="exampleInputName" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName"  name="name" value="{{ old('name') }}" aria-describedby="name">
                                  </div>
                                    <div class="mb-3">
                                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                                      <input type="email" class="form-control" id="exampleInputEmail1"  name="email" value="{{ old('email') }}" aria-describedby="emailHelp">
                                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                      <label for="exampleInputPassword1" class="form-label">Password</label>
                                      <input type="password" class="form-control"  name="password" value="{{ old('password') }}" id="exampleInputPassword1">
                                    </div>
                                    <div class="card-footer text-center">
                                        <button type="submit" class="btn btn-secondary">Salvar</button>
                                    </div>
                                </form>        
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-outline shadow-lg p-3 mb-5 bg-body-tertiary rounded mt-4">
                        <div class="card-header">
                            <div class="card-title text-center">
                                <h2>Users</h2>
                            </div>
                            
                        </div>
                        <div class="card-body p-3">
                            <table class="table">
                                <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Status</th>
                                    </tr>
                                  </thead>
                                <tbody>
                                @forelse ( $users as $user )
                                @if ($user->status === 'inactive')
                                    <tr class="table-danger">
                                @else
                                    <tr class="table-success">
                                @endif
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->status}}</td>
                                      </tr>
                                    @empty
                                    <tr>
                                        <th  scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                      </tr>     
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Status</th>
                                    </tr>
                                  </tfoot>
                              </table>
                        </div>
                        <div class="card-footer">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
