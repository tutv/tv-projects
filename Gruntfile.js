module.exports = function(grunt) {
    var project = grunt.option('project');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                     'tools_TV/style.min.css' : 'tools_TV/sass/style.scss'
                }
            }
        },
        watch: {
            css: {
                files: 'tools_TV/**/*.scss',
                tasks: ['sass']
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default',['watch']);
}