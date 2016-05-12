var elixir = require('laravel-elixir');
// var browserify = require('laravel-elixir-browserify');
// var gulp    = require('gulp');
// var webpack = require('webpack-stream');
// var vue     = require('vue');
// var vueify  = require('gulp-vueify');

require('laravel-elixir-vueify');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // mix.sass('app.scss');

    mix.browserify('app.js');
});


// var watchify   = require('watchify');
// var assign     = require('lodash.assign');
// var browserify = require('browserify');
// var gulp       = require('gulp');
// var source     = require('vinyl-source-stream');
// var buffer     = require('vinyl-buffer');
// var notifier   = require('node-notifier');
// var gutil      = require('gutil');
// var babelify   = require('babelify');
//
//
// var customOpts = {
// 	entries : ['./resources/assets/js/app.js'],
// 	paths   : [],
// 	debug   : true
// };
//
//
// var opts = assign({}, watchify.args, customOpts);
// var b    = watchify(browserify(opts)).transform(babelify, {/* opts */});
//
// gulp.task('default', bundle);
// b.on('update', function () {
//
// 	bundle();
//
// }); // on any dep update, runs the bundler
//
// function bundle() {
//
// 	return b.bundle()
// 		.on('error', function (err) {
//
// 			console.log(err.message);
// 			gutil.log("Browserify error:", err);
//
// 			notifier.notify({
// 				'title'   : 'Compile Error',
// 				'message' : err.message
// 			});
//
// 			this.emit("end")
// 		})
// 		.pipe(source('min.js'))
// 		// optional, remove if you don't need to buffer file contents
// 		.pipe(buffer())
//
// 		// optional, remove if you dont want sourcemaps
// 		// .pipe(sourcemaps.init({loadMaps: true})) // loads map from browserify file
// 		// // Add transformation tasks to the pipeline here.
// 		// .pipe(sourcemaps.write('./plugins/application/production/dashboards/jobbercustomerportal/js')) // writes .map file
// 		.pipe(gulp.dest('./public/js/vue'));
//
// }