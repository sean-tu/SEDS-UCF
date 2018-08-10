var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var php = require('gulp-connect-php');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var gulpIf = require('gulp-if'); 
var useref = require('gulp-useref'); 
var cssnano = require('gulp-cssnano'); 
var imagemin = require('gulp-imagemin'); 
var cache = require('gulp-cache'); 
var del = require('del'); 
var runSequence = require('run-sequence');

//
// Paths
//
const source = './src';
const build = './build';
const paths = {
    scss: {
        src: source + '/scss/**/*.scss',
        dest: source + '/css'
    },
    php: {
        src: source + '/**/*.php',
        dest: build
    },
    scripts: {
        src: source + '/js/**/*',
        dest: build + '/js/script.js'
    },
    images: {
        src: source + '/images/**/*.+(png|jpg|gif|svg)',
        dest: build +'/images'
    },
    fonts: {
        src: source + '/fonts/**/*',
        dest: source + '/fonts'
    }
};

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
	return gulp.src(paths.images.src)
	.pipe(cache(imagemin({

			interlaced: true
	}))) 
	.pipe(gulp.dest(paths.images.dest))
})


gulp.task('fonts', function() {
	return gulp.src(paths.fonts.src)
	.pipe(gulp.dest(paths.fonts.dest))
	// gulp.src(fontAwesome.fonts)
	// 	.pipe(gulp.dest(paths.fonts.dest));
});

// Font Awesome!
// gulp.task('move-components-fontawesome', function() {
//     gulp.src('./node_modules/font-awesome/scss/**/*')
//         .pipe(gulp.dest(paths.fonts.dest + '/font-awesome'));
// });

gulp.task('useref', function() {
	return gulp.src(source + '/*.+(html|php)')
	.pipe(useref())
	.pipe(gulpIf('*.js', uglify()))
	.pipe(gulpIf('*.css', cssnano()))
	.pipe(gulp.dest(build))
});

gulp.task('js', function() {
	gulp.src([
		// 'node_modules/jquery/dist/jquery.js',
		paths.scripts.src
	])
		.pipe(uglify())
		.pipe(concat('script.js'))
		.pipe(gulp.dest(paths.scripts.dest))
});

// BROWSER TESTING TASKS
const server = browserSync.create(); 
var stream = function() {
	server.reload({stream: true}); 
};
var reload = function() {
    server.reload();
};

gulp.task('php', function() {
	php.server({
		base: source,
		port: 3000,
		keepalive: true,
        // injectChanges: true
	})
})

gulp.task('browser-sync', function() {
    server.init({
        proxy: 'http://localhost:80/SEDS/src/index.php',
        open: true,
        // reloadDelay: 1000,
        injectChanges: true,
        browser: 'chrome',
        port: 80
    });
});

gulp.task('sass', function() {
	return gulp.src(paths.scss.src)
	.pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(sourcemaps.write())
	.pipe(gulp.dest(paths.scss.dest))
});

gulp.task('watch', ['browser-sync'], function() {
	gulp.watch(paths.scss.src, ['sass', reload]);
	gulp.watch(paths.php.src).on('change', reload);
	// gulp.watch('app/**/*.php', ['reload']);
	gulp.watch(paths.scripts.src, ['js', reload]);
	
}) 

gulp.task('default', ['sass', 'watch']);
