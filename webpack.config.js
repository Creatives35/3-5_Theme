const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const CssMinimizerPlugin = require( 'css-minimizer-webpack-plugin' );
const HtmlWebpackPlugin = require( 'html-webpack-plugin' );

module.exports = {
	mode: 'production',
	entry: './app/src/index.js',
	output: {
		path: path.resolve( __dirname, './app/build' ),
		filename: '[name].js',
	},
	devtool: 'inline-source-map',
	plugins: [
		new MiniCssExtractPlugin( {
			filename: './css/main.css',
		} ),
		new HtmlWebpackPlugin( {
			template: './app/src/index.html',
		}
		),
	],
	optimization: {
		// minification - only performed when mode = production
		minimizer: [
			// js minification - special syntax enabling webpack 5 default terser-webpack-plugin
			`...`,
			// css minification
			new CssMinimizerPlugin(),
		],
	},
	module: {
		rules: [
			{
				test: /\.(sass|scss)$/,
				use: [ MiniCssExtractPlugin.loader, 'css-loader', 'sass-loader' ],
			},
			{
				test: /\.(png|svg|jpg|jpeg|gif)$/i,
				type: 'asset/resource',
			},
			{
				test: /\.(woff|woff2|eot|ttf|otf)$/i,
				type: 'asset/resource',
			},
			{
				test: /\.pdf$/i,
				type: 'asset/source',
			},
		],
	},
};
