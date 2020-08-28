var gulp = require("gulp");
var uglify = require("gulp-uglify");
gulp.task('uglify', function() {
    gulp.src(["./js/*.js"]).pipe(uglify()).pipe(gulp.dest("./js"));
        //.pipe(rename({ suffix: '.min' })) // 上面如果是 ['js/*.js'],要把所有的文件都添加.min.js后缀
        
});
var babel = require("gulp-babel");

gulp.task("es",function(){
	 gulp.src(["./js/*.js"]).pipe(babel({presets: ['es2015']})).pipe(gulp.dest("./js"));
});
var minifyCSS = require("gulp-minify-css");
gulp.task("css",function(){
    gulp.src(["./css/*.css"]).pipe(minifyCSS()).pipe(gulp.dest("./css"));
});
