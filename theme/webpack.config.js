require('dotenv').config()
const path = require('path');
const Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('./public/build/')
    .setManifestKeyPrefix('./public/build')
    .setPublicPath(process.env.PUBLIC_PATH || '/wp-content/themes/wordpress-theme-dev')
    .addEntry('app', './assets/app.js')
    .disableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .configureBabel((config) => {
        config.plugins.push('@babel/plugin-proposal-class-properties');
    })
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })
    .enablePostCssLoader((options) => {
        options.postcssOptions = {
            // directory where the postcss.config.js file is stored
            config: path.join(__dirname, './postcss.config.js')
        };
    })
    .enableSassLoader()
;

module.exports = Encore.getWebpackConfig();