/**
 * Created by Tu TV on 04/9/2015.
 */
var gulp = require('gulp');
var sass = require('gulp-sass');
var livereload = require('gulp-livereload');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');

//Get project
var util = require('gulp-util');
var source = 'tv-projects/';
source += util.env.project ? util.env.project : 'main';

//Compile SASS
gulp.task('sass', function () {
    gulp.src(source + '/sass/style.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(source + '/css/'))
        .pipe(livereload());
});

//Minify CSS
gulp.task('minify-css', function () {
    return gulp.src(source + '/css/style.css')
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest(source + '/css/'));
});

//Watch task
gulp.task('watch', function () {
    livereload.listen(35729);
    gulp.watch(source + '/sass/**/*.scss', ['sass', 'minify-css']);
});

//Default task
gulp.task('default', ['sass', 'watch', 'minify-css']);