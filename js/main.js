(function(){
    "use strict";
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function(){
       var nombre = document.getElementById('nombre');
       var apellido = document.getElementById('apellido');
       var email = document.getElementById('email');
        var pase_dia = document.getElementById('pase_un_dia');
        var pase_dos_dias = document.getElementById('pase_dos_dias');
        var pase_todos_dias = document.getElementById('pase_todos_dias');
        var calcular = document.getElementById('calcular');
        var errorDIV = document.getElementById('error');
        var btnRegistro= document.getElementById('btnRegistro');
        var resultado = document.getElementById('lista_productos');
        var sum = document.getElementById('suma_total');
        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas')
        calcular.addEventListener('click', calcularMontos);
        pase_dia.addEventListener('blur', mostrar_dias);
        pase_dos_dias.addEventListener('blur', mostrar_dias);
        pase_todos_dias.addEventListener('blur', mostrar_dias);
        nombre.addEventListener('blur', function(){
           if(this.value == ''){
               errorDIV.style.display = 'block';
               errorDIV.innerHTML = "El campo nombre es necesario";
               nombre.style.border = '1px solid red';
           } 
        });
        apellido.addEventListener('blur', function(){
           if(this.value == ''){
               errorDIV.style.display = 'block';
               errorDIV.innerHTML = "El campo apellido es necesario";
               apellido.style.border = '1px solid red';
           } 
        });
        email.addEventListener('blur', function(){
           if(this.value == ''){
               errorDIV.style.display = 'block';
               errorDIV.innerHTML = "El campo email es necesario";
               email.style.border = '1px solid red';
           } 
        });
        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === ''){
                alert("Debes escoger un regalo");
                regalo.focus();
            }else{
                var boletosdias = parseInt(pase_dia.value,10) || 0,
                    boletosdosd = parseInt(pase_dos_dias.value, 10) || 0,
                    boletotodosd = parseInt(pase_todos_dias.value, 10) || 0,
                    cami = parseInt(camisas.value, 10) || 0,
                    etiq = parseInt(etiquetas.value, 10) || 0;
                var totala_pagar = (boletosdias * 30) + (boletosdosd * 45) + (boletotodosd * 50) + ((cami * 10)* 0.93) + (etiq * 2);
                var lista_pro = [];
                if(boletosdias >= 1){
                   lista_pro.push(boletosdias + ' Pases por dia');
                   }if(boletosdosd >= 1){
                   lista_pro.push(boletosdosd + ' Pases por dos dias');
                   }if(boletotodosd >= 1){
                   lista_pro.push(boletotodosd + ' Pases por todos los dias');
                   }if(cami >= 1){
                   lista_pro.push(cami + ' Camisas');
                   }if(etiq >= 1){
                   lista_pro.push(etiq + ' Etiquetas');
                   }
                resultado.style.display="block";
                resultado.innerHTML = '';
                for(var i=0; i<lista_pro.length; i++){
                   resultado.innerHTML += lista_pro[i] + '<br>';
                }
                sum.innerHTML ="$ "+ totala_pagar.toFixed(2);
            }
        }
        function mostrar_dias(){
            var boletosDia = parseInt(pase_dia.value, 10) || 0,
                boletos2Dia = parseInt(pase_dos_dias.value, 10) || 0,
                boletosCompleto = parseInt(pase_todos_dias.value, 10) || 0;
            var diasElegidos = [];
            if(boletosDia > 0){
                diasElegidos.push('viernes');
            }
            if(boletos2Dia > 0){
                diasElegidos.push('viernes','sabado');
            }
            if(boletosCompleto > 0){
                diasElegidos.push('viernes','sabado','domingo');
            }
            for( var i=0; i< diasElegidos.length; i++){
                document.getElementById(diasElegidos[i]).style.display='block';
            }
        }
    });
})();