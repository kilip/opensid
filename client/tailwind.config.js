module.exports = {
  purge: [
    './src/**/*.html',
    './src/**/*.js',
  ],
  variants: {
    extend: {
      opacity: ['disabled'],
      cursor: ['disabled'],
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
};
