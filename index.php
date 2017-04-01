//password半角英数字チェック
$data['AdminManagement']['password'] = $this->data['AdminManagement']['password'];

if(preg_match('/^[^a-zA-Z0-9¥!¥-¥_¥@¥.]+$/', $data['AdminManagement']['password'])) {
  //エラーメッセージを表示
  $val_mes .= 'W515_006 「パスワード」に使用できない文字列が含まれています。<br>';
  $err_flg = 1;
}
if(strlen($this->['AdminManagement']['password']) < 3) {
  //エラーメッセージを表示
  $val_mes .= 'W515_007 「パスワード」は3文字以上20文字以下で入力してください。<br>';
  $err_flg = 1;
}
if(strlen($this->['AdminManagement']['password']) > 20) {
  //エラーメッセージを表示
  $val_mes .= 'W515_008 「パスワード」は3文字以上20文字以下で入力してください。<br>';
  $err_flg = 1;
}

//ハッシュ化処理
$hash_pass = hash_hmac('md5',$this->['AdminManagement']['password'],'MNSREIP9',FALSE);
$this->['AdminManagement']['password'] = $hash_pass
