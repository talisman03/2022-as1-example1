# イメージに実行情報を埋め込む
# ここではFROMとRUNに加えて、CMDを学びます

FROM ubuntu:22.04
# apt-getを使って、cowsayをインストールさせましょう
# 自動的にcowsayで牛さんに"Hello, World!"と叫ばせてみましょう
RUN apt-get update
RUN apt-get install -y cowsay
CMD /usr/games/cowsay "Hello, World!"
