var gulp =          require('gulp');
var stylus =        require('gulp-stylus');
var sourcemaps =    require('gulp-sourcemaps');
var useref =        require('gulp-useref');     //Конкатенация js файлов прописанных в штмл
var uglify =        require('gulp-uglify');     //Минифицировать js
var gulpIf =        require('gulp-if');         //Если
var cssnano =       require('gulp-cssnano');    //Минифицировать css
var imagemin =      require('gulp-imagemin');   //Минифицировать gps, png, svg
var cache =         require('gulp-cache');      //Кеш для картинок
var del =           require('del');
var nib =           require ('nib');
var imagemin =      require('gulp-imagemin');
gulp.task('stylus',function () {
    return gulp.src(['app/stylus/**/*.styl','!app/stylus/**/_*.styl'])     // берем файл
        .pipe(sourcemaps.init())
        .pipe(stylus({ use: nib() }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('app/css'));
});
gulp.task('watch', function() {
    gulp.watch('app/stylus/**/*.styl',['stylus']);
});
//Минифицировать  только js
gulp.task('useref', function(){
    return gulp.src('app/*.html')
        .pipe(useref())
        .pipe(gulpIf('*.js', uglify()))
        // Minifies only if it's a CSS file
        .pipe(gulpIf('*.css', cssnano()))
        .pipe(gulp.dest('dist'))
});
gulp.task('images', function(){
    return gulp.src('app/images/**/*.+(png|jpg|jpeg|gif|svg)')
    // Caching images that ran through imagemin
        .pipe(cache(imagemin({
            interlaced: true
        })))
        .pipe(gulp.dest('dist/images'))
});
gulp.task('fonts', function() {
    return gulp.src('app/fonts/**/*')
        .pipe(gulp.dest('dist/fonts'))
});
gulp.task('clean:dist', function() {
    return del.sync('dist');
});
gulp.task('build',['clean:dist','useref','images','fonts'], function() {
    console.log('Building files');
});
