document.addEventListener('DOMContentLoaded', function () {
    // Configuration du widget TradingView
    new TradingView.widget({
        "width": 1366,
        "height": 720,
        "symbol": "BTCUSDT",  // Symbole de l'instrument financier
        "interval": "1",   // Intervalle de temps (1 minute dans cet exemple)
        "timezone": "Etc/UTC",
        "theme": "light",
        "style": "1",
        "locale": "en",
        "toolbar_bg": "#f1f3f6",
        "enable_publishing": false,
        "withdateranges": true,
        "range": "ytd",
        "hide_side_toolbar": false,
        "allow_symbol_change": true,
        "container_id": "tradingview-widget-container"
    });
});
