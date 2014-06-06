module.exports = function(grunt) {

    // 1. All configuration goes here
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        // JavaScript
        concat: {
            // 2. Configuration for concatinating files goes here.
            dist: {
                src: [
                    'wp-content/themes/%THEME_SLUG%/js/lib/*.js', // All JS in the libs folder
                    'wp-content/themes/%THEME_SLUG%/js/main.js'  // This specific file
                ],
                dest: '.tmp/production.js',
            }
        },
        uglify: {
            build: {
                src: '.tmp/production.js',
                dest: 'wp-content/themes/%THEME_SLUG%/js/production.min.js'
            }
        },
        // Style
        sass: {
            dist: {
                options: {
                    style: 'expanded'
                },
                files: {
                    '.tmp/style.css': 'wp-content/themes/%THEME_SLUG%/sass/style.scss'
                }
            }
        },
        autoprefixer: {
            dist: {
                files: {
                    'wp-content/themes/%THEME_SLUG%/style.css': '.tmp/style.css'
                }
            }
        },

        watch: {
            options: {
                livereload: true,
            },
            css: {
                files: ['wp-content/themes/%THEME_SLUG%/*.scss', 'wp-content/themes/%THEME_SLUG%/sass/*.scss'],
                tasks: ['sass', 'autoprefixer'],
                options: {
                    spawn: false,
                }
            },
            scripts: {
                files: ['wp-content/themes/%THEME_SLUG%/js/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'sass', 'autoprefixer']);

};