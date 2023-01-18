#お手軽LAMP環境構築
PHP + Nginx + MySQL

#ファイル置き場
appディレクトリ配下に置いてください。

```
docker-compose up -d
```



## アプリのURL

```
http://localhost:8000/login
```



dockerコンテナの操作方法

```bash
#コンテナの作成と起動
make up:
	docker-compose up -d

#コンテナ・ネットワーク・イメージ・ボリュームの停止と削除
make down:
	docker-compose down

#コンテナ一覧
make ps:
	docker-compose ps

#下記３つはコンテナに入る
make app-laravel:
	docker-compose exec app bash

make db-laravel:
	docker-compose exec mysql bash

make web-laravel:
	docker-compose exec web bash
```

