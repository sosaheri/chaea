<x-guest-layout>

    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://unsplash.com/es/fotos/sfL_QOnmy00');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Gráfica</h4>
                </div>
              </div>
                  <!-- Session Status -->
              <x-auth-session-status class="p-4" :status="session('status')" />

              <div class="card-body">

                    <canvas id="myChart"></canvas>


              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>


</x-guest-layout>
<script>

    var ctx = document.getElementById('myChart').getContext('2d');

    var marksData = {
        labels: ["Teórico", "Pragmático", "Activo", "Reflexivo"],
        datasets: [{
            label: "Resultados",
            data: [{{ $data['teorico'] }}, {{ $data['pragmatico'] }}, {{ $data['activo'] }}, {{ $data['reflexivo'] }}]
        }]
    };

    var radarChart = new Chart(ctx, {
        type: 'radar',
        data: marksData
    });

</script>
