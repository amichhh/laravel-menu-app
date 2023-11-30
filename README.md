# Laravelメニューアプリ
LaravelとBootStrapを使用した、メニュー情報を閲覧・管理するWEBアプリケーションです。

利用者画面では、カテゴリー別の商品一覧を閲覧できます。
管理者画面では、商品とカテゴリーの登録・編集・削除が可能です。
管理者画面にアクセスするとLaravelのログインページに遷移するため、ログインが必要です。

## Modelの作成
`php artisan make:model [モデル名] -m`コマンドを実行。
  - `database/migrations`配下に`[作成日時]_create_[モデル名]_table.php`ファイルが作成される。
上記ファイルに移動し、カラムを追加する。
```
public function up()
{
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('name');  // 追記
        $table->timestamps();
    });
}
```
`php artisan migrate`コマンドでマイグレーションを実行。

## Controllerの作成
`php artisan make:controller [コントローラー名] -r`コマンドを実行。
  - `-r`オプションを指定すると、基本的なCRUDルーティングのアクションが自動で入った状態でコントローラーが作成される。
  - `app/Http/Controllers`配下にファイルが生成される。

## ルーティングの設定
リソースルーティングを使用する。
  - コントローラーにある自動生成された7つのアクションに対応する典型的なCRUDルーティングを１行で設定できる。
`routes`配下の`web.php`に`Route::resource('[パス]', [コントローラー]);`を追加する。
  - `php artisan route:list`コマンドでルーティングの確認が可能。

## Viewの作成
`resources/views`配下に(モデルごとにディレクトリを作成し)`[xxx].blade.php`ファイルを作成する。

## Font Awesomeの追加
https://qiita.com/Charry/items/95df07e171e469b68ea7
