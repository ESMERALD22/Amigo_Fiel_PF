<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>CONTRATO</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .formbold-mb-3 {
            margin-bottom: 15px;
        }

        #supportCheckbox:checked~div span {
            opacity: 1;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
        }

        .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 570px;
            width: 85%;
            padding: 40px;
        }

        .formbold-img {
            margin-bottom: 45px;
        }

        .formbold-form-title {
            margin-bottom: 30px;
            text-align: center;
            color: green;
        }

        .formbold-form-title h2 {
            font-weight: 600;
            font-size: 28px;
            line-height: 34px;
            color: #07074d;
        }

        .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .formbold-input-flex>div {
            width: 50%;
        }

        .formbold-form-input {
            text-align: center;
            width: 100%;
            padding: 13px 22px;
            border-radius: 5px;
            border: 1px solid #dde3ec;
            background: #ffffff;
            font-weight: 500;
            font-size: 16px;
            color: #536387;
            outline: none;
            resize: none;
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .formbold-form-label {
            color: darkblue;
            font-size: 14px;
            line-height: 24px;
            display: block;
            margin-bottom: 10px;
        }

        .formbold-btn {
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            color: white;
            cursor: pointer;
            margin-top: 25px;
        }

        .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
        }

        .narrow {
            padding: 10px;
            border: 1px solid;
            width: 500px;
            margin: 0 auto;
            font-size: 20px;
            line-height: 1.5;
            letter-spacing: 1px;
        }

        .normal {
            word-break: normal;
        }

        .breakAll {
            word-break: break-all;
        }

        .keepAll {
            word-break: keep-all;
        }

        .breakWord {
            word-break: break-word;
        }
    </style>
</head>

<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <div class="formbold-form-title">
                <h1><b>
                        <div>
                            <img class="img-fluid" src="assets/img/portfolio/logo.jpg" alt="Image" width="100px"
                                height="100px" />
                        </div>
                        <div>
                            CONTRATO DE ADOPCIÓN No.{{ $contrato->id }}
                        </div>
                </h1>
            </div>


            <form enctype="multipart/form-data">
                @csrf
                <br />
                <br />
                <div class="formbold-mb-3">
                    <h3 align="justify"> Reunidas las partes en {{ $contrato->lugar }}
                        el día {{ $date }} .
                        <br />
                        <br />
                        <label>Por una parte el adoptante </label> {{ $contrato->Adoptante1->nombre }} mayor de edad,
                        con
                        documento de identificación DPI No. {{ $contrato->Adoptante1->dpi }}, teléfonos
                        {{ $contrato->Adoptante1->telefono1 }} -- {{ $contrato->Adoptante1->telefono2 }}, correo
                        electrónico
                        {{ $contrato->Adoptante1->correo }} y con domicilio en {{ $contrato->Adoptante1->direccion }}.
                    </h3>
                    <br />
                    <br />

                    <h3 align="justify">
                        <label>Y por otra parte</label> {{ $contrato->User->name }} en representación de
                        <label>ASOCIACIÓN AMIGO FIEL</label> con domicilio en el municipio de Quetzaltenango,
                        departamento
                        de Quetzaltenango.
                    </h3>
                    <h3 align="justify">
                        <label> Adoptante y protectora </label>, de común acuerdo, fijan los términos del presente
                        contrato
                        de adopción del animal de compañía cuyas características se detallan a continuación.
                    </h3>
                    <br />
                    <br />

                    <h3 align="justify">
                        <label> Nombre:</label>
                        {{ $contrato->Animal1->nombre }}
                    </h3>

                    <h3 align="justify">
                        <label> Especie:</label>
                        {{ $contrato->Animal1->TipoAnimal->tipo }}
                    </h3>
                    <h3 align="justify">
                        <label> Sexo:</label>
                        {{ $contrato->Animal1->sexo }}
                    </h3>
                    <h3 align="justify">
                        <label> Raza:</label>
                        {{ $contrato->Animal1->raza }}
                    </h3>
                    <h3 align="justify"> <label> Nombre Raza:</label>
                        {{ $contrato->Animal1->nombreRaza }}s
                    </h3>
                    <h3 align="justify">
                        <label> Fecha de nacimiento:</label>
                        {{ $contrato->Animal1->fechaNacimiento }} -------- <label>Se desconoce:</label> ___
                    </h3>
                    <h3 align="justify"> <label> Edad:</label>
                        {{ $contrato->Animal1->edad }}
                    </h3>
                    <h3 align="justify">
                        <label> Observaciones:</label>
                        {{ $contrato->observacion }}
                    </h3>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />

                    <div class="formbold-form-title">
                        <h1><b>
                                <div>
                                    <img class="img-fluid" src="assets/img/portfolio/logo.jpg" alt="Image"
                                        width="100px" height="100px" />
                                </div>
                                <div>
                                    CLÁUSULAS DEL CONTRATO
                                </div>
                    </div>

                    <h5 align="justify">
                        <label>La Asociación Amigo Fiel entrega al animal antes referido siempre y cuando, el Adoptante
                            acepte cumplir las siguientes obligaciones:</label>
                    </h5>
                    <h5 align="justify">
                        1. AMIGO FIEL entregará al animal, esterilizado y vacunado, de NO ser posible entregarlo en
                        estas
                        condiciones, lo hará posteriormente. El adoptante se compromete a pagar la totalidad de la
                        esterilización, al momento de entregarle el animal adoptado.
                    </h5>
                    <h5 align="justify">
                        2. Todos los animales entregados en adopción por Asociación Amigo Fiel son exclusivamente de
                        compañía y para convivir con el adoptante. Si se detectara que el animal adoptado está siendo
                        utilizado para cualquier otro fin distinto a lo acordado, podrá ser retirado de su hogar por la
                        Asociación.
                        Así mismo el animal no será vendido, regalado o abandonado por el Adoptante. De no
                        serle
                        posible seguir cuidando del adoptado deberá avisar a Asociación Amigo Fiel con un mes de
                        anticipación, esto para que la Asociación pueda organizarse en buscarle un hogar temporal al
                        adoptado ya que después de adoptados los animales no pueden regresar de manera inmediata a un
                        Hogar
                        Temporal.
                    </h5>
                    <h5 align="justify">
                        3. El Adoptante debe asegurarse de No dejar sufrir las inclemencias del tiempo al animal
                        adoptado, a
                        curarlo o medicarlo si así lo necesita, a no amarrarlo por ningún motivo, a ocuparse de la
                        higiene
                        que requiera la nueva mascota.
                    </h5>
                    <h5 align="justify">
                        4. Queda prohibidas todo tipo tipo de amputaciones o mutilaciones que obedezcan a razones
                        estéticas
                        incluidas corte de orejas y rabo.
                    </h5>
                    <h5 align="justify">
                        5. El Adoptante debe permitir la Supervisión del Adoptado, pues esta se realiza con el único
                        objeto
                        de verificar la adecuada adaptación del mismo a su nuevo entorno.
                    </h5>
                    <h5>
                        6. El Adoptante debe informar a Amigo Fiel de cualquier cambio de domicilio, o de datos de
                        contacto
                        como teléfonos correo electrónico, así como de la defunción o pérdida del adoptado.
                    </h5>
                    <h5 align="justify">
                        7. En caso de incumplimiento de alguna de las obligaciones y condiciones del presente contrato,
                        la
                        Asociación podrá requerir la devolución del animal adoptado, a quien en cuyo caso el Adoptante
                        entregará voluntariamente y en las debidas condiciones físicas y psíquicas. Si el adoptante se
                        negara a devolver al animal, se hará cargo de los gastos que sobrevengan por incumplimiento del
                        contrato de adopción y la Asociación podrá auxiliarse de las autoridades competentes para
                        retirarlo.
                        Así mismo si el animal presentara daños causados directa o indirectamente por el Adoptante, éste
                        asumirá los gastos veterinarios por el tratamiento requerido por el animal.
                    </h5>
                    <h5 align="justify">
                        8. Desde el momento en que tiene lugar la firma de este contrato y la entrega del animal
                        adoptado,
                        Asociación Amigo Fiel queda exonerada de toda responsabilidad derivada de la custodia o tenencia
                        del
                        animal adoptado por parte del adoptante.
                    </h5>
                    <h5 align="justify">
                        <label> El Adoptante declara: Haber leído con detenimiento, y entendimiento el contenido íntegro
                            del
                            presente contrato, y estar conforme con él. Asimismo manifiesta, que la adopción ha sido
                            consensuada con el resto de personas que convivirán con el animal adoptado y que están
                            conformes
                            con la adopción.</label>
                    </h5>
                    <br />
                    <br />

                    <h5 align="center">
                        ____________________________________________
                    </h5>
                    <h5 align="center"> Firma Asociación Amigo Fiel
                    </h5>
                    <br />
                    <br />
                    <br />

                    <h5 align="center">
                        ____________________________________________
                    </h5>
                    <h5 align="center"> Firma del Adoptante
                    </h5>
            </form>
        </div>
    </div>

</body>

</html>
