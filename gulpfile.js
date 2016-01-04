var gulp = require('gulp');
var plugins = require("gulp-load-plugins")({
  pattern: ['gulp-*', 'gulp.*'],
  replaceString: /\bgulp[\-.]/
});

var wpDest = 'cms/wp-content/themes/indosiar21/';
var basePath = 'node_modules/';

var plumberErrorHandler = {
	errorHandler: plugins.notify.onError({
		title: 'Gulp',
		message: 'Error: <%= error.message %>'
	})
};
gulp.task('sass', function(){
	return gulp.src(wpDest + 'scss/style.scss')
		.pipe(plugins.plumber(plumberErrorHandler))
		.pipe(plugins.sass())
		.pipe(gulp.dest(wpDest))
		.pipe(plugins.livereload());
});

gulp.task('js', function(){
	return gulp.src([
			wpDest + '/js/*.js',
			basePath + '/bootstrap-sass/assets/javascripts/bootstrap.js'
		])
		// .pipe(plugins.jshint())
		// .pipe(plugins.jshint.reporter('fail'))
		.pipe(plugins.concat('main.js'))
		.pipe(gulp.dest(wpDest))
		.pipe(plugins.livereload());
});

// still not working
gulp.task('concat-js', function () {
    return gulp.src(wpDest + '*.php')
        .pipe(plugins.useref())
        .pipe(gulp.dest(wpDest));
});
 
 gulp.task('watch',  function(){
 	livereload.listen();
 	gulp.watch('./src/scss/main.scss', ['sass']);
 	gulp.watch('./src/js/*.js', ['js']);
 });


gulp.task('default', ['sass', 'js', 'watch'], function(){
 
    console.log('Start Gulp Tasks')
 
});
