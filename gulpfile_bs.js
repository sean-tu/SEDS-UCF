var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var useref = require('gulp-useref');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var del = require('del');
var runSequence = require('run-sequence');

var sourcemaps = require('gulp-sourcemaps')
var autoprefixer = require('gulp-autoprefixer');
var scsslint = require('gulp-scss-lint');
var jshint = require('gulp-jshint');

var browserSync = require('browser-sync');
var connect = require('gulp-connect-php');

// Source file locations
var source = {
    sass: 'src/scss/**/*.scss',
	js: 'src/js/**/*.js',
    img: 'src/images/**/*.+(png|jpg|gif|svg)',
	php: 'src/**/*.php'
};

// Output locations
outputFolder = 'dist';
var dest = {
	css: 'src/css',
	js: outputFolder + '/js',
	img: outputFolder + '/images'
};


// var vendorLibs = {}


// CSS
gulp.task('scss-lint', function() {
	return gulp.src(source.sass)
		.pipe(scsslint())
});

gulp.task('css-build', function() {
	return gulp.src(source.sass)
		.pipe(sourcemaps.init())
		.pipe(sass()
			.on('error', sass.logError)
		)
		.pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
		}))
		.pipe(cssnano())
		.pipe(sourcemaps.write())
		.pipe(gulp.dest(dest.css))
		// .pipe(stream)
});

gulp.task('css', gulp.series('scss-lint', 'css-build'));

// Javascript
gulp.task('js-lint', function() {
	gulp.src(source.js)
		.pipe(jshint())
		.pipe(jshint.reporter('jshint-stylish'))
		.pipe(jshint.reporter('fail'))
});

gulp.task('js-build', function() {
	gulp.src(source.js)
		.pipe(uglify())
		.pipe(gulp.dest(dest.js))
		.pipe(browserSync.stream())
});

gulp.task('js', gulp.series('js-lint', 'js-build'));

//  BUILD TASKS
// gulp.task('build', function(callback) {
// 	runSequence(
// 		'clean:dist',
// 		['sass', 'useref', 'images', 'fonts'],
// 		callback
// 	)
// })
//
// gulp.task('clean:dist', function() {
// 	return del.sync('dist');
// });

// OPTIMIZATION TASKS
gulp.task('images', function() {
	return gulp.src(source.img)
	.pipe(cache(imagemin({
		interlaced: true
	}))) 
	.pipe(gulp.dest(dest.img))
});


gulp.task('fonts', function() {
	return gulp.src('src/fonts/**/*')
	.pipe(gulp.dest('dist/fonts'))
});

gulp.task('useref', function() {
	return gulp.src('src/*.+(html|php)')
	.pipe(useref())
	.pipe(gulpIf('*.js', uglify()))
	.pipe(gulpIf('*.css', cssnano()))
	.pipe(gulp.dest('dist'))
}); 

// BROWSER TESTING TASKS

// gulp.task('connect-sync', function (done) {
//     connect.server({
// 		base: 'app',
// 		port: 3000,
// 		keepalive: true
// 	});
// 	browserSync({
// 		proxy: 'http://localhost:80/SEDS/src/index.php'
// 	});
// });

// gulp.task('serve', gulp.series(
// 	'css',
// 	function(){
// 		browserSync({
// 			base: 'src',
//             proxy: 'http://localhost:80/seds/src/index.php'
//         });
// 		gulp.watch(source.sass, gulp.series('css', reload))
// 	}
// ));


// const server = browserSync.create();
//
// gulp.task('ws', function(cb) {
//     browserSync({
//         server: {
//             baseDir: 'http://localhost/seds/src'
//         },
//         port: 4000,
//         notify: false,
//         open: true
//     }, cb);
// });
//
// gulp.task('browser-sync', function(cb) {
// 	server.init({
// 		// base: 'src',
// 		// port: 3000,
// 		server: 'SEDS/src',
// 		// proxy: 'http://localhost:80/seds/src/index.php',
//         open: true
// 	});
// 	cb();
// });
// var reload = browserSync.reload({stream:true});
const server = browserSync.create();

function reload(cb) {
	server.reload();
	cb();
}

function serve(cb) {
	server.init({
		injectChanges: true,
		proxy: 'localhost:8100/',
		port: 8080,
		open: true,
		notify: false
	});
	cb();
}

function watch() {
	gulp.watch(source.sass, gulp.series(scss, reload));
}

function build() {
	gulp.series('css', serve, watch);
}

gulp.task('default', build);

gulp.task('watch', function() {
	gulp.watch(source.sass, reload);
	gulp.watch('src/**/*.html', reload);
	gulp.watch(source.php, reload);
	gulp.watch('src/js/**/*.js', reload)
});

// gulp.task('default', gulp.series('css', 'browser-sync', 'watch'));
