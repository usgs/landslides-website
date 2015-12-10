'use strict';

var fs = require('fs'),
    ini = require('ini');

var BASE_PORT,
    iniConfig,
    iniFile;


BASE_PORT = 9080;
iniFile = './src/conf/config.ini';

if (fs.existsSync(iniFile)) {
  iniConfig = ini.parse(fs.readFileSync(iniFile).toString());
} else {
  iniConfig = {
    'MOUNT_PATH': '' // No trailing slash. For root, leave blank.
  };
}



var config = {
  ini: iniConfig,

  src: 'src',

  liveReloadPort: BASE_PORT + 9,
  srcPort: BASE_PORT + 0,
  templatePort: BASE_PORT + 4
};


module.exports = config;
