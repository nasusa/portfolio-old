var elixir = require('laravel-elixir');
var rupture = require('rupture');

require('laravel-elixir-stylus');

elixir.config.sourcemaps = true;

elixir(function(mix) {

	mix
    .stylus('app.styl', null, {
        use: [
            require('poststylus')(['lost']), rupture()
        ]
    })

    .version([
    	'css/app.css'
    ])

    .scripts([
        'components/*.js',
        'app.js'
    ])

    .browserSync({ 
        proxy: 'cv.dev',
        notify: false
    });
});