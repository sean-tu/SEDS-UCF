var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync');
var php = require('gulp-connect-php');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if'); 
var useref = require('gulp-useref'); 
var cssnano = require('gulp-cssnano'); 
var imagemin = require('gulp-imagemin'); 
var cache = require('gulp-cache'); 
var del = require('del'); 
var runSequence = require('run-sequence'); 

//  BUILD TASKS
gulp.task('build', function(callback) {
	runSequence(
		'clean:dist',
		['sass', 'useref', 'images', 'fonts'],
		callback 
	)
})

gulp.task('clean:dist', function() {
	return del.sync('dist'); 
})

// OPTIMIZATION TASKS
gulp.task('images', function() {
	return gulp.src('app/images/**/*.+(png|jpg|gif|svg)')
	.pipe(cache(imagemin({
		interlaced: true
	}))) 
	.pipe(gulp.dest('dist/images'))
})


gulp.task('fonts', function() {
	return gulp.src('app/fonts/**/*')
	.pipe(gulp.dest('dist/fonts'))
})

gulp.task('useref', function() {
	return gulp.src('app/*.+(html|php)')
	.pipe(useref())
	.pipe(gulpIf('*.js', uglify()))
	.pipe(gulpIf('*.css', cssnano()))
	.pipe(gulp.dest('dist'))
}); 

// BROWSER TESTING TASKS
var reload = browserSync.reload;

gulp.task('php', function() {
	php.server({
		base: 'app',
		port: 3000,
		keepalive: true
	})
})

gulp.task('browser-sync', ['php'], function() {
	browserSync({
		proxy: 'http://localhost:80/SEDS/app/index.php'
	})
})

gulp.task('sass', function() {
	return gulp.src('app/scss/**/*.scss')
	.pipe(sass())
	.pipe(gulp.dest('app/css'))
	.pipe(browserSync.reload({
		stream: true
	}))
})

gulp.task('watch', ['sass'], function() {
	gulp.watch('app/scss/**/*.scss', ['sass']);
	gulp.watch('app/**/*.html', browserSync.reload);
	gulp.watch('app/*.php', browserSync.reload);
	// gulp.watch('app/**/*.php', ['reload']);
	gulp.watch('app/js/**/*.js', browserSync.reload);
	
}) 

gulp.task('default', function(callback) {
	runSequence(
		['sass', 'browser-sync', 'watch'],
		callback
	)
})
