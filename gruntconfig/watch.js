'use strict';

var config = require('./config');

var watch = {
  css: {
    files: [
      config.src + '/**/*.scss'
    ],
    tasks: [
      // TODO :: CSSLint ?
    ]
  },

  scripts: {
    files: [
      config.src + '/**/*.js',
      '!' + config.src + '/htdocs/lib/**/*.js'
    ],
    tasks: [
      'jshint:scripts'
    ]
  },


  livereload: {
    files: [
      config.src
    ],
    options: {
      livereload: config.liveReloadPort
    }
  },

  gruntfile: {
    files: [
      'Gruntfile.js',
      'gruntconfig/**/*.js'
    ],
    tasks: [
      'jshint:grunt'
    ]
  }
};


module.exports = watch;
