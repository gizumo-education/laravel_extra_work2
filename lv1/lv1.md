# Lv1課題
※Laravelレッスンで作成したTodoアプリケーションを使用します。

## 内容
- ヘッダ内ドロップダウンメニューに新しく追加した各リンクを押下したとき、それぞれ `OK` という文字列を返却させる

新しく定義するルートは下記

| メソッド | URI   | 名前       | コントローラー | アクション |
| :-       | :-    | :-         | :-             | :-         |
| GET      | /user | user.index | UserController | index      |
| GET      | /me   | me.show    | UserController | showMe     |

## 条件
- UserControllerは新規に作成する
- `Route::resource()` の使用は禁止
- この課題(`lv1.md`)と同階層にある `app.blade.php` を現在Laravelプロジェクトで使用している `app.blade.php` に上書きして使用する
    - `app.blade.php` はリンク先の中程にある`RAW`というボタンを押下して表示されるページで右クリック→`別名で保存`を選択するとダウンロードできます(※windowsの場合は`名前をつけて保存`)

## 制限時間
- 30分

## 課題が終わったら or 制限時間を過ぎたら
- `/request` で終わった旨、もしくは終わらなかった旨を報告


