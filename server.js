const budo = require('budo');

budo('src/javascript/main.js', {
	serve: 'build/bundle.js',
	live: true,
	open: true,
	dir: 'public',
	stream: process.stdout,
	watchGlob: '**/*.{html,css,frag,vert,glsl}',
	browserify: {
		transform: [
			[ 'babelify', { 
				plugins: [ 'transform-decorators-legacy' ],
				presets: [ 'es2015', 'stage-0' ]
			} ]
		],
		paths: [
			__dirname + '/src/javascript'
		],
		insertGlobalVars: {
			// THREE: (file, dir) => `require('three')`
		}
	}
});