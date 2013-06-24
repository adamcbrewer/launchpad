module.exports = function(grunt) {

    // Load the all the plugins that Grunt requires
    // grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    // grunt.loadNpmTasks('grunt-contrib-watch');
    // grunt.loadNpmTasks('grunt-modernizr');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-contrib-clean');


    /**
     * Project configuration.
     *
     */
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
            all: {
                files: ['**/*.js', '**/*.less'],
                tasks: [
                    'livereload',
                    'less:dev'
                ],
                options: {
                    nospawn: true,
                }
            },
            js: {
                files: ['**/*.js'],
                tasks: [
                    // 'livereload'
                ],
                options: {
                    nospawn: true,
                }
            },
            less: {
                files: ['**/*.less'],
                tasks: [
                    // 'livereload',
                    'less:dev'
                ],
                options: {
                    nospawn: true
                }
            }
        },

        // I need the the css output to originate from the same location.
        // The difference between the production level is the
        // level of compression
        less: {
            dev: {
                options: {
                    yuicompress: false,
                    compress: false
                },
                files: [
                    {
                        src: ['assets/css/less/core.less'],
                        dest: 'assets/css/core.css'
                    },
                    {
                        src: ['assets/css/less/core.less'],
                        dest: 'assets/css/core.css'
                    }
                ]
            },
            release: {
                options: {
                    yuicompress: true,
                    compress: true
                },
                files: [
                    {
                        src: ['assets/css/less/core.less'],
                        dest: 'assets/css/core.css'
                    },
                    {
                        src: ['assets/css/less/core.less'],
                        dest: 'assets/css/core.css'
                    }
                ]
            }
        },
        uglify: {
            // Compile all plugins into a single file.
            // Run this each time a file is added to the directory.
            //
            // TODO:
            // run this with grunt-contrib-watch
            plugins: {
                options: {
                    banner: '/*!\n' +
                        ' * Plugins - <%= grunt.template.today("yyyy-mm-dd H:MM:ss") %>\n' +
                        ' */\n',
                    compress: false,
                    preserveComments: 'all',
                    beautify: true,
                    mangle: false,
                    report: 'min'
                },
                files: [
                    {
                        src: [
                            'assets/js/plugins/*.js'
                        ],
                        dest: 'assets/js/plugins.js'
                    }
                ]
            },

            // Production-level code
            // TODO
            release: {
                options: {
                    banner: '/*!\n' +
                        ' * <%= pkg.name %> - <%= pkg.version %> - <%= grunt.template.today("yyyy-mm-dd H:MM:ss") %>\n' +
                        ' * https://github.com/adamcbrewer/launchpad\n *\n' +
                        ' */\n',
                    compress: true,
                    preserveComments: false,
                    mangle: false,
                    report: 'min'
                },
                files: [
                    {
                        src: [
                            'assets/js/script.js'
                        ],
                        dest: 'assets/js/min/script.build.min.js'
                    }
                ]
            }
        },
        // TODO
        // All of this
        modernizr: {
            // [REQUIRED] Path to the build you're using for development.
            "devFile" : "assets/js/libs/modernizr.js",
            // [REQUIRED] Path to save out the built file.
            "outputFile" : "assets/js/libs/modernizr-custom.js",
            // Based on default settings on http://modernizr.com/download/
            "extra" : {
                "shiv" : true,
                "printshiv" : false,
                "load" : true,
                "mq" : false,
                "cssclasses" : true
            },
            // Based on default settings on http://modernizr.com/download/
            "extensibility" : {
                "addtest" : false,
                "prefixed" : false,
                "teststyles" : false,
                "testprops" : false,
                "testallprops" : false,
                "hasevents" : false,
                "prefixes" : false,
                "domprefixes" : false
            },
            // By default, source is uglified before saving
            "uglify" : true,
            // Define any tests you want to impliticly include.
            "tests" : [],
            // By default, this task will crawl your project for references to Modernizr tests.
            // Set to false to disable.
            "parseFiles" : true,
            // When parseFiles = true, this task will crawl all *.js, *.css, *.scss files, except files that are in node_modules/.
            // You can override this by defining a "files" array below.
            "files" : [
                '*.js',
                '*.less'
            ],
            "excludeFiles": [],
            // When parseFiles = true, matchCommunityTests = true will attempt to
            // match user-contributed tests.
            "matchCommunityTests" : false,
            // Have custom Modernizr tests? Add paths to their location here.
            "customTests" : []
        },
        copy: {
            // Copies all the components installed from bower into the libs directory.
            //
            installFromBower: {
                files: [
                    {
                        expand: true,
                        flatten: true,
                        src: [
                            'bower_components/*/*.js',
                            '!bower_components/*/grunt.js'
                        ],
                        dest: 'assets/js/libs/',
                        filter: 'isFile'
                    }
                ]
            }
        },
        clean: {
            dev: [
                "bower_components/*",
                "!bower_components/.gitignore",
                "assets/js/libs/*",
                "!assets/js/libs/.gitignore",
                "assets/js/plugins.js"
            ],
            release: []
        },
    });


    /**
     * default tasks when Grunt is run
     * without any arguments
     *
     */
    grunt.registerTask('default', [
        'copy:installFromBower',
        'uglify:plugins'
    ]);
    grunt.registerTask('build', ['less:dev', 'uglify:dev']);
    grunt.registerTask('build:release', ['less:release', 'uglify:release']);
    grunt.registerTask('build:watch', ['less:dev', 'watch:less']);
};
