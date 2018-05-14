//__________________ IMPORT END __________________
var gulp = require('gulp'); // Framework for gulp

// var beep = require('beepbeep');
var babel = require('gulp-babel'); // transpiles JavaScript to backwardscompatible js-code
var sass = require('gulp-sass'); // compiles sass to css
var postcss = require('gulp-postcss'); // handels css postprocessing
var cssnext = require("postcss-cssnext");  // Handels css autoprefixes and more
var lost = require('lost'); // adds css lost-grid properties
var rucksack = require('rucksack-css'); // Adds functionslity to css
var cssnano = require('cssnano'); // Minifies css-files
var plumber = require('gulp-plumber'); // Handels err for gulp-watch
var gutil = require( 'gulp-util' );
var ftp = require( 'vinyl-ftp' );
var minifyjs = require('gulp-js-minify');



// var onError = function (err) {
//     beep();
//     gutil.log(gutil.colors.green(err));
// };
//__________________ IMPORT END __________________




//__________________ SETUP __________________
// Folders
var src = "src/"; // Source destination
var dist = "dist/"; // Distribution destination

// FTP
var host = 'vsrv59.vmc1.systemina.dk';
var user = 'ftp_who2018';
var password = 'I1OFfq378U';

//__________________ SETUP END __________________




//__________________ TASKS __________________

gulp.task('sass', function(){
    return gulp.src(src + 'sass/*.sass')
      // .pipe(plumber({errorHandler: onError}))
      .pipe(plumber())
      .pipe(sass())
      .pipe(gulp.dest(src + 'css/'));
});

gulp.task('css', function () {
  var processors = [
    lost,
    rucksack(),
    cssnext,
    cssnano
  ];

  return gulp.src(src + 'css/*.css')
    .pipe(plumber())
    .pipe(postcss(processors))
    .pipe(gulp.dest(dist + "css"));
});

gulp.task('js', function(){
  return gulp.src(src + 'js/*.js')
    .pipe(plumber())
    .pipe(babel({
      presets: ['babel-preset-env']
    }))
    // .pipe(minifyjs())
    .pipe(gulp.dest(dist + 'js'));
});

gulp.task('html', function(){
  return gulp.src(src + '*')
    .pipe(gulp.dest(dist ));
});

gulp.task('php', function(){
  return gulp.src(src + 'inc/*')
    .pipe(gulp.dest(dist + 'inc' ));
});

gulp.task('config', function(){
  return gulp.src(src + 'config/*')
    .pipe(gulp.dest(dist + 'config' ));
});

gulp.task('case', function(){
  return gulp.src(src + 'case/*')
    .pipe(gulp.dest(dist + 'case' ));
});


// // FTP tasks
gulp.task( 'deploy', function () {


    var conn = ftp.create( {
        host:     host,
        user:     user,
        password: password,
        parallel: 10,
        log:      gutil.log
    } );

    return gulp.src( 'dist/**', { base: 'dist/', buffer: true } )
        .pipe(plumber())
        .pipe( conn.newer( '/' ) ) // only upload newer files
        .pipe( conn.dest( '/' ) );

} );


//__________________ TASKS END__________________




//__________________ MASTER __________________
gulp.task('default', ['sass', 'css' ] );
gulp.task('watch', function(){



  gulp.watch(src + 'sass/*.sass' ,['sass']); // sass
  gulp.watch(src + 'sass/*/*.sass' ,['sass']); // sass_partials
  gulp.watch(src + 'css/*.css' ,['css']); // css, postcss
  gulp.watch(src + 'js/*.js' ,['js']); // Babel
  gulp.watch(src + '*', ['html']);
  gulp.watch(src + 'inc/*', ['php']);
  gulp.watch(src + 'case/*', ['case']);
    gulp.watch(src + 'config/*', ['config']);
  // gulp.watch(dist + '**' ,['deploy']); // FTP (Grap any file in dist an upload to server)
});
//__________________ MASTER END __________________




//__________________ NOTES __________________
//  ___GULP SETUP___ STEP BY STEP

// 1. - Open terminal and cd to project root
// 2. - npm install --save-dev gulp
// 3. - Create gulpfile.js (And copy this example)


// set up folder structur
  // App / source <-- for source code
  // Dist <-- for output destination


// posibilities
 // post css
 // minifie css
 // optimize images - gulp-imagemin
 // minifie javascript - gulp-uglify





 // WORDPRESS SETUP___
  // - sass compile
  // - css autoprefixe
  // - css minify
  // - FTP uploade
//__________________ NOTES END __________________
