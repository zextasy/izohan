module.exports = {
 content: require('fast-glob').sync([
    'source/**/*.{blade.php,blade.md,md,html,vue}',
    '!source/**/_tmp/*' // exclude temporary files
  ],{ dot: true }),
  theme: {
    colors: {
      'izo-purple': '#551A8B',
    },
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      backgroundImage: {
        'izo-text': "url('/assets/images/izohan-text-transparent.png')",
        'izo-arrow': "url('/assets/images/arrow-bg.png')",
        'footer-texture': "url('/img/footer-texture.png')",
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
};
