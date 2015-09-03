module.exports = function (grunt) {
    var project = grunt.option('project');

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                    'tools_TV/style.css': 'tools_TV/sass/style.scss'
                }
            }
        },
        cssmin: { // minifying css task
            dist: {
                files: {
                    'tools_TV/style.min.css': 'tools_TV/style.css'
                }
            }
        },
        watch: {
            css: {
                files: 'tools_TV/**/*.scss',
                tasks: ['sass'],
                options: {
                    livereload: true,
                }
            },
            styles: {
                files: ['tools_TV/style.css'],
                tasks: ['cssmin']
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.registerTask('default', ['watch', 'cssmin']);
}