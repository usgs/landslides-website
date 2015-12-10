'use strict';

var config = require('./config');

var jshint = {
  options: {
    jshintrc: '.jshintrc'
  },
  grunt: [
    'Gruntfile.js',
    'gruntconfig/**/*.js'
  ],
  scripts: [
    config.src + '/**/*.js',
    '!' + config.src + '/htdocs/lib/**/*.js'
  ]
};


module.exports = jshint;
