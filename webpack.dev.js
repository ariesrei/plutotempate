const path =                            require('path');
const common =                          require('./webpack.common');
const { merge } =                       require('webpack-merge');
const CssMinimizerPlugin =              require("css-minimizer-webpack-plugin");



module.exports = merge(common, {
    mode: "development",
    watch: true,
    output: {
        filename: '[name].dev.js',
        path: path.resolve(__dirname, 'assets/dist')
    },
    optimization: {
        minimize: true,
        splitChunks: {
            cacheGroups: {
              styles: {
                name: "main.min",
                type: "css/mini-extract",
                chunks: "all",
                enforce: true
              }
            }
        },
        minimizer: [
            new CssMinimizerPlugin(),
        ]
    }
});