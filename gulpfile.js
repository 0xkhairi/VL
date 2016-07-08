

var gulp        = require('gulp'),
    browserSync = require('browser-sync'),
    // htmltidy     = require('gulp-htmltidy'),
    // htmlmin     = require('gulp-htmlmin'),
    sass        = require('gulp-sass'),
    uncss       = require('gulp-uncss'),
    prefix      = require('gulp-autoprefixer'),
    cp          = require('child_process'),
    connect     = require('gulp-connect-php');



 
gulp.task('browser-sync' ,['sass'], function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1/VL/views'
    });
  });
 
});


gulp.task('mamp-reload' ,function(){
    // browserSync.create().init();
    browserSync.reload();
  });


// gulp.task('sass', function () {
//   return gulp.src('views/assets/css/main.scss')
//     .pipe(sass.sync().on('error', browserSync.notify))
//     .pipe(gulp.dest('views/assets/css/'));
// });


// gulp.task('mhtml' ,function(){
//     return gulp.src('views/*.php')
//     .pipe(htmlmin({collapseWhitespace: true}))
//     .pipe(gulp.dest('views/'))
// });


// gulp.task('htmltidy' ,function(){
//     return gulp.src('views/*.php')
//         .pipe(htmltidy({doctype: 'html5',
//              hideComments: false,
//              indent: true}))
//         .pipe(gulp.dest('views/'));
// });


gulp.task('sass', function () {
    return gulp.src('views/assets/css/main.scss')
        .pipe(sass({
            includePaths: ['css'],
            onError: browserSync.notify
        }))
        .pipe(prefix(['last 2 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
        .pipe(gulp.dest('views/assets/css'))
        .pipe(browserSync.reload({stream:true}))
        .pipe(gulp.dest('views/assets/css'));
});

gulp.task('watch', function () {
    gulp.watch('views/assets/css/**', ['sass']);

    gulp.watch('views/assets/js/**', ['mamp-reload']);
    gulp.watch('views/*', ['mamp-reload']);
    gulp.watch('includes/*', ['mamp-reload']);
});




/**
 * Default task, running just `gulp` will compile the sass,
 * compile the jekyll site, launch BrowserSync & watch files.
 */
gulp.task('default', ['browser-sync','watch']);
