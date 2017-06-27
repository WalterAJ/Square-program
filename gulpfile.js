var gulp = require('gulp');

gulp.task('default', function() {
  // 将你的默认的任务代码放在这
});

var clean = require('gulp-clean');

gulp.task('clean', function() {
    return gulp.src(['dist/css', 'dist/js'], { read: false })
               .pipe(clean());
});

var less = require('gulp-less');

gulp.task('styles', function() {
    return gulp.src('src/less/*.less') //源文件路径
        .pipe(less()) //less编译
        .pipe(gulp.dest('dist/css')) //目的路径
});

var autoprefixer = require('gulp-autoprefixer');

gulp.task('styles', function() {
    return gulp.src('src/css/*.css') //源文件路径
        .pipe(autoprefixer()) //自动前缀
        .pipe(gulp.dest('dist/css')) //目的路径
});
var base64 = require('gulp-base64');

gulp.task('styles', function() {
    return gulp.src('src/css/*.css') //源文件路径
        .pipe(base64()) //base64编码
        .pipe(gulp.dest('dist/css')) //目的路径
});

var cssmin = require('gulp-minify-css');

gulp.task('styles', function() {
    return gulp.src('src/css/*.css') //源文件路径
        .pipe(cssmin()) //css压缩
        .pipe(gulp.dest('dist/css')) //目的路径
});
var order = require("gulp-order");

gulp.task('scripts', function() {
    return gulp.src('src/js/*.js')  //源文件路径
        .pipe(order([
            "src/js/config.js",
            "src/js/index.js"
        ]))
        .pipe(gulp.dest('dist/js')) //目的路径
})
var concat = require('gulp-concat');

gulp.task('scripts', function() {
    return gulp.src('src/js/*.js')  //源文件路径
        .pipe(concat('main.js'))  //合并文件
        .pipe(gulp.dest('dist/js')) //目的路径
})