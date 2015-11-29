module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    sass: {
      dist: {
        options:{
          style:'compressed'
        },
        files: {
          'style.css' : 'scss/style.scss', 'css/front-page.css' : 'scss/front-page.scss'
        }
      }
    },
    postcss: {
      options: {
      map: true, // inline sourcemaps      

      processors: [
        require('pixrem')(), // add fallbacks for rem units
        require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
        require('cssnano')() // minify the result
        ]
      },
      files: {
        'style.css' : 'style.css', 'css/front-page.css' : 'css/front-page.css'
      }
    },
    watch: {
      css: {
        files: 'scss/*.scss',
        tasks: ['sass', 'postcss']
      }
    }
  });
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.registerTask('default',['watch']);
}