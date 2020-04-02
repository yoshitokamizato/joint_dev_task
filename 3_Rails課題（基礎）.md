# 共同開発 Rails 課題（基礎）

## 教材のご案内

- 逆転教材の動画教材
- 逆転教材のテキスト教材
  - 環境構築の動画・テキスト教材も用意しております
- 共同開発限定 過去の勉強会動画（第４回 〜 ）

## 課題の提出方法

- 各課題ごとにGitHubリポジトリを作成し，プッシュして下さい。
  - 課題ディレクトリ`joint_dev_task`内にRailsアプリを作成しないようにして下さい

## 注意点

- 課題のアプリを１つ作成する度に提出して下さい。

- Rails のバージョンは，原則 5 系を指定して下さい。
  - Rails 6 の場合，Javascript が関わる `Bootstrap`, `Chart.js`, `ActionCable` の導入方法が教材と異なります。

- データベースは `PostgreSQL` を指定して進めて下さい。（最初の課題を除く）
  - あらかじめ `Homebrew` にインストールし，設定を行う必要があります。

```
# （参考）PostgreSQLをデータベースに指定して Rails 5.2.4 のアプリを作成するコマンド
$ rails _5.2.4_ new アプリ名 -d postgresql
```

- `.gitignore` に次を追加し，Gitの管理下から外すようにして下さい。
  - GitHubに不要なファイルをプッシュしないようにするためです

```
.DS_Store
/vendor/bundle
```

## 課題

### Rails 課題1

「Hello World」を表示するアプリを作成し，提出して下さい。
- 【動画教材】 Hello World アプリの解説
- 【テキスト教材】 Ruby on Rails で Hello World!!

### Rails 課題2

1. `resources` を使わない「CRUDアプリ」を作成してコミットして下さい。

- 【動画教材】resourcesを使わないCRUDアプリの解説
- 【テキスト教材】CRUD処理の実装

2. ブランチを切り替え， `resources` を使った「CRUDアプリ」に修正してプルリク を出し，提出して下さい。（マージはしないで下さい！）

- 【動画教材】resourcesを使ったCRUDアプリの解説
- 【テキスト教材】resources を使ったCRUD処理の実装
