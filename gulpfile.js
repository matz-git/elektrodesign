'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var concat = require('gulp-concat');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-minify-css');
var livereload = require('gulp-livereload');
var uglify = require('gulp-uglify');

var paths = {
    scss: ['assets/scss/**/*.scss','assets/scss/**/*.sass'],
    css: [ './node_modules/purecss/build/pure-min.css', './node_modules/purecss/build/grids-responsive-min.css' ],
    php: '**/*.php',
    scripts: ['!assets/js/map.js', 'assets/js/*.js'],
    plugins: ['./node_modules/jquery/dist/jquery.js', './node_modules/jquery-validation/dist/jquery.validate.js']
    //plugins: []

};

gulp.task('sass', function () {
    gulp.src('assets/scss/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(concat('styles.css'))
        .pipe(autoprefixer({
            browsers: '> 5%'
        }))
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('assets/css'))
        .pipe(livereload());
});

gulp.task('compress', function () {
    gulp.src(paths.scripts)
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/build'))
        .pipe(livereload());
});

gulp.task('plugins', function(){
    gulp.src(paths.plugins)
        .pipe(concat('plugins.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/build'));
    gulp.src(paths.css)
        .pipe(concat('plugins.css'))
        .pipe(autoprefixer({
            browsers: '> 5%'
        }))
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('assets/css'));
});

gulp.task('default', ['sass', 'compress', 'plugins']);

gulp.task('watch', function () {
    livereload({start: true});
    gulp.watch(paths.scss, ['sass']);
    gulp.watch(paths.scripts, ['compress']);
    gulp.src(paths.php).pipe(watch(paths.php)).pipe(livereload());
});
