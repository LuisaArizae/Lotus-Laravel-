@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="bg-white d-flex justify-content-center align-items-center mx-auto" style="max-width: 90%;">
            <main class="col-md-9 col-lg-10 content-section">
                <div class="bg-white-200 p-4 px-6 mx-auto rounded-xl">
                    <h1 class="font-weight-bold text-5xl text-center m-2">To-Do list</h1>

                    <div class="m-5">
                        {{--  -------Alert--------  --}}
                        @if (session('correcto'))
                            <div class="alert alert-success">{{ session('correcto') }}</div>
                        @endif
                        @if (session('Error'))
                            <div class="alert alert-danger">{{ session('Error') }}</div>
                        @endif
                        {{--  ----Fin Alert-----  --}}

                        <!-- Inicio de form -->
                        <form class="d-flex flex-column" method="POST" action="{{ route('ToDo.create') }}">
                            @csrf
                            <input type="text" name="txttitle" placeholder="Título de tarea" class="form-control m-2 bg-gray-100 rounded" required style="margin-bottom: 20px;">
                            <textarea name="txtdescription" placeholder="¿Qué tienes planeado hacer?" class="form-control m-2 bg-gray-100 rounded" style="margin-bottom: 20px;"></textarea>
                            <button type="submit" class="form-control m-2 btn btn-secondary btn-sm text-white rounded-xl" style="width: 120px;">Agregar Tarea</button>
                        </form>
                    </div>

                    <div class="m-5">
                        <hr>
                        {{--  Filtro  --}}
                        <div class="m-5">
                            <form method="GET" action="{{ route('ToDo.index') }}" class="d-flex mb-4">
                                <select name="filter" class="form-select" aria-label="Filtrar tareas">
                                    <option value="" {{ request('filter') == '' ? 'selected' : '' }}>Todas las tareas</option>
                                    <option value="completed" {{ request('filter') == 'completed' ? 'selected' : '' }}>Tareas finalizadas</option>
                                    <option value="notcompleted" {{ request('filter') == 'notcompleted' ? 'selected' : '' }}>Tareas sin finalizar</option>
                                    <option value="old" {{ request('filter') == 'old' ? 'selected' : '' }}>Tareas más antiguas</option>
                                </select>
                                <button type="submit" class="btn btn-primary p-7 btn-gradient ms-2">Filtrar</button>
                            </form>
                        </div>
                        {{--  fin Filtro  --}}

                        <div class="row task-container">
                            @foreach ($datos as $item)
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="task-content p-3 border rounded">
                                        <h3 class="text-lg font-semibold">{{ $item->title }}</h3>
                                        <p class="text-gray-500">{{ $item->descrip }}</p>
                                        

                                        {{-- Botón delete --}}
                                        <div class="form-group m-2">
                                            <form action="{{ route('ToDo.filled', $item->id) }}" method="GET" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-light btn-sm mt-3" {{ $item->isDone ? 'disabled' : '' }} style="background-color: rgb(241, 213, 92); color: white;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                            
                                            <button type="button" class="btn btn-outline-light btn-sm mt-3"  onclick="confirmDelete(event, '{{ route('ToDo.delete', $item->id) }}')" {{ $item->isDone ? 'disabled' : '' }}  style="background-color: rgb(209, 122, 152); color: white;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                </svg>
                                            </button>
                                    
                                            <p class="text-muted">Creado el: {{ $item->created_at}}</p>
                                                                                    {{-- Link modificar --}}
                                            <a href="#" class="btn btn-outline-light btn-sm mt-3 data-bs-toggle" data-bs-toggle="modal" data-bs-target="#ModalEditar{{$item->id}}" {{ $item->isDone ? 'disabled' : '' }}  style="background-color: rgb(122, 155, 186); color: white;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                                </svg>
                                            </a>
                                            <p class="text-muted">Modificado {{ $item->updated_at}}</p>

                                      
                                        <!-- Modal modificar -->
                                        <div class="modal" tabindex="-1" id="ModalEditar{{$item->id}}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Modificar tarea</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('ToDo.update', $item->id) }}" method="POST">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                                            <input type="text" name="txttitle" class="form-control" value="{{ $item->title }}" style="margin-bottom: 20px;" {{ $item->isDone ? 'disabled' : '' }}>
                                                            <textarea name="txtdescription" class="form-control" {{ $item->isDone ? 'disabled' : '' }}>{{ $item->descrip }}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary" {{ $item->isDone ? 'disabled' : '' }}>Guardar cambios</button>
                                                    </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-4 mt-auto bg-light">
        <div class="container">
            <p>&copy; 2023 Mi Sitio. Todos los derechos reservados.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</div>
@endsection
