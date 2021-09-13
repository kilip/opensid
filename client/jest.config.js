module.exports = {
    preset: '@vue/cli-plugin-unit-jest/presets/no-babel',
    "moduleFileExtensions": [
        "js",
        "vue"
    ],
    "transform": {
        // process `*.vue` files with `vue-jest`
        ".*\\.(vue)$": "vue-jest"
    },
    "testMatch": [
        "**/src/**/*.spec.[jt]s?(x)"
    ],
    "collectCoverage": true,
    "collectCoverageFrom": [
        "**/src/components/*.{js,vue}",
        "!**/*.spec.js",
        "!**/*.spec.vue"
    ],
    "coverageDirectory": "coverage"
}
