const webpack = require('webpack');
const path = require('path');
const { WebpackManifestPlugin } = require('webpack-manifest-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');

let shared_manifest_seed = {};

const adminBuild = {
  entry: {
    admin: './src/admin/index.js'
  },
  output: {
    filename: 'admin.[hash].js',
    path: path.resolve(__dirname, 'public/assets')
  },
  module: {
    rules: [
      {
        test: [/\.eot$/, /\.svg$/, /\.ttf$/, /\.woff$/, /\.woff2$/],
        use: ['file-loader']
      },
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader'],
      },
      {
        test: /\.html$/,
        use: [{
          loader: 'html-loader',
          options: {
            minimize: true
          }
        }],
      },
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery'
    }),
    new WebpackManifestPlugin({
      publicPath: 'public/assets/',
      seed: shared_manifest_seed
    })
  ]
}

const frontendBuild = {
  entry: {
    frontend: './src/frontend/index.js'
  },
  output: {
    filename: 'frontend.[hash].js',
    path: path.resolve(__dirname, 'public/assets')
  },
  module: {
    rules: [
      {
        test: [/\.eot$/, /\.svg$/, /\.ttf$/, /\.woff$/, /\.woff2$/],
        use: ['file-loader']
      },
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader'],
      },
      {
        test: /\.html$/,
        use: [{
          loader: 'html-loader',
          options: {
            minimize: true
          }
        }],
      },
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery'
    }),
    new WebpackManifestPlugin({
      publicPath: 'public/assets/',
      seed: shared_manifest_seed
    }),
    new CleanWebpackPlugin()
  ]
}

module.exports = [adminBuild, frontendBuild];
