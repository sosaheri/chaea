<x-app-layout>


<div class="row mb-4">
    <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
        <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Parcticipantes de la encuenta</h6>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive">
                    <table class="table yajra-datatable align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Paralelo</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edad</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sexo</th>
                            </tr>
                        </thead>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
</x-app-layout>
<script>
 $(function() {    
    $('.yajra-datatable').DataTable({
        language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
        processing: true,
        serverSide: true,
        info: false,
        ajax: "{{ route('getUsers') }}",
        columns: [
            {data: 'name', name: 'name'},
            {data: 'paralelo', name: 'paralelo'},
            {data: 'edad', name: 'edad'},
            {data: 'sexo', name: 'sexo'},
        ]
    });
  });

</script>