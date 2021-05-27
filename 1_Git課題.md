# やんばるエキスパート Git 課題
Git操作は現場では必須のスキルとなります。ぜひ問題をこなして基礎力を磨いていって下さい。

## 教材のご案内

- [逆転教材の動画](https://www.yanbaru-code.com/movies)
- 逆転教材のテキスト教材（Git）
  - [Git 基本の流れ](https://www.yanbaru-code.com/texts/317)
  - [Vimの使い方](https://www.yanbaru-code.com/texts/192)
  - [Gitコマンド一覧・具体的な対処例](https://www.yanbaru-code.com/texts/193)

## 提出方法について

- 課題の Lv 1 から Lv 3 を全て済まされた上でGitHubにプッシュし，Slackの「課題提出」チャンネルに連絡下さい。
  - GitHub のリポジトリのリンクを添えて下さい

## Lv 1: コミット・チェックアウト

- `hello` ディレクトリを作成し，その中に `hello.html` を作成
- ローカルリポジトリを作成
- `hello.html` に次を追加してコミット

```
<h1>Hello, World</h1>
```

- `hello.html` に次を追加してコミット

```
<h2>Hi!!</h2>
```

## Lv 2: マージ・プッシュ

- `add_good_morning` というブランチを作成し，切り替える
- `hello.html` に次を追加してコミット

```
<h2>Good Morning!!!</h2>
```

- `master` ブランチに `add_good_morning` ブランチをマージする
- GitHub に `hello` という名前のリモートリポジトリを作成し，`master` ブランチをプッシュする

## Lv 3: プルリク

- ローカルの `hello` ディレクトリを削除し，GitHub から `hello` リポジトリをクローンする
- `add_introduce` というブランチを作成し，切り替える
- `hello.html` に次を追加してコミット（名前は自由に変更していただいてOKです）

```
<p>はじめまして，神里と申します。</p>
<p>よろしくお願いいたします。</p>
```

- `add_introduce` ブランチを GitHub にプッシュする
- `master` ブランチに対してプルリクを出す
- プルリクをマージして，`add_introduce` ブランチを削除