module.exports = {
    "proxy": 'http://127.0.0.1:8000/',
    //"reloadDelay": 2000,
    "injectChanges": false,
    "online": false,
    "files": [
        "public/**/*.*",
        "app/**/*.*",
        "resources/**/*.*",
        "routes/**/*.*",
    ],
    //"browser": "chrome"
};