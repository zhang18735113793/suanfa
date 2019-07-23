shell

	查看shell种类
		cat /etc/shells
			/bin/bash <==> /bin/sh

	统计行数 wc -l 行数 -w 单词数  -c 字符数

	分割行  

		cat /etc/passwd | cut -d ':' -f 1

		-d : 分割符
		-f : 哪些字段

	sort [-fbMnrtuk] [file or stdin]
		-f ： 忽略大小写
		-b ： 忽略空格部分
		-M ： 以月份的名字来排序
		-n ： 使用纯数字进行排序
		-r ： 反向排序
		-u ： uniq 相同数据行只出现一个
		-t ： 分隔符，默认以[Tab]键来分隔
		-k ： 以哪个区间来进行排序

	cat /etc/passwd | sort -t ":" -r -n -k 3 

用户
	配置文件

		用户信息 /etc/passwd
		密码 /etc/shadow  影子文件
		组  /etc/group
		组密码 /etc/gshadow

	骨架文件


	注册/添加

	 添加用户 useradd zhouguoqiang
	 设置密码 passwd zhouguoqiang

	 允许用户登录需要设置shell环境为 /bin/bash
	 不允许用户登录 /sbin/nologin

	 查看当前是哪个账户 whoami
	 					id

	 查看哪个账户正在使用主机  who

	 修改用户的信息 usermod

	 删除用户  userdel
