var gulp = require('gulp');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var cssmin = require('gulp-cssmin');
var stylus = require('gulp-stylus');
var fontmin = require('fontmin');
var concat = require('gulp-concat');

//front-end
var paths = {
    images: [
        'resources/img/*',
        'resources/img/**/*',
        'resources/img/***/**/*'
    	],
    fonts: [
        'resources/fonts/*',
		'bower_components/Ionicons/fonts/ionicons.ttf',
		//'bower_components/font-awesome/fonts/FontAwesome.otf',
    ],
    libjs: [
        //jquery
        'bower_components/jquery/dist/jquery.min.js',
		'bower_components/circliful/js/jquery.circliful.min.js',
		
        //semantic
        'bower_components/semantic/dist/semantic.min.js',
        
        //angular
/*        'bower_components/angular/angular.min.js',
        'bower_components/angular-route/angular-route.min.js',
        'bower_components/angular-superswipe/superswipe.js',
        'bower_components/angular-touch/angular-touch.min.js',
        'bower_components/angular-resource/angular-resource.min.js',
        'bower_components/angular-ui-router/release/angular-ui-router.min.js',
        'bower_components/angulartics/dist/angulartics.min.js',
        'bower_components/angulartics-google-analytics/dist/angulartics-ga.min.js',*/

        /*'bower_components/angular-input-stars-directive/angular-input-stars.js',
        'bower_components/ng-file-upload/ng-file-upload.min.js',
		'bower_components/satellizer/satellizer.min.js',
        'bower_components/ng-tags-input/ng-tags-input.min.js',
        'bower_components/angular-validation-match/dist/angular-validation-match.min.js',
        'bower_components/ngInfiniteScroll/build/ng-infinite-scroll.min.js',
        'bower_components/textAngular/dist/textAngular-rangy.min.js',
        'bower_components/textAngular/dist/textAngular-sanitize.min.js',
        'bower_components/textAngular/dist/textAngular.min.js',*/

	],
	js:[
		'resources/js/kg.js',
		'resources/js/client/kg.*.js',
		'resources/js/client/app.js',
	],
	css: [

        //semantic-ui
        //'bower_components/semantic/dist/semantic.min.css',
		'bower_components/semantic/dist/components/site.min.css',
		'bower_components/semantic/dist/components/reset.min.css',
		
		'bower_components/semantic/dist/components/button.min.css',
		'bower_components/semantic/dist/components/container.min.css',
		'bower_components/semantic/dist/components/header.min.css',
		'bower_components/semantic/dist/components/image.min.css',
		'bower_components/semantic/dist/components/label.min.css',
		'bower_components/semantic/dist/components/list.min.css',
		'bower_components/semantic/dist/components/segment.min.css',
		'bower_components/semantic/dist/components/icon.min.css',
		
		'bower_components/semantic/dist/components/form.min.css',
		'bower_components/semantic/dist/components/grid.min.css',
		'bower_components/semantic/dist/components/menu.min.css',
		'bower_components/semantic/dist/components/table.min.css',
		
		'bower_components/semantic/dist/components/card.min.css',
		'bower_components/semantic/dist/components/modal.min.css',
		'bower_components/semantic/dist/components/dimmer.min.css',
		'bower_components/semantic/dist/components/sidebar.min.css',
		'bower_components/semantic/dist/components/transition.min.css',
		
		//jquery
		'bower_components/circliful/css/material-design-iconic-font.min.css',
		'bower_components/circliful/css/jquery.circliful.css',
		
        //angular
        /*'bower_components/angular-input-stars-directive/angular-input-stars.css',
        'bower_components/ng-tags-input/ng-tags-input.min.css',
		'bower_components/textAngular/dist/textAngular.css',*/

        /*
        'public/fonts/icons.css',
        'resources/css/katalogram-icon.css',*/
		
		'public/fonts/Asap-Regular.css',
        'public/fonts/Panefresco500wtRegular.css',
        'public/fonts/icons.css',
		'bower_components/Ionicons/css/ionicons.min.css',
		//'bower_components/font-awesome/css/font-awesome.min.css',
		
        'resources/css/kg.css',
    ],
};

gulp.task('imagemin', function() {
  return gulp.src(paths.images)
    .pipe(imagemin({ progressive: true }))
    .pipe(gulp.dest('public/img'));
});

gulp.task('fontmin', function() {
  fontmin().src(paths.fonts)
    .use(fontmin.otf2ttf())
    .use(fontmin.ttf2woff({deflate: true}))
    .use(fontmin.ttf2eot())
    .use(fontmin.ttf2svg())
    .use(fontmin.css({
        fontPath: '/fonts/'
    }))
    .dest('public/fonts')
    .run();
});

gulp.task('libjsmin', function() {
  return gulp.src(paths.libjs)
    .pipe(uglify())
    .pipe(concat('lib.min.js'))
    .pipe(gulp.dest('public/js'));
});

gulp.task('jsmin', function() {
  return gulp.src(paths.js)
    .pipe(uglify())
    .pipe(concat('kg.min.js'))
    .pipe(gulp.dest('public/js'));
});

gulp.task('please-wait', function() {
  gulp.src(['bower_components/please-wait/build/please-wait.min.js'])
    .pipe(uglify())
    .pipe(gulp.dest('public/js'));
  gulp.src(['bower_components/please-wait/build/please-wait.css'])
    .pipe(cssmin())
    .pipe(gulp.dest('public/css'));
});

gulp.task('cssmin', function () {
    return gulp.src(paths.css)
        .pipe(stylus())
        .pipe(cssmin({processImport: false}))
        .pipe(concat('kg.min.css'))
        .pipe(gulp.dest('public/css'));
});

gulp.task('watch', function() {
  gulp.watch(paths.js, ['jsmin']);
  gulp.watch(paths.css, ['cssmin']);
  gulp.watch(paths.html, ['htmlpub']);
});

gulp.task('default', ['watch', 'imagemin', 'fontmin', 'libjsmin', 'jsmin', 'cssmin']);
