var gulp = require('gulp');
var less = require('gulp-less');
var path = require('path');

var cleanCSS = require('gulp-clean-css');

// gulp.task('less', function () {
//   return gulp.src('./assets/less/**/*.less')
//     .pipe(less({
//       paths: [ path.join(__dirname, 'less', 'includes') ]
//     }))
//     .pipe(gulp.dest('./'));
// });

gulp.task('less', function () {
  return gulp.src('./assets/less/**/*.less')
    .pipe(less())
    .pipe(cleanCSS({ compatibility: 'ie8' })) // Ajoutez cette ligne
    .pipe(gulp.dest('./'));
});

gulp.task('watch', function () {
  gulp.watch('./assets/less/**/*.less', gulp.series('less'));
});

gulp.task('default', gulp.series('less', 'watch'));
