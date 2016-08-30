module.exports = function (grunt) {
    // Project configuration.
    
    grunt.initConfig({
        pkg     : grunt.file.readJSON( 'package.json' ),
        gitclone: {
            clone: {
                options: {
                    repository: 'https://github.com/Desertsnowman/UIX',
                    branch: 'master',
                    directory: 'uix-install'
                }
            }
        },
        shell: {
            install: {
                command: 'npm install --prefix ./uix-install'
            },
            build: {
                command: "grunt --slug=<%= pkg.namespace %> --base ./uix-install --gruntfile ./uix-install/GruntFile.js default"
            }
        },
        replace : {
            plugin_file: {
                src: [ '*.php', 'includes/**/*.php', 'classes/**/*.php' ],
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
                        from: 'uixv2',
                        to: "<%= pkg.namespace %>"
                    },
                    {
                        from: 'UIXV2',
                        to: "<%= pkg.prefix %>"
                    }                
                ]
            }
        },        
        clean: {
          installer: ["uix-install/**"],
        }
    });

    //load modules
    grunt.loadNpmTasks( 'grunt-shell');
    grunt.loadNpmTasks( 'grunt-contrib-copy' );
    grunt.loadNpmTasks( 'grunt-git' );
    grunt.loadNpmTasks( 'grunt-text-replace' );
    grunt.loadNpmTasks( 'grunt-contrib-clean' );

    //register default task
    grunt.registerTask( 'uix', [ 'gitclone', 'shell', 'clean', 'replace' ] );

};
