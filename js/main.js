//Провайдер для аутентификации(еще не используется)
var authProvider = {
    //авторизация
    login: function (login, pass, remember, callback) {
        var params = {
            login: login,
            password: pass,
            remember: remember
        };

        return requestControl.sendRequestWithControl(api.auth.login, 'auth_login', params, callback);
    },
    // регистрация
    registration: function (email, password, name, subscribe, callback) {
        var params = {
            login: email,
            password: password,
            name: name,
            subscribe: subscribe
        };

        return requestControl.sendRequestWithControl(api.auth.registration, 'auth_registration', params, callback);
    },
    // проверка авторизации пользователя
    check: function (callback) {
        return api.auth.check(callback);
    },
    // восстановление пароля
    resetPass: function (login, callback) {
        var params = {
            login: login
        };

        return requestControl.sendRequestWithControl(api.auth.resetPass, 'auth_resetPass', params, callback);
    }
};