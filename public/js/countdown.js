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