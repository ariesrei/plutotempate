const path =                    require('path');
const common =                  require('./webpack.common');
const { merge } =               require('webpack-merge');
 
module.exports = merge(common, {
    mode: "production",
    optimization: {
        minimize: true
    },
    output: {
        filename: '[name].min.js',
        path: path.resolve(__dirname, 'assets/dist')
    }
});