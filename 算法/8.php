// linux

	netstat -tulnp 

	    -t  tcp
	    -u  udp
	    -l  listen
	    -n  显示端口号
	    -p  显示进程号

	版本控制工具
		git svn

	svn是集中管理式的 所有的版本数据都存在svn服务器
		svn 端口号: 3690

		1. 创建一个文件夹svn
		2. svnadmin create /root/svn
		3. cd svn
		4. 修改passwd文件添加允许客户端连接的用户名和密码
		5. 修改authz文件，配置添加用户的权限
		6. 修改svnserve.conf文件 ，开启对应的选项，注意 
			realm = 放置svn版本文件的路径
		7. svnserve -d -r /root/svn
			-d 守护进程模式
			-r 后台运行

		在客户端测试

			安装svn tortoise 客户端



		svn checkout svn://192.168.6.121

		touch a.php

		svn add a.php

		svn commit -m '这是我的第一次,你知足吧'

		svn update 得到最新的数据

	


	git为分布式版本管理工具，每台机器上都有各自的版本
















// php