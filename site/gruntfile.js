module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    file_append: {
    default_options: {
      files: [
        {
          append: "text to append",
          prepend: "text to prepend",
          input: '/path/to/input/file'
          output: 'path/to/output/file'
        }
      ]
    }
  }
  });

  grunt.loadNpmTasks('grunt-file-append');
};
