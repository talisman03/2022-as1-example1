# Ubuntuのイメージを使った基本
# ここで使うのはFROMとRUNです

FROM ubuntu:22.04


# RUNを使い、slパッケージを入れてみましょう
RUN apt-get update
RUN apt-get install -y sl
# RUNを使い、/usr/games/slを/usr/local/binにsymlinkしておきましょう
RUN ln -s /usr/games/sl /usr/local/bin/sl