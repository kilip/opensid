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
        "**/assets/**/*.spec.[jt]s?(x)"
    ],
    "collectCoverage": true,
    "collectCoverageFrom": [
        "**/assets/components/*.{js,vue}",
        "!**/*.spec.js",
        "!**/*.spec.vue"
    ],
    "coverageDirectory": "build/jest"
}
