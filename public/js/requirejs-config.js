requirejs.config({
    baseUrl: '/js',
    paths: {
        jquery: "jquery.min",
        weather: "custom/weather",
        bootstrap: "bootstrap/bootstrap.bundle",
        news: "custom/news",
        domReady: "plugins/domReady",
        url: "custom/url"
    },
    shim : {
        bootstrap: ["jquery"]
    }
});