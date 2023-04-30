<x-guest-layout>

    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://unsplash.com/es/fotos/sfL_QOnmy00');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-12 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Paso 10 / 10</h4>
                </div>
              </div>
                  <!-- Session Status -->
              <x-auth-session-status class="p-4" :status="session('status')" />

              <div class="card-body">
                <form method="POST" action="{{ route('form.store') }}">
                    @csrf
                    <div class="question-wrap">
                        <label class="form-check-label" id="question1">73 No me importa hacer todo lo necesario para que sea efectivo mi trabajo.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q73" id="customRadio1" value="1">
                            <label class="form-check-label" for="customRadio1" >De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q73" id="customRadio2" value="0">
                            <label class="form-check-label" for="customRadio2">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question2">74 Con frecuencia Soy una de las personas que más anima las fiestas.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q74" id="customRadio3" value="1">
                            <label class="form-check-label" for="customRadio3">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q74" id="customRadio4" value="0">
                            <label class="form-check-label" for="customRadio4">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question3">75 Me aburro enseguida con el trabajo metódico y minucioso.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q75" id="customRadio5" value="1">
                            <label class="form-check-label" for="customRadio5">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q75" id="customRadio6" value="0">
                            <label class="form-check-label" for="customRadio6">En desacuerdo</label>
                        </div>
                    </div>
                    
                    <div class="question-wrap">
                        <label class="form-check-label" id="question4">76 La gente con frecuencia cree que soy poco sensible a sus sentimientos.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q76" id="customRadio7" value="1">
                            <label class="form-check-label" for="customRadio7">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q76" id="customRadio8" value="0">
                            <label class="form-check-label" for="customRadio8">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question5">77 Suelo dejarme llevar por mis intuiciones.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q77" id="customRadio9" value="1">
                            <label class="form-check-label" for="customRadio9">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q77" id="customRadio10" value="0">
                            <label class="form-check-label" for="customRadio10">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question6">78 Si trabajo en grupo procuro que se siga un método y un orden</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q78" id="customRadio9" value="1">
                            <label class="form-check-label" for="customRadio9">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q78" id="customRadio10" value="0">
                            <label class="form-check-label" for="customRadio10">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question7">79 Con frecuencia me interesa averiguar lo que piensa la gente.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q79" id="customRadio11" value="1">
                            <label class="form-check-label" for="customRadio11">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q79" id="customRadio12" value="0">
                            <label class="form-check-label" for="customRadio12">En desacuerdo</label>
                        </div>
                    </div>

                    <div class="question-wrap">
                        <label class="form-check-label" id="question8">80 Esquivo los temas subjetivos, ambiguos y poco claros.</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q80" id="customRadio13" value="1">
                            <label class="form-check-label" for="customRadio13">De acuerdo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="q80" id="customRadio14" value="0">
                            <label class="form-check-label" for="customRadio14">En desacuerdo</label>
                        </div>
                    </div>
                    <input type="hidden" name="name" id="name">
                    <input type="hidden" name="email" id="email">
                    <input type="hidden" name="paralelo" id="paralelo">
                    <input type="hidden" name="centro_docente" id="centro_docente">
                    <input type="hidden" name="edad" id="edad">
                    <input type="hidden" name="sexo" id="sexo">
                    <input type="hidden" name="donde_trabaja" id="donde_trabaja">
                    <input type="hidden" name="nota_media" id="nota_media">
                    <input type="hidden" name="nota_alta" id="nota_alta">
                    <input type="hidden" name="nota_baja" id="nota_baja">

                    <input type="hidden" name="q1" id="q1">
                    <input type="hidden" name="q2" id="q2">
                    <input type="hidden" name="q3" id="q3">
                    <input type="hidden" name="q4" id="q4">
                    <input type="hidden" name="q5" id="q5">
                    <input type="hidden" name="q6" id="q6">
                    <input type="hidden" name="q7" id="q7">
                    <input type="hidden" name="q8" id="q8">

                    <input type="hidden" name="q9" id="q9">
                    <input type="hidden" name="q10" id="q10">
                    <input type="hidden" name="q11" id="q11">
                    <input type="hidden" name="q12" id="q12">
                    <input type="hidden" name="q13" id="q13">
                    <input type="hidden" name="q14" id="q14">
                    <input type="hidden" name="q15" id="q15">
                    <input type="hidden" name="q16" id="q16">

                    <input type="hidden" name="q17" id="q17">
                    <input type="hidden" name="q18" id="q18">
                    <input type="hidden" name="q19" id="q19">
                    <input type="hidden" name="q20" id="q20">
                    <input type="hidden" name="q21" id="q21">
                    <input type="hidden" name="q22" id="q22">
                    <input type="hidden" name="q23" id="q23">
                    <input type="hidden" name="q24" id="q24">

                    <input type="hidden" name="q25" id="q25">
                    <input type="hidden" name="q26" id="q26">
                    <input type="hidden" name="q27" id="q27">
                    <input type="hidden" name="q28" id="q28">
                    <input type="hidden" name="q29" id="q29">
                    <input type="hidden" name="q30" id="q30">
                    <input type="hidden" name="q31" id="q31">
                    <input type="hidden" name="q32" id="q32">

                    <input type="hidden" name="q33" id="q33">
                    <input type="hidden" name="q34" id="q34">
                    <input type="hidden" name="q35" id="q35">
                    <input type="hidden" name="q36" id="q36">
                    <input type="hidden" name="q37" id="q37">
                    <input type="hidden" name="q38" id="q38">
                    <input type="hidden" name="q39" id="q39">
                    <input type="hidden" name="q40" id="q40">

                    <input type="hidden" name="q41" id="q41">
                    <input type="hidden" name="q42" id="q42">
                    <input type="hidden" name="q43" id="q43">
                    <input type="hidden" name="q44" id="q44">
                    <input type="hidden" name="q45" id="q45">
                    <input type="hidden" name="q46" id="q46">
                    <input type="hidden" name="q47" id="q47">
                    <input type="hidden" name="q48" id="q48">

                    <input type="hidden" name="q49" id="q49">
                    <input type="hidden" name="q50" id="q50">
                    <input type="hidden" name="q51" id="q51">
                    <input type="hidden" name="q52" id="q52">
                    <input type="hidden" name="q53" id="q53">
                    <input type="hidden" name="q54" id="q54">
                    <input type="hidden" name="q55" id="q55">
                    <input type="hidden" name="q56" id="q56">

                    <input type="hidden" name="q57" id="q57">
                    <input type="hidden" name="q58" id="q58">
                    <input type="hidden" name="q59" id="q59">
                    <input type="hidden" name="q60" id="q60">
                    <input type="hidden" name="q61" id="q61">
                    <input type="hidden" name="q62" id="q62">
                    <input type="hidden" name="q63" id="q63">
                    <input type="hidden" name="q64" id="q64">

                    <input type="hidden" name="q65" id="q65">
                    <input type="hidden" name="q66" id="q66">
                    <input type="hidden" name="q67" id="q67">
                    <input type="hidden" name="q68" id="q68">
                    <input type="hidden" name="q69" id="q69">
                    <input type="hidden" name="q70" id="q70">
                    <input type="hidden" name="q71" id="q71">
                    <input type="hidden" name="q72" id="q72">

                    <button style="background: #0D0E4C !important" class="btn text-center bg-gradient-primary w-100 my-4 mb-2" type="submit">Enviar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>


</x-guest-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        let step0Data = JSON.parse(sessionStorage.getItem('step0'));
        for (let key in step0Data) {
            document.getElementById(key).value = step0Data[key];
        }

        let step1Data = JSON.parse(sessionStorage.getItem('step1'));
        for (let key in step1Data) {
            document.getElementById(key).value = step1Data[key];
        }

        let step2Data = JSON.parse(sessionStorage.getItem('step2'));
        for (let key in step2Data) {
            document.getElementById(key).value = step2Data[key];
        }

        let step3Data = JSON.parse(sessionStorage.getItem('step3'));
        for (let key in step3Data) {
            document.getElementById(key).value = step3Data[key];
        }

        let step4Data = JSON.parse(sessionStorage.getItem('step4'));
        for (let key in step4Data) {
            document.getElementById(key).value = step4Data[key];
        }

        let step5Data = JSON.parse(sessionStorage.getItem('step5'));
        for (let key in step5Data) {
            document.getElementById(key).value = step5Data[key];
        }

        let step6Data = JSON.parse(sessionStorage.getItem('step6'));
        for (let key in step6Data) {
            document.getElementById(key).value = step6Data[key];
        }

        let step7Data = JSON.parse(sessionStorage.getItem('step7'));
        for (let key in step7Data) {
            document.getElementById(key).value = step7Data[key];
        }

        let step8Data = JSON.parse(sessionStorage.getItem('step8'));
        for (let key in step8Data) {
            document.getElementById(key).value = step8Data[key];
        }

        let step9Data = JSON.parse(sessionStorage.getItem('step9'));
        for (let key in step9Data) {
            document.getElementById(key).value = step9Data[key];
        }
    });


</script>
