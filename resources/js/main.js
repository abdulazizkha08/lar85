requirejs.config({
    waitSeconds: 0,
    baseUrl: '',
    paths: {
        'jquery': 'https://code.jquery.com/jquery-3.6.0.min',  // Используем CDN для jQuery
        'jquery-typeahead': '../../node_modules/jquery-typeahead/dist/jquery.typeahead.min'
    },
    shim: {
        'jquery-typeahead': {
            deps: ['jquery']
        }
    },
    priority: [
        'jquery'
    ]
});

requirejs(["app"]);
