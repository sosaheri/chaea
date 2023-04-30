<x-guest-layout>

    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://unsplash.com/es/fotos/sfL_QOnmy00');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Paso 2 / 10</h4>
                </div>
              </div>
                  <!-- Session Status -->
              <x-auth-session-status class="p-4" :status="session('status')" />

              <div class="card-body">
                





                    <div class="question-wrap">
                        <label class="form-check-label" id="question1">9 Procuro estar al tanto de lo que ocurre aquí y ahora.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                            <label class="form-check-label" for="customRadio1">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                            <label class="form-check-label" for="customRadio2">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question2">10 Disfruto cuando tengo tiempo para preparar mi trabajo y realizarlo a conciencia.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="customRadio3">
                            <label class="form-check-label" for="customRadio3">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault2" id="customRadio4">
                            <label class="form-check-label" for="customRadio4">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question3">11 Estoy a gusti siguiendo un orden en el estudio, en las comidas haciendo ejercicio regularmente.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="customRadio5">
                            <label class="form-check-label" for="customRadio5">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault3" id="customRadio6">
                            <label class="form-check-label" for="customRadio6">En desacuerdo</label>
                        </div>
                    </div>
                    
                    <div class="question-wrap">
                        <label class="form-check-label" id="question4">12 Cuando escucho una nueva idea enseguifa empiezo a pensar cómo ponerla en práctica.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="customRadio7">
                            <label class="form-check-label" for="customRadio7">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault4" id="customRadio8">
                            <label class="form-check-label" for="customRadio8">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question5">13 Prefiero las ideas originales y novedosas aunque no sean prácticas.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault5" id="customRadio9">
                            <label class="form-check-label" for="customRadio9">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault5" id="customRadio10">
                            <label class="form-check-label" for="customRadio10">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question6">14 Admito y me ajusto a las normas sólo si me sirven para lograr mis objetivos.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault6" id="customRadio9">
                            <label class="form-check-label" for="customRadio9">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault6" id="customRadio10">
                            <label class="form-check-label" for="customRadio10">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question7">15 Normalmente encajo bien con personas reflexivas, y me cuesta sintonizar con personas demasiado espontáneas, imprevisibles.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault7" id="customRadio11">
                            <label class="form-check-label" for="customRadio11">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault7" id="customRadio12">
                            <label class="form-check-label" for="customRadio12">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question8">16 Escucho con más frecuencia que hablo.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault8" id="customRadio13">
                            <label class="form-check-label" for="customRadio13">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="flexRadioDefault8" id="customRadio14">
                            <label class="form-check-label" for="customRadio14">En desacuerdo</label>
                        </div>
                    </div>

                    <a id="next-link" href="{{ route('step3') }}" style="background: #0D0E4C !important" class="btn text-center bg-gradient-primary w-100 my-4 mb-2" >Siguiente</a>

              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>


</x-guest-layout>
<script>
    let nextLink = document.querySelector('#next-link');

    nextLink.addEventListener('click', function(event) {
        event.preventDefault();

        let step2Data = {
            q9: document.querySelector('input[name="flexRadioDefault"]').checked ? 1 : 0,
            q10: document.querySelector('input[name="flexRadioDefault2"]').checked ? 1 : 0,
            q11: document.querySelector('input[name="flexRadioDefault3"]').checked ? 1 : 0,
            q12: document.querySelector('input[name="flexRadioDefault4"]').checked ? 1 : 0,
            q13: document.querySelector('input[name="flexRadioDefault5"]').checked ? 1 : 0,
            q14: document.querySelector('input[name="flexRadioDefault6"]').checked ? 1 : 0,
            q15: document.querySelector('input[name="flexRadioDefault7"]').checked ? 1 : 0,
            q16: document.querySelector('input[name="flexRadioDefault8"]').checked ? 1 : 0
        };

        sessionStorage.setItem('step2', JSON.stringify(step2Data));

        window.location.href = '/step3';
    });
</script>
