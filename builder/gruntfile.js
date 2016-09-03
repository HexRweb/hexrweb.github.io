/*
 * assemble-examples <https://github.com/assemble/assemble-examples>
 *
 * Copyright (c) 2014 Jon Schlinkert, Brian Woodward, contributors.
 * Licensed under the MIT license.
 */


module.exports = function(grunt) {
  'use strict';

  grunt.initConfig({
    assemble: {
      options: {
        flatten: true,
        partials: ['templates/includes/*.hbs'],
        layoutdir: 'templates/layouts',
        layout: 'default.hbs'
      },
      site: {
        files: {'dest/': ['templates/*.hbs']}
      }
    },
    htmlmin: {
      dest: {
        options:{
          collapseWhitespace:true,
          keepClosingSlash: true,
          removeComments:true,
        },
        files:[{
            expand: true,
            src: 'dest/**/*.html',
            dest: 'out'
          }]
      }
    }
  });

  // Load the Assemble plugin.
  grunt.loadNpmTasks('assemble');
  grunt.loadNpmTasks('grunt-contrib-htmlmin');
  // The default task to run with the `grunt` command.
  grunt.registerTask('default', ['assemble','htmlmin']);
};