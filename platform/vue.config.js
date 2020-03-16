const path = require('path');

const sassResources = [
  '@import "@/assets/styles/main.sass"',
];

const resolve = dir => path.join(__dirname, dir);

module.exports = {
  configureWebpack: {
    resolve: {
      extensions: ['.js', '.vue', '.json'],
      alias: {
        '@$': resolve('src'),
      },
    },
  },
  css: {
    loaderOptions: {
      sass: {
        data: sassResources.join(';'),
      },
    },
  },
};
