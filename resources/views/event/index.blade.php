@extends('layouts.app')

@section('custom-css')
    <style>
        /* desktop */
        .tempo {
            width: 100%;
            height: 100%;
            margin: 0;
            background: var(--cam);
        }


        li {
            display: inline-block;
            font-size: 24px;
            letter-spacing: 5px;
            text-transform: uppercase;
            padding: 30px 30px;
        }


        #tempo {
            text-align: center;
            color: #F8F8FF;
            padding-top: 400px;
            padding-bottom: 350px;
        }


        #dias,
        #horas,
        #minutos,
        #segundos {
            font-size: 50px;

        }



        /* mobile */
        @media screen and (max-width: 800px) {
            li {
                font-size: 20px;
                display: block;
            }

            #dias,
            #horas,
            #minutos,
            #segundos {
                font-size: 34px;
            }

            #tempo {
                padding-top: 30px;
            }
        }


        @media screen and (max-width: 500px) {
            li {
                font-size: 18px;
                display: block;
            }

            #dias,
            #horas,
            #minutos,
            #segundos {
                font-size: 30px;
            }
        }


        /* created by magda pimentel, august 2017 - 31 Dias de Código */

    </style>
@endsection

@section('content') 
    <div id="tempo" class="tempo">
    
        <ul>

            <!-- dias -->
            <li>
                <span id="dias">
                </span>
                <p>Days</p>
            </li>


            <!-- horas -->
            <li>
                <span id="horas">
                </span>
                <p>Hours</p>
            </li>


            <!-- minutos -->
            <li>
                <span id="minutos">
                </span>
                <p>Minutes</p>
            </li>


            <!-- segundos -->
            <li>
                <span id="segundos">
                </span>
                <p>Seconds</p>
            </li>

        </ul>

    </div>
@endsection


@section('custom-js')
    <script>
        // definir o cálculo do tempo em dias, horas, minutos e segundos 
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;


        // definir a data para a contagem regressiva 
        let contagemTempo = new Date('Feb 1, 2022 00:00:00').getTime(),


            // atualizar a contagem regressiva a cada 1 segundo  
            x = setInterval(function() {


                // encontrar a data de agora
                let hoje = new Date().getTime(),

                    // encontrar a distância entre a data de agora e a data da contagem regressiva    
                    distancia = contagemTempo - hoje;


                // aparecer no ecrã a contagem em dias, horas, minutos e segundos e corresponder a mesma ao cálculo do tempo definido acima      
                document.getElementById('dias').innerHTML = Math.floor(distancia / (day)),
                    document.getElementById('horas').innerHTML = Math.floor((distancia % (day)) / (hour)),
                    document.getElementById('minutos').innerHTML = Math.floor((distancia % (hour)) / (minute)),
                    document.getElementById('segundos').innerHTML = Math.floor((distancia % (minute)) / second);


                // quando a contagem terminar, desaparecer a data e aparecer uma mensagem 
                if (distancia < 0) {
                    clearInterval(x);
                    document.getElementById("tempo").innerHTML = "FIM";
                }

            }, second);


        /* created by magda pimentel, august 2017 - 31 Dias de Código */
    </script>
@endsection
