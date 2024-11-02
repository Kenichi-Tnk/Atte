# 勤怠システム
勤怠システムを作成してみました。
ログインの後、勤務開始・終了・休憩開始・終了時間の管理ができる。
勤務開始・終了は１日１回の押下、休憩は勤務開始ボタン押下後複数回押下できる仕様。
![alt text](<スクリーンショット (1)-1.png>)




usersテーブル					
カラム名	型	PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
user_id	bigint unsigned	〇	〇	〇	
name	string			〇	
email	string		〇	〇	
email_verified_at	string				
password	string			〇	
status	integer				
created_at	timestamp				
updated_at	timestamp				
					
worksテーブル					
カラム名	型	PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
work_id	integer	〇	〇	〇	
date	date				
start	time				
end	time			〇	
user_id	integer				〇
createed_at	timestamp				
updated_id	timestamp				
restsテーブル					
列名	型	PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
rest_id	integer	〇	〇	〇	
start	time				
end	time				
work_id	integer			〇	
createed_at	timestamp				〇
updated_id	timestamp				
					