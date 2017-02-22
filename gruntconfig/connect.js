'use strict';

var config = require('./config');


var connect = {
  options: {
    hostname: '*'
  },
  rules: [
  ],

  proxies: [
    {
      context: '/theme',
      host: 'localhost',
      port: config.templatePort,
      rewrite: {
        '^/theme': ''
      }
    },
    {
      context: [
        '/hazards/postfire_debrisflow',
        '/static'
      ],
      host: 'landslides.usgs.gov',
      port: 80,
      headers: {
        'host': 'landslides.usgs.gov',
        'accept-encoding': 'identity'
      }
    }
  ],

  dev: {
    options: {
      base: [config.src + '/htdocs'],
      livereload: config.liveReloadPort,
      middleware: function (connect, options, middlewares) {
        middlewares.unshift(
          require('grunt-connect-rewrite/lib/utils').rewriteRequest,
          require('grunt-connect-proxy/lib/utils').proxyRequest,
          require('gateway')(options.base[0], {
            '.php': 'php-cgi',
            'env': {
              'PHPRC': 'node_modules/hazdev-template/dist/conf/php.ini'
            }
          })
        );

        return middlewares;
      },
      open: 'http://127.0.0.1:' + config.srcPort + config.ini.MOUNT_PATH + '/',
      port: config.srcPort,
    }
  },

  template: {
    options: {
      base: ['node_modules/hazdev-template/dist/htdocs'],
      middleware: function (connect, options, middlewares) {
        middlewares.unshift(require('gateway')(options.base[0], {
          '.php': 'php-cgi',
          'env': {
            'PHPRC': 'node_modules/hazdev-template/dist/conf/php.ini'
          }})
        );

        return middlewares;
      },
      port: config.templatePort
    }
  },
};


module.exports = connect;
