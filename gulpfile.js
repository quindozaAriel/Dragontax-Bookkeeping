var gulp = require('gulp');
var cssnano = require('gulp-cssnano');
var sass = require('gulp-sass')(require('sass'));
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');

gulp.task('css', function(){
	return gulp.src('assets/src/styles/*.scss')
	.pipe(sass())
	.pipe(gulp.dest('assets/build/styles/'));
});

// gulp.task('image',()=>
// {
//  return gulp.src('src/images/*')
//       .pipe(imagemin())
//       .pipe(gulp.dest('build/images'));
// });

gulp.task('watch', function(){
	gulp.watch('assets/src/styles/*.scss', gulp.series('css'));
	gulp.watch('assets/src/styles/imports/*.scss', gulp.series('css'));
});

gulp.task('default',gulp.series('watch'));
