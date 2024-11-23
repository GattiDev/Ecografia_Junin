'use strict';
//------------------------->  Funcion de los Botones 

//----> Variales
var state_paciente = '';
var state_ecografia = '';
var state_planillaMedica = '';
var state_editarPlanilla = '';
var state_agregarImg = '';
/*var state_informeMedico = '';*/
var state_archive  = '';

//------------------------->  Funcion de las Opciones 
function timer(){
    setTimeout(function(){
        location.reload();
    }, 2000);
}

function btn_exit(name_id){
    var exit_modal = document.querySelector(name_id);
    exit_modal.style.display = "none";
};

function mostrar(modal){
    var views = document.querySelector(modal);
    views.style.display = "block";
}

function ocultar(tb){
    var disgise_tb = document.querySelector(tb); //-> Tb User
    disgise_tb.style.display = "none";
}

function enable(Descrip){
    var titulo = document.querySelector("#titulo"); //---> Obtengo el Div del titulo
    titulo.innerHTML = Descrip; //---> Modifico el Titulo
    
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////// HOME ///////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function btn_paciente(){
    ocultar('.ecografia');
	ocultar('.planillaMedica');
    ocultar('.editarPlanilla');
    ocultar('.agregarImg');    
    ocultar('.InformeMedico');
	ocultar('.Archive');    

    enable('Listado de Pacientes');
    
	if(state_paciente == ''){
        $(".paciente").show(); 
        $('.paciente').load('../views/paciente.php');
		state_paciente = 'Ya esta cargado';
	}else{
		var paciente = document.querySelector(".paciente");
		paciente.style.display = "block";
	}
    
};

function btn_ecografia(){
    ocultar('.paciente');
    ocultar('.planillaMedica');
    ocultar('.editarPlanilla');
    ocultar('.agregarImg'); 
    ocultar('.InformeMedico');
    ocultar('.Archive');

    enable('Listado de Ecografías');
    if(state_ecografia == ''){
        $(".ecografia").show();
        $(".ecografia").load('../views/ecografia.php');
        state_ecografia = 'Ya esta cargado';
    }else{
        var ecografia = document.querySelector(".ecografia");
        ecografia.style.display = "block";
    }
    
};

function btn_planillaMedica(){
    ocultar('.paciente');
    ocultar('.ecografia');
    ocultar('.editarPlanilla');
    ocultar('.agregarImg'); 
    ocultar('.InformeMedico');
    ocultar('.Archive');

    enable('Planilla Médica');

    if(state_planillaMedica == ''){
        $(".planillaMedica").show();
        $(".planillaMedica").load('../views/planillaMedica.php');
        state_planillaMedica = 'Ya esta cargado';
    }else{
        var planillaMedica = document.querySelector(".planillaMedica");
        planillaMedica.style.display = "block";
    } 
};

function btn_editarPlanilla(){
    ocultar('.paciente');
    ocultar('.ecografia');
    ocultar('.planillaMedica');
    ocultar('.agregarImg'); 
    ocultar('.InformeMedico');
    ocultar('.Archive');

    enable('Editar Planilla Médica');

    if(state_editarPlanilla == ''){
        $(".editarPlanilla").show();
        $(".editarPlanilla").load('../views/editarPlanilla.php');
        state_editarPlanilla = 'Ya esta cargado';
    }else{
        var editarPlanilla = document.querySelector(".editarPlanilla");
        editarPlanilla.style.display = "block";
    }
    
};

function btn_agregarImg(){
    ocultar('.paciente');
    ocultar('.ecografia'); 
    ocultar('.planillaMedica');
    ocultar('.editarPlanilla');
    ocultar('.InformeMedico');
    ocultar('.Archive');

    enable('Agregar Imagenes');

    if(state_agregarImg == ''){
        $(".agregarImg").show();
        $(".agregarImg").load('../views/agregarImg.php');
        state_agregarImg = 'Ya esta cargado';
    }else{
        var agregarImg = document.querySelector(".agregarImg");
        agregarImg.style.display = "block";
    }
    
};

/*function btn_informesMedicos(){
    ocultar('.paciente');
    ocultar('.ecografia');
	ocultar('.planillaMedica'); 
    ocultar('.editarPlanilla');
    ocultar('.agregarImg');   
    ocultar('.Archive'); 

    enable('Informes Médicos');
    
    if(state_informeMedico == ''){
        $(".InformeMedico").show();
        $(".InformeMedico").load('../views/informeMedico.php');
        state_informeMedico = 'Ya esta cargado';
    }else{
        var InformeMedico = document.querySelector(".InformeMedico");
        InformeMedico.style.display = "block";
    }
}*/

function btn_archive(){
    ocultar('.paciente');
    ocultar('.ecografia');
	ocultar('.planillaMedica');
    ocultar('.editarPlanilla'); 
    ocultar('.agregarImg');   
    ocultar('.InformeMedico');

    enable('Archivos');
    
    if(state_archive == ''){
        $(".Archive").show();
        $(".Archive").load('../views/archive.php');
        state_archive = 'Ya esta cargado';
    }else{
        var archive = document.querySelector(".Archive");
        archive.style.display = "block";
    }
}