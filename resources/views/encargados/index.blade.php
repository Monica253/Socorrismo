<x-app-layout>
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Lastname</th>
                                <th>DNI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($encargados as $encargado)
                                <tr>
                                    <td>{{$encargado->nombre}}</td>
                                    <td>{{$encargado->apellidos}}</td>
                                    <td>{{$encargado->dni}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>