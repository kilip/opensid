const Encore = require('@symfony/webpack-encore');
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    .setOutputPath('../public/build/')
    .setPublicPath('/build')
    .addEntry('app', './src/main.js')
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .enableSassLoader()
    .configureBabel((config) => {
        config.plugins.push('@babel/plugin-proposal-class-properties');
    })
    .enableVueLoader(() => {},{
        version: 2
    })
    .configureDevServerOptions(options => {
        options.allowedHosts = 'all';
    })
    .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
