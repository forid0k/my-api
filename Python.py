import requests

signal = {
    "asset": "EURUSD",
    "signal": "BUY",
    "time": "1M",
    "strategy": "EMA"
}

res = requests.post("wss://ws2.market-qx.trade/socket.io/?EIO=3&transport=websocket
", json=signal)
print(res.json())
