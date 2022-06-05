
var form = document.querySelector('.formWithValidation')
var validateBtn = form.querySelector('.btn_normal')
var email = form.querySelector('.email')
var login = form.querySelector('.login')
var password = form.querySelector('.password')
var fields = form.querySelector('.js_field')


form.addEventListener('submit', function (event){
    event.preventDefault()
    
    var errors = form.querySelectorAll('.error')

    for(var i = 0; i < errors.length; i++){
        errors[i].remove()
    }


    for (var i = 0; i < fields.length; i++) {
        //show from error
        if(!fields[i].value){
            console.log('field is blank', fields[i])
            var error = document.createElement('div')
            error.className = 'error'
            error.style.color = 'red'
            error.innertHTML = 'Cannot be blank'
            from[i].parentElement.insertBefore(error, fields[i])
        }
    }

    
})
