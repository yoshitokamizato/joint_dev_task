# チーム開発 Rails 課題（応用）

## 注意点

- 課題のアプリを１つ作成する度に提出して下さい。

- データベースは `PostgreSQL` を指定して進めて下さい。

- `.gitignore` に次を追加し，Gitの管理下から外すようにして下さい。
  - GitHubに不要なファイルをプッシュしないようにするためです

```
.DS_Store
/vendor/bundle
```

---

## ■ Rails 課題3

### 課題3 参考教材

まずはこちらを一通り学習されてから課題に取り組まれることをお勧めします。

- [(やんばるエキスパート教材)デバッグツール（binding.pry）の使い方](https://www.yanbaru-code.com/texts/265)

- [【YouTube】（バグ取り解説・その1）NoMethodError](https://www.youtube.com/watch?v=aLw627JQRhk)

- [【YouTube】（バグ取り解説・その2）フォームの routing error](https://www.youtube.com/watch?v=fFH3oyMkVWM)

### 課題3 内容

以下のリンクに記載した「デバッグ課題」を解いて下さい。

[Rails 課題3のリポジトリはこちら](https://github.com/yanbaru-expert/debug_shop_app)

---

## ■ Rails 課題4

### 課題4 参考教材

まずはこちらを一通り学習されてから課題に取り組まれることをお勧めします。

- [メッセージ投稿アプリ（その1・CRUD処理）](https://www.yanbaru-code.com/texts/269)
- [メッセージ投稿アプリ（その2・エラー処理）](https://www.yanbaru-code.com/texts/270)
- [【やんばるエキスパート教材】検索機能](https://www.yanbaru-code.com/texts/221)

### 課題4 内容

次のような「投稿アプリ」を実装して下さい。

- 投稿は `posts`テーブル を利用，`body` カラム に投稿内容を保存
  - `body` カラムに空文字が入らないようにバリデーションを入れること
- `rails db:seed` で50件の初期データが入るようにする
- 「投稿一覧ページ」の条件
  - トップページ ([http://localhost:3000](http://localhost:3000)) を「投稿一覧ページ」とする
  - 「新しい投稿が上，古い投稿が下」となるように並べる
  - 10件ごとのページネーションを実装
- 「新規投稿機能」の条件
  - 「新規投稿フォーム」は「投稿一覧ページ」の一番上に配置
  - 「新規投稿ページ」を別に作成しないこと
  - テキストフィールドを「入力必須」にすること（フロント側で対処）
  - 投稿後は「トップページ」にリダイレクト

![rails_4_a](./images/rails_4_a.png)

### 課題4 手順

以下のコマンドでアプリの準備を行って下さい。（`--minimal` はアプリを最小構成にするオプションです）

```zsh:ターミナル
rails new pagination_app -d postgresql --minimal -T
cd pagination_app
git add .
git commit -m init
```

`.gitignore` に `.DS_Store`, `/vendor/bundle` を追加して次を実行

```
git add .
git commit -m ".gitignore に .DS_Store と /vendor/bundle を追加"
```

次にモデルとマイグレーションファイルを作成しましょう。

```
rails g model Post body:string
```

作成されたマイグレーションファイルの `t.string :body` に `null: false` を追加してから以下を実行

```
rails db:create db:migrate
git add .
git commit -m "Postモデルを作成"
```

次にコントローラとビューファイルを作成して下さい。

```
rails g controller posts index create --skip-assets --skip-helper --skip-routes
rm -f app/views/posts/create.html.erb
git add .
git commit -m "posts コントローラとビューファイルを作成"
```

- ルーティングは次の形式として下さい

```rb
Rails.application.routes.draw do
  root 'posts#index'
  resources :posts, only: :create
end
```

- 以下の機能を順に実装してみましょう

- [ ] `body` カラムが「空文字」で保存できないようにバリデーションを追加
- [ ] `db/seeds.rb` に50件の初期データが入るようにプログラムを書く
  - 初期データの内容は自由です。 `faker` を使用しても使用しなくてもOK
- [ ] `rails db:seed` を実行
- [ ] 投稿一覧ページで，投稿の一覧を表示できるようにする
  - 「新しい投稿が上，古い投稿が下」となるように並べる点に注意
  - 投稿は `p` タグで並べて下さい。 `table` タグを使用する必要はありません
  - `each` を使わず「[コレクションをレンダリング](https://railsguides.jp/layouts_and_rendering.html#%E3%82%B3%E3%83%AC%E3%82%AF%E3%82%B7%E3%83%A7%E3%83%B3%E3%82%92%E3%83%AC%E3%83%B3%E3%83%80%E3%83%AA%E3%83%B3%E3%82%B0%E3%81%99%E3%82%8B)」を利用しましょう
  - Railsサーバーを起動して動作確認

![rails_4_b](./images/rails_4_b.png)

- [ ] ページネーションを実装
  - 【参考】「検索機能(Ransack)」の「ページネーション」
  - `10件` ずつ表示にすること

![rails_4_c](./images/rails_4_c.png)

- [ ] 新規投稿フォームを実装
  - 投稿一覧ページ一番上に配置
  - 新しくページを作らないこと
  - 空文字投稿できないように「フロント側」で対処（課題3を参考に）

![rails_4_d](./images/rails_4_d.png)

- [ ] 新規投稿できるようにする
  - 投稿後は「トップページ」にリダイレクト

### 課題4 補足

- テーブルの制約・バリデーション・フラッシュ・エラー処理は無しでOKです

---

## Rails 課題5

次のような「ユーザーのログイン機能」を実装して下さい。

- ログイン機能
  - Devise

### 課題5 

rails new devise_sample -d postgresql -T
cd devise_sample
rails db:create

「ActiveAdmin を使った管理者画面」のアプリを作成して下さい。

- [【やんばるエキスパート教材】ログイン機能](https://www.yanbaru-code.com/texts/219)



## Rails 課題6

「Ransack を使った検索機能」のアプリを作成して下さい。

- [【テキスト教材】検索機能](https://www.yanbaru-code.com/texts/221)

## Rails 課題7

「RSpec を使ってテストコード」のアプリを作成して下さい。

- [【テキスト教材】テストコードの実装（RSpec）](https://www.yanbaru-code.com/texts/223)

## Rails 課題8

「Markdown を導入」したアプリを作成して下さい。

- [【テキスト教材】RailsアプリへのMarkdownの導入](https://www.yanbaru-code.com/texts/224)