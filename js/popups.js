	var cart = {};
	let login = document.getElementById('cd-login');
	let registr = document.getElementById('cd-signup');
	let popupRegistr = document.querySelector('.js_btn');
	let popupLogin = document.querySelector('.js__alreadyReg');
	let popupToggle = document.getElementById('myBtn');
	let popupClose = document.querySelector('.close');
	

	popupRegistr.onclick = function(){
		login.style.display = "none";
		registr.style.display = "block";
	};
	

		
    let catalog = document.getElementById('fancybox-stage');
    let popupCatalog = document.getElementById('myBtnCatalog');

    popupCatalog.onclick = function(){
        catalog.style.display = "block";
    };

	
	popupLogin.onclick = function(){
		registr.style.display = "none";
		login.style.display = "block";
	};	
   popupToggle.onclick = function(){
	   login.style.display = "block";
   };

   popupClose.onclick = function(){
	   login.style.display = "none";
	   registr.style.display = "none";
   };
   window.onclick = function(e){
	   if(e.target==login || e.target == registr || e.target == catalog){
		   login.style.display = "none";
		   registr.style.display = "none";
		   catalog.style.display = "none";
		   
	   }
   };
 
   


	
