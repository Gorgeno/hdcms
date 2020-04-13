const mix = require('laravel-mix')

mix.webpackConfig({
  resolve: {
    extensions: ['.js', '.vue'],
    alias: {
      '@': __dirname + '/web'
    }
  }
})
mix
  .js('web/app.js', 'public/js')
  .sass('web/assets/css/app.scss', 'public/css')
  .extract(['vue', 'vue-router', 'vuex', 'vue-video-player', 'moment', 'ant-design-vue'])

mix.browserSync('hdcms.test')
