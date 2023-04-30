<x-guest-layout>

    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://unsplash.com/es/fotos/sfL_QOnmy00');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h1 class="text-white font-weight-bolder text-center mt-2 mb-0 larger-text">CHAEA - Cuestionario Honey-Alonso de estilos de aprendizaje</h1>                </div>
              </div>
                  <!-- Session Status -->
              <x-auth-session-status class="p-4" :status="session('status')" />

              <div class="card-body">
                <h2 class="h2">INSTRUCCIONES PARA RESPONDER AL CUESTIONARIO</h2>

                <ul>
                    <li>Este Cuestionario ha sido diseñado para identificar su Estilo de Aprendizaje. No es un test de inteligencia, ni de personalidad.</li>
                    <li>No hay límite de tiempo para contestar al Cuestionario. No le ocupará más de 15 minutos.</li>
                    <li>No hay respuestas correctas o erróneas. Será útil en la medida que sea sincero/a en sus respuestas.</li>
                    <li>Responda de acuerdo o en desacuerdo según cirresponda</li>
                    <li>Por favor conteste a todos los ítems.</li>
                    <li>Para facilitar el análisis del grupo le rogamos que responda también a las preguntas de índole socio académica.</li>
                </ul>

                <span><strong>Muchas gracias.</strong></span> 

                <a href="{{ route('step0') }}" style="background: #0D0E4C !important" class="btn text-center bg-gradient-primary w-100 my-4 mb-2" >Iniciar</a>

              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>


</x-guest-layout>
