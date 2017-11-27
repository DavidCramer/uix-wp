module.exports = function (grunt) {
    // Project configuration.

    grunt.initConfig({
        pkg     : grunt.file.readJSON( 'package.json' ),
        gitclone: {
            clone: {
                options: {
                    repository: 'https://github.com/Desertsnowman/uix',
                    branch: '3.0.x',
                    directory: 'uix-install'
                }
            }
        },
        copy: {
            main: {
                files:[
                    {
                        expand: false,
                        cwd: './',
                        src: 'uix-install/uix-bootstrap.php',
                        dest: '<%= pkg.namespace %>-bootstrap.php'
                    },
                    {
                        expand: false,
                        cwd: './',
                        src: 'uix-install/uix-plugin.php',
                        dest: '<%= pkg.namespace %>-plugin.php'
                    },
                    {
                        expand: true,
                        cwd: './uix-install/includes/',
                        src: '**',
                        dest: 'includes/'
                    },
                    {
                        expand: true,
                        cwd: './uix-install/assets/css/',
                        src: '**',
                        dest: 'assets/css/'
                    },
                    {
                        expand: true,
                        cwd: './uix-install/assets/js/',
                        src: '**',
                        dest: 'assets/js/'
                    },
                    {
                        expand: true,
                        cwd: './uix-install/assets/svg/',
                        src: '**',
                        dest: 'assets/svg/'
                    },
                    {
                        expand: true,
                        cwd: './uix-install/assets/controls/',
                        src: '**',
                        dest: 'assets/controls/'
                    },
                    {
                        expand: true,
                        cwd: './uix-install/classes/uix/',
                        src: '**',
                        dest: 'classes/<%= pkg.namespace %>/'
                    }
                ]
            }
        },
        replace : {
            plugin_file: {
                src: [ '*.php', 'includes/**/*.php', 'classes/**/*.php','assets/**/*.css','assets/**/*.js' ],
                overwrite: true,
                replacements: [
                    {
                        from: "%namespace%",
                        to: "<%= pkg.namespace %>"
                    },
                    {
                        from: "%slug%",
                        to: "<%= pkg.slug %>"
                    },
                    {
                        from: "%prefix%",
                        to: "<%= pkg.prefix %>"
                    },
                    {
                        from: "%name%",
                        to: "<%= pkg.plugin_name %>"
                    },
                    {
                        from: "%description%",
                        to: "<%= pkg.description %>"
                    },
                    {
                        from: "%author%",
                        to: "<%= pkg.author %>"
                    },
                    {
                        from: "%url%",
                        to: "<%= pkg.url %>"
                    },
                    {
                        from: "%version%",
                        to: "<%= pkg.version %>"
                    },
                    {
                        from: "text-domain",
                        to: "<%= pkg.textdomain %>"
                    },
                    {
                        from: 'uix',
                        to: "<%= pkg.namespace %>"
                    },
                    {
                        from: 'Plugin Name: UIX',
                        to: "Plugin Name: <%= pkg.plugin_name %>"
                    },
                    {
                        from: 'Description: UI Framework for WordPress Plugins.',
                        to: "Description: <%= pkg.description %>"
                    },
                    {
                        from: 'UIX',
                        to: "<%= pkg.prefix %>"
                    }
                ]
            }
        },
        rename: {
            core: {
                src: './classes/<%= pkg.namespace %>/ui/uix.php',
                dest: './classes/<%= pkg.namespace %>/ui/<%= pkg.namespace %>.php'
            }
        },
        clean: {
            installer: ["uix-install/**", "uix-plugin.php"],
        }
    });

    //load modules
    grunt.loadNpmTasks( 'grunt-shell');
    grunt.loadNpmTasks( 'grunt-contrib-copy' );
    grunt.loadNpmTasks( 'grunt-git' );
    grunt.loadNpmTasks( 'grunt-text-replace' );
    grunt.loadNpmTasks( 'grunt-contrib-clean' );
    grunt.loadNpmTasks( 'grunt-rename' );

    //register default task
    grunt.registerTask( 'uix', [ 'gitclone', 'copy', 'rename', 'clean', 'replace' ] );

};
