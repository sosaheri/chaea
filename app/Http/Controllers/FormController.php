<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class FormController extends Controller
{
    public function store(Request $request)
    {
// dd($request->all());

        $string = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';

        $user = User::create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'paralelo' => $request->paralelo,
                'centro_docente' => $request->centro_docente,
                'edad' => $request->edad,
                'sexo' => $request->sexo,
                'donde_trabajas' => $request->donde_trabaja,
                'nota_media' => $request->nota_media,
                'nota_alta' => $request->nota_alta,
                'nota_baja' => $request->nota_baja,
                'password' => password_hash(str_shuffle($string), PASSWORD_DEFAULT),
            ]
        );

        $form = Form::create(
            [
                'user_id' => $user->id,
                'q1' => $request->q1,
                'q2' => $request->q2,
                'q3' => $request->q3,
                'q4' => $request->q4,
                'q5' => $request->q5,
                'q6' => $request->q6,
                'q7' => $request->q7,
                'q8' => $request->q8,
                'q9' => $request->q9,
                'q10' => $request->q10,
                'q11' => $request->q11,
                'q12' => $request->q12,
                'q13' => $request->q13,
                'q14' => $request->q14,
                'q15' => $request->q15,
                'q16' => $request->q16,
                'q17' => $request->q17,
                'q18' => $request->q18,
                'q19' => $request->q19,
                'q20' => $request->q20,
                'q21' => $request->q21,
                'q22' => $request->q22,
                'q23' => $request->q23,
                'q24' => $request->q24,
                'q25' => $request->q25,
                'q26' => $request->q26,
                'q27' => $request->q27,
                'q28' => $request->q28,
                'q29' => $request->q29,
                'q30' => $request->q30,
                'q31' => $request->q31,
                'q32' => $request->q32,
                'q33' => $request->q33,
                'q34' => $request->q34,
                'q35' => $request->q35,
                'q36' => $request->q36,
                'q37' => $request->q37,
                'q38' => $request->q38,
                'q39' => $request->q39,
                'q40' => $request->q40,
                'q41' => $request->q41,
                'q42' => $request->q42,
                'q43' => $request->q43,
                'q44' => $request->q44,
                'q45' => $request->q45,
                'q46' => $request->q46,
                'q47' => $request->q47,
                'q48' => $request->q48,
                'q49' => $request->q49,
                'q50' => $request->q50,
                'q51' => $request->q51,
                'q52' => $request->q52,
                'q53' => $request->q53,
                'q54' => $request->q54,
                'q55' => $request->q55,
                'q56' => $request->q56,
                'q57' => $request->q57,
                'q58' => $request->q58,
                'q59' => $request->q59,
                'q60' => $request->q60,
                'q61' => $request->q61,
                'q62' => $request->q62,
                'q63' => $request->q63,
                'q64' => $request->q64,
                'q65' => $request->q65,
                'q66' => $request->q66,
                'q67' => $request->q67,
                'q68' => $request->q68,
                'q69' => $request->q69,
                'q70' => $request->q70,
                'q71' => $request->q71,
                'q72' => $request->q72,
                'q73' => $request->q73,
                'q74' => $request->q74,
                'q75' => $request->q75,
                'q76' => $request->q76,
                'q77' => $request->q77,
                'q78' => $request->q78,
                'q79' => $request->q79,
                'q80' => $request->q80,
            ]
        );

        $data = $this->calcChar($form);

        return view('chart')->with('sucess', 'datos registrados con exito')->with('data', $data);
    }

    public function calcChar(Form $form)
    {

        $activo = $form->q3 + $form->q5 + $form->q7 + $form->q9 + $form->q13 + $form->q20 + $form->q26 + $form->q27 + $form->q35 + $form->q37 + $form->q41 + $form->q43 + $form->q46 + $form->q48 + $form->q51 + $form->q61 + $form->q67 + $form->q74 + $form->q75 + $form->q77;
        $reflexivo = $form->q10 + $form->q16 + $form->q18 + $form->q19 + $form->q28 + $form->q31 + $form->q32 + $form->q34 + $form->q36 + $form->q39 + $form->q42 + $form->q44 + $form->q49 + $form->q55 + $form->q58 + $form->q63 + $form->q65 + $form->q69 + $form->q70 + $form->q79;
        $teorico = $form->q2 + $form->q4 + $form->q6 + $form->q11 + $form->q15 + $form->q17 + $form->q21 + $form->q23 + $form->q25 + $form->q29 + $form->q33 + $form->q45 + $form->q50 + $form->q54 + $form->q60 + $form->q64 + $form->q66 + $form->q71 + $form->q78 + $form->q80;
        $pragmatico = $form->q1 + $form->q8 + $form->q12 + $form->q14 + $form->q22 + $form->q24 + $form->q30 + $form->q38 + $form->q40 + $form->q47 + $form->q52 + $form->q53 + $form->q56 + $form->q57 + $form->q59 + $form->q62 + $form->q68 + $form->q72 + $form->q73 + $form->q73;

        $data = [
            'activo' => $activo,
            'reflexivo' => $reflexivo,
            'teorico' => $teorico,
            'pragmatico' => $pragmatico,
        ];

        return $data;
    }
}
