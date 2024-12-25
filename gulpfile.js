import gulp from 'gulp';
import sass from 'gulp-sass';
import * as sassCompiler from 'sass';  // Import Dart Sass
import autoprefixer from 'gulp-autoprefixer';
import cleanCSS from 'gulp-clean-css';
import header from 'gulp-header';  // Import gulp-header

// Configure gulp-sass to use Dart Sass
const sassWithCompiler = sass(sassCompiler);

// Define paths for SCSS files
const paths = {
    scss: 'wp-content/themes/ajsm/assets/styles/**/*.scss',  // All SCSS files in the 'styles' folder
    css: 'wp-content/themes/ajsm/',        // Output CSS to the 'css' folder inside 'styles'
};

// WordPress Theme Header Comment
const themeHeader = `/*
Theme Name: AJSM Painting
Theme URI: https://yourwebsite.com
Author: AJSM
Author URI: https://yourwebsite.com
Description: A theme for an interior painting business
Version: 1.0
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: ajsm-painting
*/\n`;

// Compile SCSS to CSS, add autoprefixer, and minify CSS
function styles() {
    return gulp.src(paths.scss)  // Take the SCSS files (now all .scss files)
        .pipe(sassWithCompiler().on('error', sassWithCompiler.logError))  // Compile SCSS to CSS
        .pipe(autoprefixer())  // Add vendor prefixes for cross-browser compatibility
        .pipe(cleanCSS())  // Minify CSS
        .pipe(header(themeHeader))  // Add the theme header comment to the top
        .pipe(gulp.dest(paths.css));  // Save compiled CSS in the 'styles/css' folder
}

// Watch for changes in SCSS files
function watch() {
    gulp.watch(paths.scss, styles);  // Watch all SCSS files for changes
}

// Export tasks for CLI usage
export { styles, watch };

// Default task
export default gulp.series(styles, watch);  // Run styles task and then watch for changes
