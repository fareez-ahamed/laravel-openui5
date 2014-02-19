var gulp = require('gulp');

gulp.task('move-openui5',function() {
	return gulp.src('bower_components/openui5-bower/resources/**/*')
		.pipe(gulp.dest('public/resources'));
});