var elixir = require('laravel-elixir');
    postStylus = require('poststylus')
    rupture = require('rupture');
    lost = require('lost');

require('laravel-elixir-stylus');
require('laravel-elixir-imagemin');

elixir.config.sourcemaps = true;

elixir(function(mix) {

	mix
    .stylus('app.styl', null, {
        use: [postStylus(['lost', 'rupture'])]
    })

    .version([
    	'css/app.css'
    ])

    .scripts([
        'components/**/*.js',
        'app.js'
    ])
    .imagemin({
        optimizationLevel: 3,
        progressive: true,
        interlaced: true
    })

    .browserSync({ 
        proxy: 'cv.dev',
        notify: false
    });
});
