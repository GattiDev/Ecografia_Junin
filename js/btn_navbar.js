'use strict';
//------------------------->  Funcion de los Botones 

//----> Variales
var state_address = '';
var state_component = '';

//------------------------->  Funcion de las Opciones 
function timer(){
    setTimeout(function(){
        location.reload();
    }, 2000);
}

/*unction btn_exit(name_id){
    var exit_modal = document.querySelector(name_id);
    exit_modal.style.display = "none";
};*/

function mostrar(modal){
    var views = document.querySelector(modal);
    views.style.display = "block";
}

function ocultar(tb){
    var disgise_tb = document.querySelector(tb); //-> Tb User
    disgise_tb.style.display = "none";
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////// HOME ///////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////



function btn_informeMedico(){
    /*---> Deshabilito <---*/
    ocultar('#home');
    //ocultar('.component');    
    
    $(".InformeMédico").show(); //---> Visible
    $('.InformeMédico').load('informeMédico.php'); //--->  Cargo la tabla

};


/*function btn_informeMedico(){
    /---> Deshabilito <---/
    ocultar('.home');
    ocultar('.address');    
    

    /---> Titulo <---/
    enable('COMPONENT');
    
    /---/ Condición/---/
	if(state_component == ''){
        $(".component").show(); //---> Visible
        $('.component').load('hola3.html'); //--->  Cargo la tabla
		state_component = 'La tabla ya esta cargada';
	}else{
		var component = document.querySelector(".component");
		component.style.display = "block";
	}
    
};*/