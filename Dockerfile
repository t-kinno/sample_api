# ベースイメージはPHP公式の最新安定版を使用
FROM php:8.2-apache

# 作業ディレクトリを設定
WORKDIR /var/www/html

# Apacheのmod_rewriteを有効化（必要に応じて）
RUN a2enmod rewrite

# 必要なPHP拡張モジュールをインストール
RUN docker-php-ext-install pdo_mysql

# ローカルのPHPソースコードをコンテナにコピー
COPY . /var/www/html

# パーミッション設定（必要に応じて）
RUN chown -R www-data:www-data /var/www/html

# ポート80を公開
EXPOSE 80

# Apacheをフォアグラウンドで起動
CMD ["apache2-foreground"]