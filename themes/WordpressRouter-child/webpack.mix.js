let mix = require('laravel-mix');

mix.js('assets/js/app.js','dist')
   .vue()
   // .react()
   .sass('assets/styles/app.scss', 'dist');
 
mix.webpackConfig({
      stats: {
          children: true,
      },
  });
  

// mix.browserSync({
//     proxy: 'http://wordpressrouter.test/',
// });
